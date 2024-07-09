<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Jenis Produk</x-slot> 
<x-slot name="card_title">Form Kelola Jenis Produk</x-slot>
<x-slot name="breadcrumb_active">Jenis Produk</x-slot>
<x-slot name="card_footer">@Etalase e-commerce</x-slot>
<form action="{{ route('jenis_produk.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="kode">Jenis Produk</label>
        <input type="text" name="nama" id="nama" value="{{ $jenis_produk->nama }}" class="form-control" required>
    </div>
    <input type="hidden" name="id" value="{{ $jenis_produk->id }}">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('jenis_produk.show') }}" class="btn btn-success mr-2">Batal</a>
</form>
</x-layout>