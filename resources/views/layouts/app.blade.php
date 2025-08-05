<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            background-color: #343a40;
        }
        .sidebar a {
            color: #fff;
            padding: 15px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .sidebar form :hover {
            background-color: #495057;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>
@auth
    @if (Auth::user()->role === 'admin')
    <title>Admin Dashboard</title>
<div class="sidebar">
    <h4 class="text-white text-center py-4">Admin Panel</h4>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <a href="{{ route('admin.guru.index') }}">Manajemen Guru</a>
    <a href="{{ route('admin.siswa.index') }}">Manajemen Siswa</a>
    <a href="{{ route('admin.mapel.index') }}">Mata Pelajaran</a>
    <a href="{{ route('admin.kelas.index') }}">Kelas</a>
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
<div class="sidebar">
    <h4 class="text-white text-center py-4">Siswa Panel</h4>
    <a href="{{ route('siswa.dashboard')}}">Dashboard</a>
    <a href="{{ route('siswa.pengumpulan.index') }}">Pengumpulan Tugas</a>
    <a href="{{ route('siswa.pengumpulan.riwayat') }}">Riwayat Tugas & Nilai</a>
    <a href="{{ route('siswa.profil') }}">Profil</a>
    <form action="{{ route('logout') }}" method="POST" class="m-0">
    @csrf
    <button type="submit" class="w-100 text-start btn btn-link text-white px-3 py-2" style="text-decoration: none;">
        Logout
    </button>
</form>

</div>
@endif
@endauth




<div class="main-content">
    @yield('content')
</div>

</body>
</html>