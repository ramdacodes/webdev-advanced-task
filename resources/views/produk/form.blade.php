@extends('layouts.app')

@section('content')
    <h3>{{ isset($produk) ? 'Edit Produk' : 'Tambah Produk' }}</h3>
    <form action="{{ isset($produk) ? route('produk.update', $produk->id) : route('produk.store') }}" method="POST">
        @csrf
        @if (isset($produk))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk"
                value="{{ old('nama_produk', $produk->nama_produk ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" value="{{ old('harga', $produk->harga ?? '') }}"
                required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" class="form-control" name="stok" value="{{ old('stok', $produk->stok ?? '') }}"
                required>
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" required>{{ old('deskripsi', $produk->deskripsi ?? '') }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">{{ isset($produk) ? 'Update' : 'Simpan' }}</button>
    </form>
@endsection
