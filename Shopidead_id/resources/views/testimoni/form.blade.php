<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Testimoni</x-slot> 
<x-slot name="card_title">Form Kelola Testimoni</x-slot>
<x-slot name="breadcrumb_active">Testimoni</x-slot>
<x-slot name="card_footer">@Etalase e-commerce</x-slot>
<form action="{{ route('testimoni.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $testimoni->tanggal }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nama_tokoh">Nama Tokoh</label>
        <input type="text" name="nama_tokoh" id="nama_tokoh" value="{{ $testimoni->nama_tokoh }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="komentar">Komentar</label>
        <input type="textarea" name="komentar" id="komentar" value="{{ $testimoni->komentar}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="rating">Rating</label>
        <input type="number" name="rating" id="rating" value="{{ $testimoni->rating}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="produk_id">Produk</label>
        <div class="row container">
        <select name="produk_id" class="form-select form-select-lg">
            <option>--Pilih--</option>
            @foreach($list_produk as $produk)
            <option value="{{ $produk->id }}" {{ $testimoni->produk_id==$produk->id ? 'selected': ''}}>
                {{ $produk->nama }}
            </option>
            @endforeach
        </select>
        </div>
    </div>
    <div class="form-group">
        <label for="kategori_tokoh">Kategori Tokoh</label>
        <div class="row container">
        <select name="kategori_tokoh_id" class="form-select form-select-lg">
            <option>--Pilih--</option>
            @foreach($list_kategori_tokoh as $kategori_tokoh)
            <option value="{{ $kategori_tokoh->id }}" {{ $testimoni->kategori_tokoh_id==$kategori_tokoh->id ? 'selected': ''}}>
                {{ $kategori_tokoh->nama }}
            </option>
            @endforeach
        </select>
        </div>
    </div>
    <input type="hidden" name="id" value="{{ $testimoni->id }}">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('testimoni.show') }}" class="btn btn-success mr-2">Batal</a>
</form>
</x-layout>