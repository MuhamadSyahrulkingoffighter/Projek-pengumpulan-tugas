@extends('layouts.app')

@section('content')
<h3>Edit Guru</h3>

<form action="{{ route('admin.guru.update', $guru->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nama guru</label>
        <input type="text" name="nama" value="{{ $guru->nama }}" required>
    </div>
    <div>
        <label>Nip</label>
        <input type="text" name="nip" value="{{ $guru->nip }}" required>
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email" value="{{ $guru->email }}" required>
    </div>
    <div>
        <label>Foto</label>
        <input type="file" name="foto" value="{{ $guru->foto }}">
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection
