<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Kategori Tokoh</x-slot> 
<x-slot name="card_title">Detail Kategori Tokoh :: {{ $kategori_tokoh->id }} -  {{ $kategori_tokoh->nama }}</x-slot> 
<x-slot name="breadcrumb_active">Kategori Tokoh</x-slot>
<x-slot name="card_footer">@Etalase e-commerce</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Id</th><td>{{ $kategori_tokoh->id }}</td></tr>
    <tr><th>Kategori Tokoh</th><td>{{ $kategori_tokoh->nama }}</td></tr>
</table>
<div>
    <a href="{{ route('kategori_tokoh.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
