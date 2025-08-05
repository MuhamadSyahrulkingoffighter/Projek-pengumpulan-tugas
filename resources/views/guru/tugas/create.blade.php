@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Buat Tugas Baru</h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('guru.tugas.simpan') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Tugas</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label for="deadline" class="form-label">Tanggal Dikumpulkan</label>
            <input type="date" name="deadline" id="deadline" class="form-control" required>
        </div>

        <div class="mb-3">
            <select name="kelas_id" class="form-control">
            @foreach($kelas as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
            @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="mapel_id" class="form-label">Mata Pelajaran</label>
            <select name="mapel_id" id="mapel_id" class="form-control" required>
                <option value="">-- Pilih Mata Pelajaran --</option>
                @foreach ($mapel as $m)
                    <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                @endforeach
            </select>
        </div>
        

        <button type="submit" class="btn btn-primary">Simpan Tugas</button>
        <a href="{{ route('guru.tugas') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
