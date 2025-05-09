@extends('layouts.app')

@section('content')
    <h3>Edit Nilai Mahasiswa</h3>
    <form method="POST" action="{{ route('mark.update', $mark->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Mahasiswa</label>
            <select name="student_id" class="form-control" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $mark->student_id == $student->id ? 'selected' : '' }}>
                        {{ $student->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Mata Kuliah</label>
            <select name="course_id" class="form-control" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $mark->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Angka</label>
            <input type="number" name="number" class="form-control" value="{{ $mark->number }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label>Nilai Huruf</label>
            <input type="text" name="mark" class="form-control" value="{{ $mark->mark }}" maxlength="1" required>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
