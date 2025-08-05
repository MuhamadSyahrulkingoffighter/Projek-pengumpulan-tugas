@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Profil Saya</h1>

    <div class="card shadow">
        <div class="card-body d-flex align-items-center">
            <div class="me-4">
                <img src="{{ asset('storage/' . $guru->foto) }}" alt="Foto" width="80">
            </div>
            <div>
                <h4>{{ $guru->nama }}</h4>
                <p><strong>Email:</strong> {{ $guru->email }}</p>
                <p><strong>NIP:</strong> {{ $guru->nip}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
