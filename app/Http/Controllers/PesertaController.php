<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PesertaController extends Controller
{
    public function adminIndex(Request $request)
    {
        // Ambil nilai dari input pencarian dan pengurutan
        $search = $request->input('search');
        $sort = $request->input('sort', 'ID_Peserta'); // Default: urutkan berdasarkan ID_Peserta
        $order = $request->input('order', 'asc'); // Default: ascending
    
        // Query awal untuk mengambil data peserta
        $query = Peserta::query();
    
        // Tambahkan filter pencarian jika ada input search
        if ($search) {
            $query->where('Nama', 'like', "%{$search}%")
                  ->orWhere('NISN_NIM', 'like', "%{$search}%")
                  ->orWhere('Sekolah_Universitas', 'like', "%{$search}%");
        }
    
        // Tambahkan pengurutan berdasarkan kolom dan arah
        $query->orderBy($sort, $order);
    
        // Paginate hasil query dengan 10 item per halaman
        $pesertas = $query->paginate(10);
    
        // Secara manual tambahkan query string ke pagination
        $pesertas->appends([
            'search' => $search,
            'sort' => $sort,
            'order' => $order,
        ]);
    
        // Kirim data ke view
        return view('admin.pesertas.index', compact('pesertas', 'search', 'sort', 'order'));
    }
    public function create()
    {
        // Ambil semua divisi untuk dropdown
        $divisis = \App\Models\Divisi::all();
        return view('admin.pesertas.create', compact('divisis'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'NISN_NIM' => 'required|string|max:20|unique:pesertas,NISN_NIM',
            'Nama' => 'required|string|max:255',
            'Tingkat' => 'required|in:siswa,mahasiswa',
            'Sekolah_Universitas' => 'required|string|max:255',
            'Jenis_Kelamin' => 'required|in:laki-laki,perempuan',
            'Alamat' => 'required|string',
            'Jurusan' => 'nullable|string|max:255',
            'Kelas_Semester' => 'nullable|string|max:50',
            'NoHP' => 'nullable|string|max:15',
            'Email' => 'nullable|email|max:255|unique:pesertas,Email',
            'Surat_Resmi_Sekolah' => 'nullable|file|mimes:pdf|max:2048',
            'ID_Divisi' => 'required|exists:divisis,ID_Divisi',
            'TanggalMulai' => 'required|date',
            'TanggalBerakhir' => 'required|date|after_or_equal:TanggalMulai',
        ]);

        // Simpan file Surat Resmi Sekolah jika ada
        if ($request->hasFile('Surat_Resmi_Sekolah')) {
            $file = $request->file('Surat_Resmi_Sekolah');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $fileName);
            $validatedData['Surat_Resmi_Sekolah'] = $fileName;
        }

        // Simpan data ke tabel pesertas
        $peserta = Peserta::create($validatedData);

        // Buat data registrasi
        Registrasi::create([
            'ID_Peserta' => $peserta->ID_Peserta,
            'ID_Divisi' => $request->ID_Divisi,
            'TanggalMulai' => $request->TanggalMulai,
            'TanggalBerakhir' => $request->TanggalBerakhir,
            'StatusRegistrasi' => 'pending',
        ]);

        // Redirect ke halaman daftar peserta dengan pesan sukses
        return redirect()->route('admin.pesertas.index')->with('success', 'Peserta berhasil ditambahkan.');
    }
public function edit($id)
{
    // Cari peserta berdasarkan ID
    $peserta = Peserta::findOrFail($id);

    // Tampilkan view edit dengan data peserta
    return view('admin.pesertas.edit', compact('peserta'));
}
public function update(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'NISN_NIM' => 'required|unique:pesertas,NISN_NIM,' . $id . ',ID_Peserta',
        'Nama' => 'required|string|max:255',
        'Tingkat' => 'required|in:siswa,mahasiswa',
        'Sekolah_Universitas' => 'required|string|max:255',
        'Jenis_Kelamin' => 'required|in:laki-laki,perempuan',
        'Alamat' => 'required|string',
        'Jurusan' => 'nullable|string|max:255',
        'Kelas_Semester' => 'nullable|string|max:50',
        'NoHP' => 'nullable|string|max:15',
        'Email' => 'nullable|email|unique:pesertas,Email,' . $id . ',ID_Peserta',
        'Surat_Resmi_Sekolah' => 'nullable|file|mimes:pdf|max:2048', // Maksimal 2MB
    ]);

    // Cari peserta berdasarkan ID
    $peserta = Peserta::findOrFail($id);

    // Simpan file surat resmi sekolah jika ada file baru
    if ($request->hasFile('Surat_Resmi_Sekolah')) {
        $suratPath = $request->file('Surat_Resmi_Sekolah')->store('public/surat');
        $validatedData['Surat_Resmi_Sekolah'] = str_replace('public/', '', $suratPath);
    }

    // Perbarui data peserta
    $peserta->update($validatedData);

    // Redirect ke halaman daftar peserta dengan pesan sukses
    return redirect()->route('admin.pesertas.index')
                     ->with('success', 'Data peserta berhasil diperbarui.');
}
public function destroy($id)
{
    // Cari peserta berdasarkan ID
    $peserta = Peserta::findOrFail($id);

    // Hapus file surat resmi sekolah jika ada
    if ($peserta->Surat_Resmi_Sekolah) {
        Storage::delete('public/' . $peserta->Surat_Resmi_Sekolah);
    }

    // Hapus data peserta
    $peserta->delete();

    // Redirect ke halaman daftar peserta dengan pesan sukses
    return redirect()->route('admin.pesertas.index')
                     ->with('success', 'Data peserta berhasil dihapus.');
}
}