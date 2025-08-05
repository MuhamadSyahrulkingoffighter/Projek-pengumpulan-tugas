@extends('layouts.app')

@section('content')
<h3>Edit Siswa</h3>

<form action="{{ route('admin.siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nama Siswa</label>
        <input type="text" name="nama" value="{{ $siswa->nama }}" required>
    </div>
    <div>
        <label>Nis</label>
        <input type="text" name="nip" value="{{ $siswa->nis }}" required>
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email" value="{{ $siswa->email }}" required>
    </div>
    <div>
        <label>Foto</label>
        <input type="file" name="foto" value="{{ $siswa->foto }}" required>
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection
