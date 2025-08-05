@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Profil Saya</h1>

    <div class="card shadow">
        <div class="card-body d-flex align-items-center">
            <div class="me-4">
                <img src="{{ asset('storage/' . $siswa->foto) }}" alt="Foto" width="80">
            </div>
            <div>
                <h4>{{ $siswa->nama }}</h4>
                <p><strong>Email:</strong> {{ $siswa->email }}</p>
                <p><strong>NIS:</strong> {{ $siswa->nis }}</p>
                <p><strong>Kelas:</strong> {{ $siswa->kelas->nama_kelas ?? '-' }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
