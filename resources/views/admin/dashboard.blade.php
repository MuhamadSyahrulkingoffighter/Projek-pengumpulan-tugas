@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h3 class="fw-bold mb-4">Dashboard Admin</h3>

    <div class="row g-4">
        <!-- Card: Total Guru -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 48px; height: 48px;">
                            <i class="bi bi-person-badge fs-4"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Guru</h6>
                        <h4 class="mb-0">{{ $jumlahGuru }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card: Total Siswa -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <div class="bg-success text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 48px; height: 48px;">
                            <i class="bi bi-people fs-4"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Siswa</h6>
                        <h4 class="mb-0">{{ $jumlahSiswa }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card: Total Kelas -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <div class="bg-warning text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 48px; height: 48px;">
                            <i class="bi bi-easel fs-4"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Kelas</h6>
                        <h4 class="mb-0">{{ $jumlahKelas }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card: Total Mapel -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <div class="bg-danger text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 48px; height: 48px;">
                            <i class="bi bi-journal-bookmark fs-4"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Mapel</h6>
                        <h4 class="mb-0">{{ $jumlahMapel }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
