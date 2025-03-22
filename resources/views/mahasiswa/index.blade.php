@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-5">
            <h2 class="text-lg font-semibold text-gray-800">Daftar Mahasiswa</h2>
            <a href="{{ route('mahasiswa.create') }}"
                class="bg-blue-950 text-white px-4 py-2 text-sm rounded-lg shadow-md transition duration-300">
                Tambah Mahasiswa
            </a>
        </div>

        {{-- Table Container --}}
        <div class="overflow-x-auto">
            <table class="w-full border-collapse rounded-lg overflow-hidden shadow-md">
                <thead>
                    <tr class="bg-blue-950 text-white text-sm">
                        <th class="px-4 py-3 text-left">No</th>
                        <th class="px-4 py-3 text-left">NPM</th>
                        <th class="px-4 py-3 text-left">Nama</th>
                        <th class="px-4 py-3 text-left">Alamat</th>
                        <th class="px-4 py-3 text-left">Program Studi</th>
                        <th class="px-4 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                        <tr class="border-b text-sm transition duration-300 hover:bg-blue-50">
                            <td class="px-4 py-3 text-gray-700">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3 text-gray-700">{{ $mhs->npm }}</td>
                            <td class="px-4 py-3 text-gray-700">{{ $mhs->nama }}</td>
                            <td class="px-4 py-3 text-gray-700">{{ $mhs->alamat }}</td>
                            <td class="px-4 py-3 text-gray-700">{{ $mhs->program_studi }}</td>
                            <td class="px-4 py-3 text-center space-x-2">
                                {{-- Tombol Edit --}}
                                <a href="{{ route('mahasiswa.edit', $mhs->npm) }}"
                                    class="inline-flex items-center gap-1 bg-blue-500 hover:bg-blue-600 text-white px-3 py-1.5 text-xs font-medium rounded-md shadow-md transition duration-300">
                                    <span>Edit</span>
                                </a>

                                {{-- Tombol Hapus --}}
                                <form action="{{ route('mahasiswa.destroy', $mhs->npm) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center gap-1 bg-red-500 hover:bg-red-600 text-white px-3 py-1.5 text-xs font-medium rounded-md shadow-md transition duration-300"
                                        onclick="return confirm('Hapus data ini?')">
                                        <span>Hapus</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
