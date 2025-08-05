@extends('layouts.app')

@section('content')
<h3>Edit Kelas</h3>
<div class="container">

    <form action="{{ route('admin.kelas.update', $kelas->id) }}" method="POST" class="mb-3">
        @csrf
        @method('PUT')
        
        <div>
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}" placeholder="Nama Kelas" class="form-control" required>
        </div>
        
        <div>
        <label>Guru Pengajar</label>
        <select name="guru_id" class="form-control" value="{{ $kelas->guru_id }}" required>
            @foreach($guru as $g)
                <option value="{{ $g->id }}" {{ $kelas->guru_id == $g->id ? 'selected' : '' }}>
                    {{ $g->nama }}
                </option>
                @endforeach
        </select>
    </div>
    
</div>
    <button class="btn btn-primary mt-2">Simpan</button>
</form>
@endsection
