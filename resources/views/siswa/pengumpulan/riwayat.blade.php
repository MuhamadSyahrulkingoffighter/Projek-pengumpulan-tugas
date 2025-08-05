@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Riwayat Pengumpulan & Nilai</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul Tugas</th>
                <th>Tanggal Upload</th>
                <th>File</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($riwayat as $item)
                <tr>
                    <td>{{ $item->tugas->judul }}</td>
                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ asset('storage/' . $item->file) }}" target="_blank">Lihat File</a>
                    </td>
                    <td>
                        @if($item->nilai !== null)
                            {{ $item->nilai }}
                        @else
                            <span class="text-danger">Belum Dinilai</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
