@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Dashboard Wali Kelas</h3>

    @if($kelas)
    <div class="alert alert-info">
        Anda adalah wali dari kelas <strong>{{ $kelas->nama_kelas }}</strong>
    </div>

    <h5>Daftar Siswa:</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Status Pengumpulan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $s)
            @php
                $jumlahTugas = $tugas->count();
                $tugasTerkumpul = $pengumpulan->where('siswa_id', $s->id)->count();
            @endphp
            <tr>
                <td>{{ $s->nama }}</td>
                <td>{{ $tugasTerkumpul }} / {{ $jumlahTugas }} Tugas</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @else
    <div class="alert alert-warning">
        Anda belum menjadi wali dari kelas manapun.
    </div>
    @endif
</div>
@endsection
