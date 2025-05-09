<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Tambah Produk</h2>
    </x-slot>

    <div class="py-4">
        <form action="{{ route('produk.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label>Nama</label>
                <input type="text" name="nama" class="w-full border p-2" required>
            </div>
            <div>
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="w-full border p-2"></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
