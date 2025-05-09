@extends('layouts.app')

@section('content')
    <h3>Edit Mata Kuliah</h3>
    <form method="POST" action="{{ route('course.update', $course->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Kode Mata Kuliah</label>
            <input type="text" class="form-control" value="{{ $course->code }}" disabled>
        </div>
        <div class="mb-3">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="name" class="form-control" value="{{ $course->name }}" required>
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" value="{{ $course->sks }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
