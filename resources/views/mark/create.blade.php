@extends('layouts.app')

@section('content')
    <h3>Tambah Nilai Mahasiswa</h3>
    <form method="POST" action="{{ route('mark.store') }}">
        @csrf
        <div class="mb-3">
            <label>Mahasiswa</label>
            <select name="student_id" class="form-control" required>
                <option value="">-- Pilih Mahasiswa --</option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Mata Kuliah</label>
            <select name="course_id" class="form-control" required>
                <option value="">-- Pilih Mata Kuliah --</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Angka</label>
            <input type="number" name="number" class="form-control" required step="0.01">
        </div>
        <div class="mb-3">
            <label>Nilai Huruf</label>
            <input type="text" name="mark" class="form-control" maxlength="1" required>
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
@endsection
