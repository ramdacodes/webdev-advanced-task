@extends('layouts.app')

@section('content')
    <h3>Data Nilai Mahasiswa</h3>
    <a href="{{ route('mark.create') }}" class="btn btn-success mb-3">Tambah Nilai</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Mata Kuliah</th>
                <th>Angka</th>
                <th>Nilai Huruf</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marks as $mark)
                <tr>
                    <td>{{ $mark->student->name ?? '-' }}</td>
                    <td>{{ $mark->programStudy->name ?? '-' }}</td>
                    <td>{{ $mark->number }}</td>
                    <td>{{ $mark->mark }}</td>
                    <td>
                        <a href="{{ route('mark.edit', $mark->id) }}" class="btn btn-warning btnsm">Edit</a>
                        <form action="{{ route('mark.destroy', $mark->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return
confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
