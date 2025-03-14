@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Divisi</h1>
    <form action="{{ route('admin.divisis.update', $divisi->ID_Divisi) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Penting! Untuk memperbarui data -->
    
        <!-- Nama Divisi -->
        <div>
            <label for="Divisi" class="block text-gray-700">Nama Divisi</label>
            <input type="text" name="Divisi" id="Divisi" class="w-full px-3 py-2 border rounded-md" value="{{ old('Divisi', $divisi->Divisi) }}" required>
        </div>
    
        <!-- Deskripsi -->
        <div>
            <label for="Deskripsi" class="block text-gray-700">Deskripsi</label>
            <textarea name="Deskripsi" id="Deskripsi" class="w-full px-3 py-2 border rounded-md">{{ old('Deskripsi', $divisi->Deskripsi) }}</textarea>
        </div>
    
        <!-- Gambar -->
        <div>
            <label for="Images" class="block text-gray-700">Gambar</label>
            <input type="file" name="Images" id="Images" class="w-full px-3 py-2 border rounded-md" accept="image/*">
            @if ($divisi->Images)
            <img
            src="{{ asset('storage/images/' . $divisi->Images) }}"
            alt="{{ $divisi->Divisi }}"
            class="w-500px h-250px object-cover rounded"
        />
            @endif
        </div>
    
        <!-- Total Kuota -->
        <div>
            <label for="TotalKuota" class="block text-gray-700">Total Kuota</label>
            <input type="number" name="TotalKuota" id="TotalKuota" class="w-full px-3 py-2 border rounded-md" value="{{ old('TotalKuota', $divisi->TotalKuota) }}" required>
        </div>
    
        <!-- Tombol Update -->
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mt-4 flex items-center gap-2 transition duration-300 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
            </svg>
            Update
        </button>
</div>
@endsection