<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Produk</x-slot> 
<x-slot name="card_title">Form Kelola Produk</x-slot>
<x-slot name="breadcrumb_active">Produk</x-slot>
<x-slot name="card_footer">@Etalase e-commerce</x-slot>
<form action="{{ route('produk.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="kode">Kode produk</label>
        <input type="text" name="kode" id="kode" value="{{ $produk->kode }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama produk</label>
        <input type="text" name="nama" id="nama" value="{{ $produk->nama }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" value="{{ $produk->harga}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok" value="{{ $produk->stok}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="rating">Rating</label>
        <input type="text" name="rating" id="rating" value="{{ $produk->rating}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="min_stok">Min. Stok</label>
        <input type="number" name="min_stok" id="min_stok" value="{{ $produk->min_stok}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="jenis_produk">Jenis Produk</label>
        <div class="row container">
        <select name="jenis_produk_id" class="form-select form-select-lg">
            <option>--Pilih--</option>
            @foreach($list_jenis_produk as $jenis_produk)
            <option value="{{ $jenis_produk->id }}" {{ $produk->jenis_produk_id==$jenis_produk->id ? 'selected': ''}}>
                {{ $jenis_produk->nama }}
            </option>
            @endforeach
        </select>
        </div>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="textarea" name="deskripsi" id="deskripsi" value="{{ $produk->deskripsi}}" class="form-control" required>
    </div>
    <input type="hidden" name="id" value="{{ $produk->id }}">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('produk.show') }}" class="btn btn-success mr-2">Batal</a>
    
</form>
</x-layout>