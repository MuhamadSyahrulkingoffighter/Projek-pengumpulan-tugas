<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PortalTugas.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
        }

        .sidebar {
            width: 260px;
            min-height: 100vh;
        }

        .sidebar .nav-link {
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            transition: all 0.2s ease-in-out;
        }

        .sidebar .nav-link:hover {
            background-color: #f8f9fa;
            color: #0d6efd !important;
        }

        .sidebar .nav-link.active {
            background-color: #e7f1ff;
            color: #0d6efd !important;
            font-weight: 500;
        }

        .main-wrapper {
            display: flex;
        }

        .main-content {
            flex: 1;
            padding: 2rem;
        }

        .with-sidebar {
            margin-left: 260px;
        }

        .navbar {
            z-index: 1030;
        }
    </style>
</head>
<body>
@auth
@php
    $hasSidebar = in_array(Auth::user()->role, ['admin', 'guru']);
@endphp

@if($hasSidebar)
    {{-- Sidebar --}}
    <div class="sidebar position-fixed bg-white border-end shadow-sm p-3">
        <div>
            <div class="text-center py-3 border-bottom">
                <h5 class="text-primary fw-bold mb-0">
                    {{ Auth::user()->role === 'admin' ? 'Admin Panel' : 'Guru Panel' }}
                </h5>
            </div>

            <ul class="nav flex-column mt-4">
                @if(Auth::user()->role === 'admin')
                    <li class="nav-item mb-2">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : 'text-dark' }}">
                            <i class="bi bi-speedometer2 me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('admin.guru.index') }}" class="nav-link {{ request()->routeIs('admin.guru.index') ? 'active' : 'text-dark' }}">
                            <i class="bi bi-person-badge me-2"></i> Manajemen Guru
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('admin.siswa.index') }}" class="nav-link {{ request()->routeIs('admin.siswa.index') ? 'active' : 'text-dark' }}">
                            <i class="bi bi-people me-2"></i> Manajemen Siswa
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('admin.mapel.index') }}" class="nav-link {{ request()->routeIs('admin.mapel.index') ? 'active' : 'text-dark' }}">
                            <i class="bi bi-journal-bookmark me-2"></i> Mata Pelajaran
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('admin.kelas.index') }}" class="nav-link {{ request()->routeIs('admin.kelas.index') ? 'active' : 'text-dark' }}">
                            <i class="bi bi-easel me-2"></i> Kelas
                        </a>
                    </li>
                @elseif(Auth::user()->role === 'guru')
                    <li class="nav-item mb-2">
                        <a href="{{ route('guru.dashboard') }}" class="nav-link {{ request()->routeIs('guru.dashboard') ? 'active' : 'text-dark' }}">
                            <i class="bi bi-speedometer2 me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('guru.tugas') }}" class="nav-link {{ request()->routeIs('guru.tugas') ? 'active' : 'text-dark' }}">
                            <i class="bi bi-journal-text me-2"></i> Manajemen Tugas
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('guru.penilaian') }}" class="nav-link {{ request()->routeIs('guru.penilaian') ? 'active' : 'text-dark' }}">
                            <i class="bi bi-card-checklist me-2"></i> Penilaian
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('guru.profil') }}" class="nav-link {{ request()->routeIs('guru.profil') ? 'active' : 'text-dark' }}">
                            <i class="bi bi-person-circle me-2"></i> Profil
                        </a>
                    </li>
                @endif
            </ul>
        </div>

        <form action="{{ route('logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-outline-danger w-100">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </button>
        </form>
    </div>
@endif

@if(Auth::user()->role === 'siswa')
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold text-primary" href="{{ route('siswa.dashboard') }}">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="logo" width="32" height="32" class="me-2">
                PortalTugas.id
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSiswaModern" aria-controls="navbarSiswaModern" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSiswaModern">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('siswa.dashboard') ? 'text-primary fw-semibold' : '' }}" href="{{ route('siswa.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('siswa.kelas') ? 'text-primary fw-semibold' : '' }}" href="{{ route('siswa.pengumpulan.index') }}">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('siswa.profil') ? 'text-primary fw-semibold' : '' }}" href="{{ route('siswa.profil') }}">Profil</a>
                    </li>
                    <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="avatar" width="32" height="32" class="rounded-circle me-1">
                            <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('siswa.profil') }}">Profil Saya</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="px-3">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger w-100">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endif

@endauth

<<<<<<< HEAD
{{-- Wrapper for sidebar & content --}}
<div class="main-wrapper">
    <div class="main-content {{ $hasSidebar ? 'with-sidebar' : '' }}">
        @yield('content')
    </div>
=======
@auth
    @if (Auth::user()->role === 'guru')
    <title>Guru Dashboard</title>
<div class="sidebar">
    <h4 class="text-white text-center py-4">Guru Panel</h4>
    <a href="{{ route('guru.dashboard') }}">Dashboard</a>
    <a href="{{ route('guru.tugas') }}">Manajemen Tugas</a>
    <a href="{{ route('guru.penilaian')}}">Penilaian Tugas</a>
    <a href="{{ route('guru.profil')}}">Profil</a>
    <form action="{{ route('logout') }}" method="POST" class="m-0">
    @csrf
    <button type="submit" class="w-100 text-start btn btn-link text-white px-3 py-2" style="text-decoration: none;">
        Logout
    </button>
</form>
</div>
@endif
@endauth

@auth
@if (Auth::user()->role === 'siswa')
<title>Siswa Dashboard</title>

<!-- Modern Navbar Siswa -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold text-primary" href="{{ route('siswa.dashboard') }}">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="logo" width="32" height="32" class="me-2">
            PortalTugas.id
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSiswaModern" aria-controls="navbarSiswaModern" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSiswaModern">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->routeIs('siswa.dashboard') ? 'text-primary fw-semibold' : '' }}" href="{{ route('siswa.dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->routeIs('siswa.pengumpulan.index') ? 'text-primary fw-semibold' : '' }}" href="{{ route('siswa.pengumpulan.index') }}">Tugas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->routeIs('siswa.pengumpulan.riwayat') ? 'text-primary fw-semibold' : '' }}" href="{{ route('siswa.pengumpulan.riwayat') }}">Riwayat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->routeIs('siswa.profil') ? 'text-primary fw-semibold' : '' }}" href="{{ route('siswa.profil') }}">Profil</a>
                </li>

                <!-- Dropdown Logout -->
                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="avatar" width="32" height="32" class="rounded-circle me-1">
                        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('siswa.profil') }}">Profil Saya</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="px-3">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger w-100">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

@endif
@endauth




<div class="main-content">
    @yield('content')
>>>>>>> c5b3b4c3b0a667466e0f4ffceb92cb01bbb6bd57
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
