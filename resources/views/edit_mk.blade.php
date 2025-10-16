@extends('layouts.app')

@section('content')
<div class="container position-relative">
    <a href="{{ route('matakuliah.store') }}" 
   class="btn btn-secondary position-absolute" 
   style="top: -10px; left: -120px;">
   ←kembali
</a>

    <h1 class="mb-4">Edit Mata Kuliah</h1>

    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
            <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="sks" class="form-label">SKS</label>
            <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-check-circle me-1"></i> Update
        </button>
        
    </form>
</div>
@endsection
