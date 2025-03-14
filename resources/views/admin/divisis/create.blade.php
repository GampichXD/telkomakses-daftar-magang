<!-- resources/views/admin/divisis/create.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Tambah Divisi</h1>

    <!-- Pesan Error -->
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulir -->
    <form action="{{ route('admin.divisis.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <!-- Nama Divisi -->
        <div>
            <label for="Divisi" class="block text-gray-700">Nama Divisi</label>
            <input type="text" name="Divisi" id="Divisi" class="w-full px-3 py-2 border rounded-md" value="{{ old('Divisi') }}" required>
        </div>

        <!-- Deskripsi -->
        <div>
            <label for="Deskripsi" class="block text-gray-700">Deskripsi</label>
            <textarea name="Deskripsi" id="Deskripsi" class="w-full px-3 py-2 border rounded-md">{{ old('Deskripsi') }}</textarea>
        </div>

        <!-- Gambar -->
        <div class="mb-4">
            <label for="Images" class="block text-gray-700 font-medium mb-2">Gambar</label>
            <input type="file" id="Images" name="Images" accept="image/*" onchange="previewImage(event)" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <!-- Preview Gambar -->
            <div id="imagePreviewContainer" class="mt-4 hidden">
                <img id="imagePreview" class="w-32 h-32 object-cover rounded-lg shadow-md" alt="Preview">
            </div>
        </div>

        <script>
            // Fungsi untuk menampilkan preview gambar
            function previewImage(event) {
                const reader = new FileReader();
                reader.onload = function() {
                    const output = document.getElementById('imagePreview');
                    output.src = reader.result;
                    document.getElementById('imagePreviewContainer').classList.remove('hidden'); // Tampilkan preview
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>

        <!-- Total Kuota -->
        <div>
            <label for="TotalKuota" class="block text-gray-700">Total Kuota</label>
            <input type="number" name="TotalKuota" id="TotalKuota" class="w-full px-3 py-2 border rounded-md" value="{{ old('TotalKuota') }}" required>
        </div>

        <!-- Tombol Simpan -->
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded flex items-center gap-2 transition duration-300 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
            </svg>
            Simpan
        </button>
    </form>
</div>
@endsection

