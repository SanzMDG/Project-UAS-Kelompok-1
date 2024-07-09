<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Jenis Produk</x-slot> 
<x-slot name="card_title">Detail Jenis Produk :: {{ $jenis_produk->id }} -  {{ $jenis_produk->nama }}</x-slot>
<x-slot name="breadcrumb_active">Jenis Produk</x-slot> 
<x-slot name="card_footer">@Etalase e-commerce</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Id Produk</th><td>{{ $jenis_produk->id }}</td></tr>
    <tr><th>Jenis Produk</th><td>{{ $jenis_produk->nama }}</td></tr>
</table>
<div>
    <a href="{{ route('jenis_produk.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
