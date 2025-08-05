@extends('layouts.app')

@section('content')
<h3>Edit Mapel</h3>

<form action="{{ route('admin.mapel.update', $mapel->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nama Mapel</label>
        <input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}" required>
    </div>

    <div>
        <label>Guru Pengajar</label>
        <select name="guru_id" value="{{ $mapel->guru_id }}" required>
            @foreach($guru as $g)
                <option value="{{ $g->id }}" {{ $mapel->guru_id == $g->id ? 'selected' : '' }}>
                    {{ $g->nama }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection
