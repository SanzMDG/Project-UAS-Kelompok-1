<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Produk</x-slot> 
<x-slot name="card_title">Detail Produk :: {{ $produk->kode }} -  {{ $produk->nama }}</x-slot>
<x-slot name="breadcrumb_active">Produk</x-slot>
<x-slot name="card_footer">@Etalase e-commerce</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Kode Produk</th><td>{{ $produk->kode }}</td></tr>
    <tr><th>Nama Produk</th><td>{{ $produk->nama }}</td></tr>
    <tr><th>Harga</th><td>{{ $produk->harga }}</td></tr>
    <tr><th>Stok</th><td>{{ $produk->stok }}</td></tr>
    <tr><th>Rating</th><td>{{ $produk->rating }}</td></tr>
    <tr><th>Min. Stok</th><td>{{ $produk->min_stok }}</td></tr>
    <tr><th>Deskripsi</th><td class="text-justify">{{ $produk->deskripsi }}</td></tr>
    <tr><th>Jenis Produk</th><td>{{ $produk->jenis_produk->nama }}</td></tr>
</table>
<div>
    <a href="{{ route('produk.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
