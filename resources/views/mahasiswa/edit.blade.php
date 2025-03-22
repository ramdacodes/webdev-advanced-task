@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded shadow-md">
        <h2 class="text-xl font-semibold mb-4">Edit Mahasiswa</h2>

        <form action="{{ route('mahasiswa.update', $mahasiswa->npm) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- Input NPM --}}
            <div class="mb-4">
                <label for="npm" class="block text-sm font-medium text-gray-700">NPM</label>
                <input type="text" name="npm" id="npm" value="{{ old('npm', $mahasiswa->npm) }}"
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                    placeholder="Masukkan NPM" required>
            </div>

            {{-- Input Nama --}}
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $mahasiswa->nama) }}"
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus-visible:border-blue-500 focus:border-blue-500 text-gray-800"
                    placeholder="Masukkan nama mahasiswa" required>
            </div>

            {{-- Input Alamat --}}
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea name="alamat" id="alamat"
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                    placeholder="Masukkan alamat mahasiswa" rows="3" required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
            </div>

            {{-- Input Program Studi --}}
            <div class="mb-4">
                <label for="program_studi" class="block text-sm font-medium text-gray-700">Program Studi</label>
                <input type="text" name="program_studi" id="program_studi"
                    value="{{ old('program_studi', $mahasiswa->program_studi) }}"
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                    placeholder="Masukkan program studi" required>
            </div>

            {{-- Tombol Simpan --}}
            <div class="mt-5">
                <button type="submit"
                    class="w-full bg-blue-950 text-white px-4 py-2 rounded-md shadow-md transition duration-300">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection
