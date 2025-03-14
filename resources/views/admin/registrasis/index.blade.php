@extends('layouts.admin')

@section('content')
<style>
    .icon-white {
        filter: brightness(0) invert(1); /* Ubah warna menjadi putih */
    }
    /* Styling dasar untuk kotak ikon */
    .icon-box {
        display: inline-flex; /* Membuat kotak fleksibel */
        align-items: center; /* Pusatkan ikon secara vertikal */
        justify-content: center; /* Pusatkan ikon secara horizontal */
        width: 30px; /* Lebar kotak */
        height: 30px; /* Tinggi kotak */
        border-radius: 4px; /* Sudut bulat */
        padding: 4px; /* Ruang di dalam kotak */
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); /* Efek bayangan halus */
        transition: all 0.3s ease; /* Animasi transisi */
    }

    /* Styling untuk kotak Edit */
    .icon-box-edit {
        background-color: #facc15; /* Latar belakang kuning gelap */
        border: 1px solid #eab308; /* Border kuning lebih gelap */
    }

    .icon-box-edit:hover {
        background-color: #eab308; /* Ubah warna latar saat hover */
        border-color: #b48e08; /* Ubah warna border saat hover */
    }

    /* Styling untuk kotak Delete */
    .icon-box-delete {
        background-color: #f87171; /* Latar belakang merah gelap */
        border: 1px solid #ef4444; /* Border merah lebih gelap */
    }

    .icon-box-delete:hover {
        background-color: #ef4444; /* Ubah warna latar saat hover */
        border-color: #b91c1c; /* Ubah warna border saat hover */
    }
</style>
<div class="container">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Daftar Registrasi</h1>

        <!-- Pesan Sukses/Error -->
        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <!-- Form Pencarian -->
    <form action="{{ route('admin.registrasis.index') }}" method="GET" class="mb-4 flex items-center gap-2">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari registrasi..." class="px-3 py-2 border rounded-md w-full max-w-xs">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded flex items-center gap-2 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            Cari
        </button>
    </form>

    <!-- Form untuk Pengurutan -->
<form action="{{ route('admin.registrasis.index') }}" method="GET" class="mb-4 flex items-center gap-2">
    <span>Urutkan berdasarkan:</span>
    <select name="sort" id="sort" class="px-3 py-2 border rounded-md">
        <option value="ID_Registrasi" {{ request('sort') === 'ID_Registrasi' ? 'selected' : '' }}>ID</option>
        <option value="ID_Peserta" {{ request('sort') === 'ID_Peserta' ? 'selected' : '' }}>ID Peserta</option>
        <option value="ID_Divisi" {{ request('sort') === 'ID_Divisi' ? 'selected' : '' }}>ID Divisi</option>
        <option value="StatusRegistrasi" {{ request('sort') === 'StatusRegistrasi' ? 'selected' : '' }}>Status</option>
        <option value="TanggalMulai" {{ request('sort') === 'TanggalMulai' ? 'selected' : '' }}>Tanggal Mulai</option>
        <option value="TanggalBerakhir" {{ request('sort') === 'TanggalBerakhir' ? 'selected' : '' }}>Tanggal Berakhir</option>
    </select>

    <!-- Pilihan Ascending/Descending -->
    <select name="order" id="order" class="px-3 py-2 border rounded-md">
        <option value="asc" {{ request('order') === 'asc' ? 'selected' : '' }}>Ascending</option>
        <option value="desc" {{ request('order') === 'desc' ? 'selected' : '' }}>Descending</option>
    </select>

    <!-- Tombol Terapkan -->
    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded flex items-center gap-2 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
        Terapkan
    </button>
</form>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $registrasis->links('pagination::tailwind') }}
    </div>

    <!-- Tabel Registrasi -->
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="ltr:text-left rtl:text-right">
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">ID</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama Peserta</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Divisi</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Tanggal Mulai</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Tanggal Berakhir</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($registrasis as $registrasi)
                <tr class="odd:bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $registrasi->ID_Registrasi }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $registrasi->peserta->Nama }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $registrasi->divisi->Divisi }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $registrasi->TanggalMulai }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $registrasi->TanggalBerakhir }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ ucfirst($registrasi->StatusRegistrasi) }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                        <!-- Tombol Edit -->
                        <a href="{{ route('admin.registrasis.edit', $registrasi->ID_Registrasi) }}" class="inline-block transition">
                            <div class="icon-box icon-box-edit">
                                <img src="{{ asset('images/icon/edit.svg') }}" alt="Edit" class="w-5 h-5 icon-white">
                            </div>
                        </a>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('admin.registrasis.destroy', $registrasi->ID_Registrasi) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block ml-2 transition" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                <div class="icon-box icon-box-delete">
                                    <img src="{{ asset('images/icon/delete.svg') }}" alt="Delete" class="w-5 h-5 icon-white">
                                </div>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-4">Tidak ada data registrasi.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection