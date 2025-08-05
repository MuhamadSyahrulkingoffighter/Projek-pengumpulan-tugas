@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Dashboard Siswa</h3>

    <div class="row mt-3">

        {{-- Jumlah Tugas Aktif (belum deadline) --}}
        <div class="col-md-4">
            <div class="card bg-warning text-dark mb-3">
                <div class="card-body">
                    <h5 class="card-title">Tugas Aktif</h5>
                    <p class="card-text">{{ $tugasAktif }} tugas</p>
                </div>
            </div>
        </div>

        {{-- Jumlah Pengumpulan Selesai --}}
        <div class="col-md-4">
            <div class="card bg-success text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">Sudah Dikumpulkan</h5>
                    <p class="card-text">{{ $tugasTerkumpul }} tugas</p>
                </div>
            </div>
        </div>

        {{-- Rata-rata Nilai --}}
        <div class="col-md-4">
            <div class="card bg-info text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">Rata-rata Nilai</h5>
                    <p class="card-text">{{ $rataNilai ?? '-' }}</p>
                </div>
            </div>
        </div>

    </div>

    <h5 class="mt-4">Tugas Terbaru</h5>
    <ul class="list-group">
        @forelse($tugasBaru as $tugas)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $tugas->judul }}
                <span class="badge bg-secondary">{{ \Carbon\Carbon::parse($tugas->deadline)->format('d M Y') }}</span>
            </li>
        @empty
            <li class="list-group-item">Tidak ada tugas baru.</li>
        @endforelse
    </ul>
</div>
@endsection
