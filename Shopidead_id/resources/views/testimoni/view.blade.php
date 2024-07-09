<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Testimoni</x-slot> 
<x-slot name="card_title">Detail Testimoni :: {{ $testimoni->id }} -  {{ $testimoni->nama_tokoh }}</x-slot>
<x-slot name="breadcrumb_active">Testimoni</x-slot>
<x-slot name="card_footer">@Etalase e-commerce</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">ID</th><td>{{ $testimoni->id }}</td></tr>
    <tr><th>Tanggal</th><td>{{ $testimoni->tanggal }}</td></tr>
    <tr><th>Nama Tokoh</th><td>{{ $testimoni->nama_tokoh }}</td></tr>
    <tr><th>Komentar</th><td>{{ $testimoni->komentar }}</td></tr>
    <tr><th>Rating</th><td>{{ $testimoni->rating }}</td></tr>
    <tr><th>Produk</th><td>{{ $testimoni->produk->nama }}</td></tr>
    <tr><th>Kategori Tokoh</th><td>{{ $testimoni->kategori_tokoh->nama }}</td></tr>
</table>
<div>
    <a href="{{ route('testimoni.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
