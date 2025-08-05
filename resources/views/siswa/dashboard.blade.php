@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 fw-bold text-primary">Selamat Datang, {{ Auth::user()->name }} 👋</h2>

    <!-- Row 1: Info Cards -->
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="card-title text-muted">Tugas Aktif</h5>
                    <h3 class="fw-bold text-primary">5</h3>
                    <p class="mb-0">Tugas yang masih bisa dikumpulkan</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="card-title text-muted">Tugas Selesai</h5>
                    <h3 class="fw-bold text-success">12</h3>
                    <p class="mb-0">Tugas sudah dikumpulkan</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <h5 class="card-title text-muted">Rata-Rata Nilai</h5>
                    <h3 class="fw-bold text-warning">87</h3>
                    <p class="mb-0">Dari seluruh tugas yang telah dinilai</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Spacer -->
    <hr class="my-5">

    <!-- Row 2: Tugas Terbaru -->
    <div class="row">
        <div class="col-md-8">
            <h4 class="fw-semibold mb-3">Tugas Terbaru</h4>
            <div class="list-group shadow-sm rounded-4">
                <a href="#" class="list-group-item list-group-item-action py-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="mb-1">Tugas Matematika: Aljabar</h6>
                            <small class="text-muted">Deadline: 10 Agustus 2025</small>
                        </div>
                        <span class="badge bg-primary">Belum Dikerjakan</span>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="mb-1">Tugas Bahasa Indonesia: Puisi</h6>
                            <small class="text-muted">Deadline: 9 Agustus 2025</small>
                        </div>
                        <span class="badge bg-success">Sudah Dikirim</span>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="mb-1">Tugas IPA: Sistem Pernapasan</h6>
                            <small class="text-muted">Deadline: 8 Agustus 2025</small>
                        </div>
                        <span class="badge bg-warning text-dark">Menunggu Penilaian</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Kalender atau Quick Info -->
        <div class="col-md-4 mt-4 mt-md-0">
            <h4 class="fw-semibold mb-3">Kalender</h4>
            <div class="card shadow-sm border-0 rounded-4 p-3">
                <div id="calendarPlaceholder" class="text-center text-muted py-5">
                    <em>(Kalender tugas akan tampil di sini)</em>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
