@extends('layouts.app')

@section('content')
    <h3>Tambah Mata Kuliah</h3>
    <form method="POST" action="{{ route('course.store') }}">
        @csrf
        <div class="mb-3">
            <label>Kode Mata Kuliah</label>
            <input type="text" name="code" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" required>
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
@endsection
