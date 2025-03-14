<?php

namespace App\Http\Controllers;


use App\Models\Divisi;
use App\Models\Magang;
use App\Models\Peserta;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class RegistrasiController extends Controller
{
    public function adminIndex(Request $request)
{
    // Ambil nilai dari input pencarian dan pengurutan
    $search = $request->input('search');
    $sort = $request->input('sort', 'ID_Registrasi'); // Default: urutkan berdasarkan ID_Registrasi
    $order = $request->input('order', 'asc'); // Default: ascending

    // Query awal untuk mengambil data registrasi
    $query = Registrasi::query();

    // Tambahkan filter pencarian jika ada input search
    if ($search) {
        $query->whereHas('peserta', function ($q) use ($search) {
            $q->where('Nama', 'like', "%{$search}%")
              ->orWhere('NISN_NIM', 'like', "%{$search}%");
        });
    }

    // Tambahkan pengurutan berdasarkan kolom dan arah
    $query->orderBy($sort, $order);

    // Paginate hasil query dengan 10 item per halaman
    $registrasis = $query->paginate(10);

    // Secara manual tambahkan query string ke pagination
    $registrasis->appends([
        'search' => $search,
        'sort' => $sort,
        'order' => $order,
    ]);

    // Kirim data ke view
    return view('admin.registrasis.index', compact('registrasis', 'search', 'sort', 'order'));
}
public function edit($id)
{
    // Cari registrasi berdasarkan ID
    $registrasi = Registrasi::with(['peserta', 'divisi'])->findOrFail($id);

    // Kirim data ke view edit
    return view('admin.registrasis.edit', compact('registrasi'));
}
public function update(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'StatusRegistrasi' => 'required|in:pending,accepted,rejected',
        'TanggalMulai' => 'required|date', // Pastikan tanggal mulai valid
        'TanggalBerakhir' => 'required|date|after_or_equal:TanggalMulai', // Pastikan tanggal berakhir valid
    ]);

    // Cari registrasi berdasarkan ID
    $registrasi = Registrasi::findOrFail($id);

    // Debugging: Pastikan data yang dikirimkan diterima
    Log::info('Update request data:', $validatedData);

    // Perbarui semua kolom yang dikirimkan dalam request
    $registrasi->update($validatedData);

    // Jika status diubah menjadi "accepted" dan belum ada data magang
    if ($registrasi->wasChanged('StatusRegistrasi') && $registrasi->StatusRegistrasi === 'accepted') {
        // Pastikan tidak ada data magang dengan kombinasi ID_Peserta dan ID_Divisi yang sama
        if (!Magang::where('ID_Peserta', $registrasi->ID_Peserta)
                   ->where('ID_Divisi', $registrasi->ID_Divisi)
                   ->exists()) {
            // Ambil tanggal mulai dan berakhir dari tabel registrasi
            $tanggalMulai = $registrasi->TanggalMulai;
            $tanggalBerakhir = $registrasi->TanggalBerakhir;

            // Buat data magang baru
            Magang::create([
                'ID_Peserta' => $registrasi->ID_Peserta,
                'ID_Divisi' => $registrasi->ID_Divisi,
                'TanggalMulaiMagang' => $tanggalMulai,
                'TanggalBerakhirMagang' => $tanggalBerakhir,
                'StatusMagang' => 'on going', // Status awal harus "on going"
            ]);

            // Perbarui KuotaTerisi untuk divisi baru
            $divisiId = $registrasi->ID_Divisi;
            $kuotaTerisi = Magang::where('ID_Divisi', $divisiId)
                                 ->where('StatusMagang', 'on going')
                                 ->count();
            Divisi::where('ID_Divisi', $divisiId)->update(['KuotaTerisi' => $kuotaTerisi]);
        }
    }

    // Redirect ke halaman daftar registrasi dengan pesan sukses
    return redirect()->route('admin.registrasis.index')
                     ->with('success', 'Data registrasi berhasil diperbarui.');
}
    public function store(Request $request)
    {
        // dd('Store method executed'); // Debug apakah method terpanggil
    
        // Validasi input
        try {
            $request->validate([
                'NISN_NIM' => 'required|string|max:20|unique:pesertas,NISN_NIM',
                'Nama' => 'required|string|max:255',
                'Tingkat' => 'required|in:siswa,mahasiswa',
                'Sekolah_Universitas' => 'required|string|max:255',
                'Jenis_Kelamin' => 'required|in:laki-laki,perempuan',
                'Alamat' => 'required|string',
                'Email' => 'required|email|max:255|unique:pesertas,Email',
                'Surat_Resmi_Sekolah' => 'nullable|file|mimes:pdf|max:2048',
                'ID_Divisi' => 'required|exists:divisis,ID_Divisi',
                'TanggalMulai' => 'required|date',
                'TanggalBerakhir' => 'required|date|after_or_equal:TanggalMulai',
            ]);
    
            // dd('Validasi sukses'); // Debug apakah validasi lolos
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            // dd($e->errors()); // Debug jika validasi gagal
        }
    
        // Cek apakah peserta sudah ada
        $peserta = Peserta::where('NISN_NIM', $request->NISN_NIM)->first();
        // dd($peserta); // Debug apakah peserta ditemukan
    
        if (!$peserta) {
            $peserta = Peserta::create([
                'NISN_NIM' => $request->NISN_NIM,
                'Nama' => $request->Nama,
                'Tingkat' => $request->Tingkat,
                'Sekolah_Universitas' => $request->Sekolah_Universitas,
                'Jenis_Kelamin' => $request->Jenis_Kelamin,
                'Alamat' => $request->Alamat,
                'Jurusan' => $request->Jurusan,
                'Kelas_Semester' => $request->Kelas_Semester,
                'NoHP' => $request->NoHP,
                'Email' => $request->Email,
                'Surat_Resmi_Sekolah' => $request->file('Surat_Resmi_Sekolah') ? $request->file('Surat_Resmi_Sekolah')->store('uploads', 'public') : null,
            ]);
    
            // dd($peserta); // Debug apakah peserta berhasil dibuat
        }
    
        // Tambahkan data ke tabel `registrasis`
        $registrasi = Registrasi::create([
            'ID_Peserta' => $peserta->ID_Peserta,
            'ID_Divisi' => $request->ID_Divisi,
            'SuratPengajuan' => $request->file('Surat_Resmi_Sekolah') ? $request->file('Surat_Resmi_Sekolah')->store('uploads', 'public') : null,
            'TanggalMulai' => $request->TanggalMulai,
            'TanggalBerakhir' => $request->TanggalBerakhir,
            'StatusRegistrasi' => 'pending',
        ]);
    
        // dd($registrasi); // Debug apakah registrasi berhasil dibuat
    
        return back()->with('success', 'Lamaran berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
    public function destroy($id)
{
    // Cari registrasi berdasarkan ID
    $registrasi = Registrasi::findOrFail($id);

    // Hapus file surat pengajuan jika ada
    if ($registrasi->SuratPengajuan) {
        Storage::delete('public/' . $registrasi->SuratPengajuan);
    }

    // Hapus data registrasi
    $registrasi->delete();

    // Redirect ke halaman daftar registrasi dengan pesan sukses
    return redirect()->route('admin.registrasis.index')
                     ->with('success', 'Data registrasi berhasil dihapus.');
}

}
