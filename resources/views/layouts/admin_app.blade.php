<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Custom Admin Styles --}}
    <style>
        body {
            display: flex; /* Untuk layout sidebar */
            min-height: 100vh;
            background-color: #f8f9fa; /* Warna latar belakang admin */
        }
        #sidebar-wrapper {
            min-width: 250px;
            max-width: 250px;
            background-color: #343a40; /* Warna sidebar gelap */
            color: white;
            transition: margin .25s ease-out;
            padding-top: 1rem;
        }
        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
            border-bottom: 1px solid rgba(255,255,255,.1);
        }
        #sidebar-wrapper .list-group {
            width: 100%;
        }
        #sidebar-wrapper .list-group-item {
            background-color: transparent;
            color: rgba(255,255,255,.7);
            border: none;
            padding: 0.75rem 1.25rem;
        }
        #sidebar-wrapper .list-group-item:hover {
            color: white;
            background-color: rgba(255,255,255,.1);
        }
        #sidebar-wrapper .list-group-item.active {
            color: white;
            background-color: #007bff; /* Warna aktif */
        }
        #page-content-wrapper {
            flex-grow: 1; /* Konten mengisi sisa ruang */
            padding: 20px;
        }
        #navbar-top {
            background-color: #ffffff; /* Navbar atas putih */
            border-bottom: 1px solid #dee2e6;
            padding: 1rem;
        }
        .footer-admin {
            padding: 1rem;
            text-align: center;
            background-color: #e9ecef;
            border-top: 1px solid #dee2e6;
            width: 100%;
            margin-top: auto; /* Mendorong footer ke bawah */
        }
        /* Responsiveness for sidebar */
        @media (max-width: 768px) {
            #sidebar-wrapper {
                margin-left: -250px;
            }
            #sidebar-wrapper.toggled {
                margin-left: 0;
            }
        }
    </style>
    @stack('styles')
</head>
<body>

    <div id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
            <a href="{{ route('admin.dashboard') }}" class="text-white text-decoration-none">
                <i class="fas fa-cogs me-2"></i> Admin Panel
            </a>
        </div>
        <div class="list-group list-group-flush">
            <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
            <a href="{{ route('admin.pages.index') }}" class="list-group-item list-group-item-action">
                <i class="fas fa-file-alt me-2"></i> Manajemen Halaman
            </a>
            <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action">
                <i class="fas fa-users me-2"></i> Manajemen Pengguna
            </a>
            <a href="{{ route('admin.settings.index') }}" class="list-group-item list-group-item-action">
                <i class="fas fa-cog me-2"></i> Pengaturan Situs
            </a>
            <a href="{{ url('/') }}" class="list-group-item list-group-item-action">
            <i class="fas fa-globe me-2"></i> Lihat Website
        </a>

            <a href="{{ route('profile.edit') }}" class="list-group-item list-group-item-action">
                <i class="fas fa-user-circle me-2"></i> Profil Saya
            </a>
            <form method="POST" action="{{ route('logout') }}" class="d-inline w-100">
                @csrf
                <button type="submit" class="list-group-item list-group-item-action text-danger">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                </button>
            </form>
        </div>
    </div>
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar-top">
            
            <div class="ms-auto d-flex align-items-center">
                <span class="navbar-text me-3">
                    Selamat Datang, <strong>{{ Auth::user()->name }}</strong> ({{ Auth::user()->role }})
                </span>
                {{-- Anda bisa menambahkan dropdown profil di sini jika mau --}}
            </div>
        </nav>

        <div class="container-fluid mt-4">
            @yield('content')
        </div>

        <footer class="footer-admin mt-auto">
            <div class="container-fluid">
                <span>&copy; {{ date('Y') }} CV Sumber Alam Raya. All rights reserved.</span>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eP0K7z9K" crossorigin="anonymous"></script>
    <script>
        // Javascript untuk toggle sidebar (opsional, untuk responsif)
        document.getElementById("sidebarToggle").addEventListener("click", function() {
            document.getElementById("sidebar-wrapper").classList.toggle("toggled");
        });
    </script>
    @stack('scripts')
</body>
</html>