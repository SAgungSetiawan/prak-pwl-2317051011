@extends('layouts.app')

@section('title', 'Daftar Mata Kuliah')

@section('content')
<h1 class="mb-3">Daftar Mata Kuliah</h1>
<a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">
    <i class="bi bi-plus-circle me-1"></i> Tambah Mata Kuliah
</a>

<table class="table table-bordered table-striped align-middle shadow-sm">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mks as $mk)
        <tr>
            <td>{{ $mk->id }}</td>
            <td>{{ $mk->nama_mk }}</td>
            <td>{{ $mk->sks }}</td>
            <td class="text-center">
                <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
