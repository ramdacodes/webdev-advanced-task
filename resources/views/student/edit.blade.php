@extends('layouts.app')

@section('content')
    <h3>Edit Mahasiswa</h3>
    <form method="POST" action="{{ route('student.update', $student->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>NPM</label>
            <input type="text" name="npm" class="form-control" value="{{ $student->npm }}" disabled>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
        </div>
        <div class="mb-3">
            <label>Tempat Lahir</label>
            <input type="text" name="place_of_birth" class="form-control" value="{{ $student->place_of_birth }}"
                required>
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="date_of_birth" class="form-control" value="{{ $student->date_of_birth }}" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="address" class="form-control" required>{{ $student->address }}</textarea>
        </div>
        <div class="mb-3">
            <label>Program Studi</label>
            <select name="program_studi_id" class="form-control" required>
                @foreach ($studyPrograms as $studyProgram)
                    <option value="{{ $studyProgram->id }}"
                        {{ $student->study_program_id == $studyProgram->id ? 'selected' : '' }}>
                        {{ $studyProgram->code }} - {{ $studyProgram->study_program }}
                    </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
