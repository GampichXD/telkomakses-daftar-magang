<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Str;

class DivisiController extends Controller
{
    /**
     * Menampilkan halaman daftar divisi untuk web utama.
     */
    public function index(): View
    {
        // Ambil semua data divisi dari database
        $divisis = Divisi::all();

        // Kirim data ke view utama
        return view('index', compact('divisis'));
    }

    /**
     * Menampilkan halaman daftar divisi untuk admin dashboard.
     */
    public function adminIndex(Request $request)
    {
        // Ambil nilai dari input pencarian dan pengurutan
        $search = $request->input('search'); // Nilai untuk pencarian
        $sort = $request->input('sort', 'ID_Divisi'); // Default: urutkan berdasarkan ID_Divisi
        $order = $request->input('order', 'asc'); // Default: ascending
    
        // Query awal untuk mengambil data divisi
        $query = Divisi::query();
    
        // Tambahkan filter pencarian jika ada input search
        if ($search) {
            $query->where('Divisi', 'like', "%{$search}%")
                  ->orWhere('Deskripsi', 'like', "%{$search}%");
        }
    
        // Tambahkan pengurutan berdasarkan kolom dan arah
        $query->orderBy($sort, $order);
    
        // Paginate hasil query dengan 10 item per halaman
        $divisis = $query->paginate(10);
    
        // Secara manual tambahkan query string ke pagination
        $divisis->appends([
            'search' => $search,
            'sort' => $sort,
            'order' => $order,
        ]);
    
        // Kirim data ke view
        return view('admin.divisis.index', compact('divisis', 'search', 'sort', 'order'));
    }

    /**
     * Menampilkan formulir tambah divisi.
     */
    public function create()
    {
        return view('admin.divisis.create');
    }

    /**
     * Menyimpan data divisi baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'Divisi' => 'required|string|max:255',
            'Deskripsi' => 'nullable|string',
            'Images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
            'TotalKuota' => 'required|integer|min:1',
        ]);
    
        // Simpan gambar dengan nama berdasarkan Nama Divisi
        if ($request->hasFile('Images')) {
            $file = $request->file('Images');
            $fileName = Str::slug($request->Divisi) . '.' . $file->getClientOriginalExtension(); // Contoh: teknisi-listrik.jpg
            $path = $file->storeAs('images', $fileName, 'public'); // Simpan di storage/app/public/images
    
            // Simpan hanya nama file ke database
            $validated['Images'] = $fileName;
        }
    
        // Simpan data ke database
        Divisi::create($validated);
    
        // Redirect ke halaman daftar divisi dengan pesan sukses
        return redirect()->route('admin.divisis.index')->with('success', 'Divisi berhasil ditambahkan.');
    }

    /**
     * Menampilkan formulir edit divisi.
     */
    public function edit(Divisi $divisi)
    {
        return view('admin.divisis.edit', compact('divisi'));
    }

    /**
     * Memperbarui data divisi.
     */
    public function update(Request $request, Divisi $divisi)
    {
        // Validasi input
        $validated = $request->validate([
            'Divisi' => 'required|string|max:255',
            'Deskripsi' => 'nullable|string',
            'Images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
            'TotalKuota' => 'required|integer|min:1',
        ]);
    
        // Hapus gambar lama jika ada gambar baru yang diupload
        if ($request->hasFile('Images')) {
            // Hapus gambar lama dari storage
            if ($divisi->Images) {
                Storage::disk('public')->delete('images/' . $divisi->Images);
            }
    
            // Simpan gambar baru
            $file = $request->file('Images');
            $fileName = Str::slug($request->Divisi) . '.' . $file->getClientOriginalExtension(); // Contoh: teknisi-listrik.jpg
            $path = $file->storeAs('images', $fileName, 'public'); // Simpan di storage/app/public/images
    
            // Simpan nama file baru ke database
            $validated['Images'] = $fileName;
        } else {
            // Jika tidak ada gambar baru, tetap gunakan gambar lama
            $validated['Images'] = $divisi->Images;
        }
    
        // Update data divisi
        $divisi->update($validated);
    
        // Redirect ke halaman daftar divisi dengan pesan sukses
        return redirect()->route('admin.divisis.index')->with('success', 'Divisi berhasil diperbarui.');
    }

    /**
     * Menghapus data divisi.
     */
    public function destroy(Divisi $divisi)
    {
        try {
            // Hapus gambar jika ada
            if ($divisi->Images) {
                Storage::disk('public')->delete($divisi->Images);
            }
    
            // Hapus data divisi
            $divisi->delete();
    
            // Cek apakah request berasal dari AJAX
            if (request()->expectsJson()) {
                return response()->json(['message' => 'Divisi berhasil dihapus.'], 200);
            }
    
            // Redirect jika bukan AJAX
            return redirect()->route('admin.divisis.index')->with('success', 'Divisi berhasil dihapus.');
        } catch (\Exception $e) {
            // Tangani error jika terjadi kesalahan
            if (request()->expectsJson()) {
                return response()->json(['message' => 'Gagal menghapus divisi.'], 500);
            }
    
            return redirect()->route('admin.divisis.index')->with('error', 'Gagal menghapus divisi.');
        }
    }
}