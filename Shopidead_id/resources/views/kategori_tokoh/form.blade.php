<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Kategori Tokoh</x-slot> 
<x-slot name="card_title">Form Kelola Kategori Tokoh</x-slot> 
<x-slot name="breadcrumb_active">Kategori Tokoh</x-slot>
<x-slot name="card_footer">@Etalase e-commerce</x-slot>
<form action="{{ route('kategori_tokoh.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="kode">Kategori Tokoh</label>
        <input type="text" name="nama" id="nama" value="{{ $kategori_tokoh->nama }}" class="form-control" required>
    </div>
    <input type="hidden" name="id" value="{{ $kategori_tokoh->id }}">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('kategori_tokoh.show') }}" class="btn btn-success mr-2">Batal</a>
</form>
</x-layout>