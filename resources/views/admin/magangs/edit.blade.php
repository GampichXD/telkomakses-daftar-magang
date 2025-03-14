@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Magang</h1>

    <form action="{{ route('admin.magangs.update', $magang->ID_Magang) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
    
        <!-- Peserta -->
        <div>
            <label for="ID_Peserta" class="block text-gray-700 font-medium mb-2">Peserta</label>
            <select name="ID_Peserta" id="ID_Peserta" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Pilih Peserta (Opsional)</option>
                @foreach ($pesertas as $peserta)
                    <option value="{{ $peserta->ID_Peserta }}" {{ old('ID_Peserta', $magang->ID_Peserta) == $peserta->ID_Peserta ? 'selected' : '' }}>
                        {{ $peserta->Nama }} ({{ $peserta->NISN_NIM }})
                    </option>
                @endforeach
            </select>
        </div>
    
        <!-- Divisi -->
        <div>
            <label for="ID_Divisi" class="block text-gray-700 font-medium mb-2">Divisi</label>
            <select name="ID_Divisi" id="ID_Divisi" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Pilih Divisi (Opsional)</option>
                @foreach ($divisis as $divisi)
                    <option value="{{ $divisi->ID_Divisi }}" {{ old('ID_Divisi', $magang->ID_Divisi) == $divisi->ID_Divisi ? 'selected' : '' }}>
                        {{ $divisi->Divisi }}
                    </option>
                @endforeach
            </select>
        </div>
    
        <!-- Tanggal Mulai Magang -->
        <div>
            <label for="TanggalMulaiMagang" class="block text-gray-700 font-medium mb-2">Tanggal Mulai Magang</label>
            <input type="date" name="TanggalMulaiMagang" id="TanggalMulaiMagang" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('TanggalMulaiMagang', $magang->TanggalMulaiMagang) }}">
        </div>
    
        <!-- Tanggal Berakhir Magang -->
        <div>
            <label for="TanggalBerakhirMagang" class="block text-gray-700 font-medium mb-2">Tanggal Berakhir Magang</label>
            <input type="date" name="TanggalBerakhirMagang" id="TanggalBerakhirMagang" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('TanggalBerakhirMagang', $magang->TanggalBerakhirMagang) }}">
        </div>
    
        <!-- Status Magang -->
        <div>
            <label for="StatusMagang" class="block text-gray-700 font-medium mb-2">Status Magang</label>
            <select name="StatusMagang" id="StatusMagang" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Pilih Status (Opsional)</option>
                <option value="on going" {{ old('StatusMagang', $magang->StatusMagang) === 'on going' ? 'selected' : '' }}>On Going</option>
                <option value="completed" {{ old('StatusMagang', $magang->StatusMagang) === 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="terminated" {{ old('StatusMagang', $magang->StatusMagang) === 'terminated' ? 'selected' : '' }}>Terminated</option>
            </select>
        </div>
    
        <!-- Tombol Simpan -->
        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded flex items-center gap-2 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
            </svg>
            Simpan Perubahan
        </button>
    </form>
</div>
@endsection