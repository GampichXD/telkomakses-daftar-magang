<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - HCM & Culture</title>
    <link rel="shortcut icon" href="{{ asset('images/image.png') }}" type="image/x-icon">
    @vite('resources/css/app.css') <!-- Jika menggunakan TailwindCSS -->
    <style>
        /* Global styles */
        body {
            margin: 0;
            overflow-x: hidden; /* Hilangkan scrolling horizontal */
        }
    
    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #1e293b;
        transition: all 0.3s ease;
        overflow-y: auto; /* Scroll vertikal jika konten terlalu panjang */
        overflow-x: hidden; /* Hilangkan scroll horizontal */
    }

    .sidebar.collapsed {
        width: 60px; /* Lebar saat collapsed */
    }

    /* Sembunyikan teks saat sidebar tertutup */
    .sidebar.collapsed h2,
    .sidebar.collapsed ul li a span {
        display: none; /* Sembunyikan teks */
    }

    /* Styling tombol toggle */
    .toggle-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #334155;
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        border-radius: 5px;
        z-index: 10;
        font-size: 16px;
    }

    /* Main Content */
    .main-content {
        margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
        transition: all 0.3s ease;
        padding: 20px;
        overflow-x: hidden; /* Hilangkan scroll horizontal */
    }

    .main-content.collapsed {
        margin-left: 60px; /* Sesuaikan dengan lebar sidebar saat collapsed */
    }

    /* Styling menu sidebar */
    .sidebar ul li a {
        display: flex;
        align-items: center;
        gap: 10px; /* Jarak antara ikon dan teks */
        color: white;
        text-decoration: none;
    }

        /* Styling untuk menu aktif */
        .sidebar ul li a.active {
        background-color: #f3f4f6; /* Warna abu-abu muda */
        color: #1e293b; /* Warna teks hitam */
        border-radius: 5px;
    }
    .sidebar ul li a:hover {
        background-color: #334155;
        border-radius: 5px;
        color: white;
    }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
<!-- resources/views/layouts/admin.blade.php -->
<aside id="sidebar" class="sidebar">
    <button id="toggleSidebar" class="toggle-btn">❮</button>
    <div class="p-4 text-white">
        <!-- Judul Sidebar -->
        <h2 class="text-lg font-bold mb-4">Admin Panel</h2>

        <!-- Menu Sidebar -->
        <ul class="space-y-2">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home"></i> <!-- Ikon (opsional) -->
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.divisis.index') }}" class="block px-4 py-2 rounded {{ request()->routeIs('admin.divisis.*') ? 'active' : '' }}">
                    <i class="fas fa-users"></i> <!-- Ikon (opsional) -->
                    <span>Divisi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pesertas.index') }}" class="block px-4 py-2 rounded {{ request()->routeIs('admin.pesertas.*') ? 'active' : '' }}">
                    <i class="fas fa-user"></i> <!-- Ikon (opsional) -->
                    <span>Peserta</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.registrasis.index') }}" class="block px-4 py-2 rounded {{ request()->routeIs('admin.registrasis.*') ? 'active' : '' }}">
                    <i class="fas fa-file-alt"></i> <!-- Ikon (opsional) -->
                    <span>Registrasi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.magangs.index') }}" class="block px-4 py-2 rounded {{ request()->routeIs('admin.magangs.*') ? 'active' : '' }}">
                    <i class="fas fa-briefcase"></i> <!-- Ikon (opsional) -->
                    <span>Magang</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

    <!-- Main Content -->
    <main id="mainContent" class="main-content">
        @yield('content')
    </main>

    <script>
        // Toggle sidebar
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const toggleBtn = document.getElementById('toggleSidebar');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');
            toggleBtn.textContent = sidebar.classList.contains('collapsed') ? '❯' : '❮';
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>