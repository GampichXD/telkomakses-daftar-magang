@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Registrasi</h1>

    <!-- Formulir Edit Registrasi -->
    <form action="{{ route('admin.registrasis.update', $registrasi->ID_Registrasi) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Tanggal Mulai -->
        <div>
            <label for="TanggalMulai" class="block text-gray-700 font-medium mb-2">Tanggal Mulai</label>
            <input type="date" name="TanggalMulai" id="TanggalMulai" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('TanggalMulai', $registrasi->TanggalMulai) }}" required>
        </div>

        <!-- Tanggal Berakhir -->
        <div>
            <label for="TanggalBerakhir" class="block text-gray-700 font-medium mb-2">Tanggal Berakhir</label>
            <input type="date" name="TanggalBerakhir" id="TanggalBerakhir" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('TanggalBerakhir', $registrasi->TanggalBerakhir) }}" required>
        </div>

        <!-- Status Registrasi -->
        <div>
            <label for="StatusRegistrasi" class="block text-gray-700 font-medium mb-2">Status Registrasi</label>
            <select name="StatusRegistrasi" id="StatusRegistrasi" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="pending" {{ old('StatusRegistrasi', $registrasi->StatusRegistrasi) === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="accepted" {{ old('StatusRegistrasi', $registrasi->StatusRegistrasi) === 'accepted' ? 'selected' : '' }}>Accepted</option>
                <option value="rejected" {{ old('StatusRegistrasi', $registrasi->StatusRegistrasi) === 'rejected' ? 'selected' : '' }}>Rejected</option>
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