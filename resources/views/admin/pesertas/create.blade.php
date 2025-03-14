@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Tambah Peserta dan Registrasi</h1>

    <!-- Formulir Tambah Peserta -->
    <form action="{{ route('admin.pesertas.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <!-- NISN/NIM -->
        <div>
            <label for="NISN_NIM" class="block text-gray-700 font-medium mb-2">NISN/NIM*</label>
            <input type="text" name="NISN_NIM" id="NISN_NIM" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Nama -->
        <div>
            <label for="Nama" class="block text-gray-700 font-medium mb-2">Nama*</label>
            <input type="text" name="Nama" id="Nama" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Tingkat -->
        <div>
            <label for="Tingkat" class="block text-gray-700 font-medium mb-2">Tingkat*</label>
            <select name="Tingkat" id="Tingkat" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="siswa">Siswa</option>
                <option value="mahasiswa">Mahasiswa</option>
            </select>
        </div>

        <!-- Sekolah/Universitas -->
        <div>
            <label for="Sekolah_Universitas" class="block text-gray-700 font-medium mb-2">Sekolah/Universitas*</label>
            <input type="text" name="Sekolah_Universitas" id="Sekolah_Universitas" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Jenis Kelamin -->
        <div>
            <label for="Jenis_Kelamin" class="block text-gray-700 font-medium mb-2">Jenis Kelamin*</label>
            <select name="Jenis_Kelamin" id="Jenis_Kelamin" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>

        <!-- Alamat -->
        <div>
            <label for="Alamat" class="block text-gray-700 font-medium mb-2">Alamat*</label>
            <textarea name="Alamat" id="Alamat" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
        </div>

        <!-- Jurusan -->
        <div>
            <label for="Jurusan" class="block text-gray-700 font-medium mb-2">Jurusan</label>
            <input type="text" name="Jurusan" id="Jurusan" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Kelas/Semester -->
        <div>
            <label for="Kelas_Semester" class="block text-gray-700 font-medium mb-2">Kelas/Semester</label>
            <input type="text" name="Kelas_Semester" id="Kelas_Semester" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- No HP -->
        <div>
            <label for="NoHP" class="block text-gray-700 font-medium mb-2">No HP</label>
            <input type="text" name="NoHP" id="NoHP" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Email -->
        <div>
            <label for="Email" class="block text-gray-700 font-medium mb-2">Email</label>
            <input type="email" name="Email" id="Email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Surat Resmi Sekolah -->
        <div>
            <label for="Surat_Resmi_Sekolah" class="block text-gray-700 font-medium mb-2">Surat Resmi Sekolah (PDF)</label>
            <input type="file" name="Surat_Resmi_Sekolah" id="Surat_Resmi_Sekolah" accept=".pdf" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Divisi (Untuk Registrasi) -->
        <div>
            <label for="ID_Divisi" class="block text-gray-700 font-medium mb-2">Divisi*</label>
            <select name="ID_Divisi" id="ID_Divisi" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                @foreach ($divisis as $divisi)
                    <option value="{{ $divisi->ID_Divisi }}">{{ $divisi->Divisi }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tanggal Mulai (Untuk Registrasi) -->
        <div>
            <label for="TanggalMulai" class="block text-gray-700 font-medium mb-2">Tanggal Mulai*</label>
            <input type="date" name="TanggalMulai" id="TanggalMulai" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Tanggal Berakhir (Untuk Registrasi) -->
        <div>
            <label for="TanggalBerakhir" class="block text-gray-700 font-medium mb-2">Tanggal Berakhir*</label>
            <input type="date" name="TanggalBerakhir" id="TanggalBerakhir" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Tombol Simpan -->
        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded flex items-center gap-2 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
            </svg>
            Simpan
        </button>
    </form>
</div>
@endsection