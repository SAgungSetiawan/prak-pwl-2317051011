@extends('layouts.app')

@section('title', 'Tambah Pengguna')

@section('content')
<h1 class="mb-3">Buat Pengguna Baru</h1>
<form action="{{ route('user.store') }}" method="POST" class="card p-4 shadow-sm">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" id="npm" name="npm" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="kelas_id" class="form-label">Kelas</label>
        <select name="kelas_id" id="kelas_id" class="form-select" required>
    <option value="">-- Pilih Kelas --</option>
    @foreach ($kelas as $kelasItem)
        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
    @endforeach
</select>

    </div>

    <button type="submit" class="btn btn-success"><i class="bi bi-save me-1"></i> Simpan</button>
</form>
@endsection
