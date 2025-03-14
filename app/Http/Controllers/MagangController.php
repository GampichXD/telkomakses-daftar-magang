<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagangController extends Controller
{
    public function adminIndex(Request $request)
    {
        // Ambil nilai dari input pencarian dan pengurutan
        $search = $request->input('search');
        $sort = $request->input('sort', 'ID_Magang'); // Default: urutkan berdasarkan ID_Magang
        $order = $request->input('order', 'asc'); // Default: ascending
    
        // Query awal untuk mengambil data magang
        $query = \App\Models\Magang::query();
    
        // Tambahkan filter pencarian jika ada input search
        if ($search) {
            $query->whereHas('peserta', function ($q) use ($search) {
                $q->where('Nama', 'like', "%{$search}%")
                  ->orWhere('NISN_NIM', 'like', "%{$search}%");
            })->orWhereHas('divisi', function ($q) use ($search) {
                $q->where('Divisi', 'like', "%{$search}%");
            });
        }
    
        // Tambahkan pengurutan berdasarkan kolom dan arah
        $query->orderBy($sort, $order);
    
        // Paginate hasil query dengan 10 item per halaman
        $magangs = $query->paginate(10);
    
        // Secara manual tambahkan query string ke pagination
        $magangs->appends([
            'search' => $search,
            'sort' => $sort,
            'order' => $order,
        ]);
    
        // Kirim data ke view
        return view('admin.magangs.index', compact('magangs', 'search', 'sort', 'order'));
    }
    public function create()
{
    // Ambil semua peserta dan divisi untuk dropdown
    $pesertas = \App\Models\Peserta::all();
    $divisis = \App\Models\Divisi::all();

    // Kirim data ke view create
    return view('admin.magangs.create', compact('pesertas', 'divisis'));
}
public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'ID_Peserta' => 'required|exists:pesertas,ID_Peserta',
        'ID_Divisi' => 'required|exists:divisis,ID_Divisi',
        'TanggalMulaiMagang' => 'required|date',
        'TanggalBerakhirMagang' => 'nullable|date|after_or_equal:TanggalMulaiMagang',
        'StatusMagang' => 'nullable|in:on going,completed,terminated',
    ]);

    // Jika TanggalBerakhirMagang tidak diisi, atur sebagai 3 bulan setelah TanggalMulaiMagang
    if (empty($validatedData['TanggalBerakhirMagang'])) {
        $validatedData['TanggalBerakhirMagang'] = now()->createFromFormat('Y-m-d', $validatedData['TanggalMulaiMagang'])
                                                       ->addMonths(3)
                                                       ->toDateString();
    }

    // Simpan data ke database
    \App\Models\Magang::create($validatedData);

    // Redirect ke halaman daftar magang dengan pesan sukses
    return redirect()->route('admin.magangs.index')
                     ->with('success', 'Data magang berhasil ditambahkan.');
}
    public function edit($id)
{
    // Cari magang berdasarkan ID
    $magang = \App\Models\Magang::findOrFail($id);

    // Ambil semua peserta dan divisi untuk dropdown
    $pesertas = \App\Models\Peserta::all();
    $divisis = \App\Models\Divisi::all();

    // Kirim data ke view edit
    return view('admin.magangs.edit', compact('magang', 'pesertas', 'divisis'));
}
public function update(Request $request, $ID_Magang)
{
    // Validasi input dengan opsi nullable untuk kolom yang tidak wajib diisi ulang
    $validatedData = $request->validate([
        'ID_Peserta' => 'nullable|exists:pesertas,ID_Peserta',
        'ID_Divisi' => 'nullable|exists:divisis,ID_Divisi',
        'TanggalMulaiMagang' => 'nullable|date',
        'TanggalBerakhirMagang' => 'nullable|date|after_or_equal:TanggalMulaiMagang',
        'StatusMagang' => 'nullable|in:on going,completed,terminated',
    ]);

    // Cari magang berdasarkan ID_Magang
    $magang = \App\Models\Magang::findOrFail($ID_Magang);

    // Simpan divisi lama sebelum diperbarui
    $oldDivisiId = $magang->ID_Divisi;

    // Hanya perbarui kolom yang dikirimkan dalam request
    $updatedData = array_filter($validatedData);
    $magang->update($updatedData);

    // Jika divisi berubah, perbarui kuota di tabel divisi
    if (isset($updatedData['ID_Divisi']) && $updatedData['ID_Divisi'] !== $oldDivisiId) {
        $newDivisiId = $updatedData['ID_Divisi'];

        // Ambil data divisi lama dan baru
        $oldDivisi = \App\Models\Divisi::findOrFail($oldDivisiId);
        $newDivisi = \App\Models\Divisi::findOrFail($newDivisiId);

        // Kurangi KuotaTerisi di divisi lama
        $oldDivisi->decrement('KuotaTerisi');

        // Tambah KuotaTerisi di divisi baru
        $newDivisi->increment('KuotaTerisi');
    }

    // Redirect ke halaman daftar magang dengan pesan sukses
    return redirect()->route('admin.magangs.index')
                     ->with('success', 'Data magang berhasil diperbarui.');
}
public function destroy($id)
{
    // Cari magang berdasarkan ID
    $magang = \App\Models\Magang::findOrFail($id);

    // Hapus data magang
    $magang->delete();

    // Redirect ke halaman daftar magang dengan pesan sukses
    return redirect()->route('admin.magangs.index')
                     ->with('success', 'Data magang berhasil dihapus.');
}
}
