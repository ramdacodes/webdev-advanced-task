<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Daftar Produk</h2>
    </x-slot>

    <div class="py-4">
        <a href="{{ route('produk.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Produk</a>

        @if (session('success'))
            <div class="mt-4 bg-green-100 text-green-700 p-3 rounded">{{ session('success') }}</div>
        @endif

        <div class="mt-6">
            @foreach ($produks as $produk)
                <div class="border p-4 mb-4">
                    <h3 class="text-lg font-bold">{{ $produk->nama }}</h3>
                    <p>{{ $produk->deskripsi }}</p>
                    <p class="text-sm text-gray-500">Oleh: {{ $produk->user->name }}</p>

                    @can('update', $produk)
                        <div class="mt-2 flex space-x-2">
                            <a href="{{ route('produk.edit', $produk) }}" class="text-blue-500">Edit</a>

                            <form action="{{ route('produk.destroy', $produk) }}" method="POST"
                                onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Hapus</button>
                            </form>
                        </div>
                    @endcan
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
