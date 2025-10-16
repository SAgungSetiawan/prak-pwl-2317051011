@extends('layouts.app')

@section('content')
<div class="container position-relative">
    <a href="{{ route('user.store') }}" 
   class="btn btn-secondary position-absolute" 
   style="top: -10px; left: -120px;">
   ←kembali
</a>
    <h1 class="mb-4">Edit Data Pengguna</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $user->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" name="npm" id="npm" class="form-control" value="{{ $user->npm }}" required>
        </div>

        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas</label>
            <select name="kelas_id" id="kelas_id" class="form-select" required>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" 
                        {{ $user->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-check-circle me-1"></i> Update
        </button>
        
    </form>
</div>
@endsection
