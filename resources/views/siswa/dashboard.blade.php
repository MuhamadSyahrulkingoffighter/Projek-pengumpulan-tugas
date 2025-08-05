@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 fw-bold text-primary">Hai, {{ Auth::user()->name }} 👋</h2>
    <p class="text-muted">Berikut adalah ringkasan aktivitas tugasmu hari ini.</p>

    <!-- Row 1: Info Cards -->
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card shadow border-0 rounded-4 bg-light-blue text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="bi bi-journal-text fs-1"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 text-white-50">Tugas Aktif</h6>
                            <h4 class="fw-bold">5</h4>
                            <small>Tugas yang belum dikumpulkan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-0 rounded-4 bg-light-green text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="bi bi-check-circle fs-1"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 text-white-50">Tugas Selesai</h6>
                            <h4 class="fw-bold">12</h4>
                            <small>Sudah dikumpulkan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-0 rounded-4 bg-light-yellow text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="bi bi-graph-up-arrow fs-1"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 text-white-50">Rata-Rata Nilai</h6>
                            <h4 class="fw-bold">87</h4>
                            <small>Dari semua tugas yang dinilai</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 2: Tugas Terbaru & Kalender -->
    <div class="row g-4">
        <!-- Tugas Terbaru -->
        <div class="col-lg-8">
            <div class="card border-0 shadow rounded-4">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-semibold text-primary">📌 Tugas Terbaru</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-3 d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="mb-1">Matematika - Aljabar</h6>
                            <small class="text-muted">Deadline: 10 Agustus 2025</small>
                        </div>
                        <span class="badge bg-primary">Belum Dikerjakan</span>
                    </li>
                    <li class="list-group-item py-3 d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="mb-1">Bahasa Indonesia - Puisi</h6>
                            <small class="text-muted">Deadline: 9 Agustus 2025</small>
                        </div>
                        <span class="badge bg-success">Sudah Dikirim</span>
                    </li>
                    <li class="list-group-item py-3 d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="mb-1">IPA - Sistem Pernapasan</h6>
                            <small class="text-muted">Deadline: 8 Agustus 2025</small>
                        </div>
                        <span class="badge bg-warning text-dark">Menunggu Nilai</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Kalender / Jadwal -->
        <div class="col-lg-4">
            <div class="card border-0 shadow rounded-4">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-semibold text-primary">📅 Jadwal / Kalender</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="bi bi-calendar3 me-2 text-primary"></i>
                            <strong>8 Agustus:</strong> Tugas IPA (Sistem Pernapasan)
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-calendar3 me-2 text-primary"></i>
                            <strong>9 Agustus:</strong> Tugas Bahasa Indonesia (Puisi)
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-calendar3 me-2 text-primary"></i>
                            <strong>10 Agustus:</strong> Tugas Matematika (Aljabar)
                        </li>
                    </ul>
                    <div class="text-muted text-center mt-4">
                        <em>Kalender lengkap segera hadir...</em>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
    .bg-light-blue {
        background: linear-gradient(135deg, #5dade2, #3498db);
    }
    .bg-light-green {
        background: linear-gradient(135deg, #58d68d, #28b463);
    }
    .bg-light-yellow {
        background: linear-gradient(135deg, #f9e79f, #f4d03f);
    }
</style>
@endsection
