<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Produk</x-slot> 
<x-slot name="card_title">Daftar Produk Aktif</x-slot>
<x-slot name="breadcrumb_active">Produk</x-slot>
<x-slot name="card_footer">@Etalase e-commerce</x-slot>

<h2 class="text-center">Data Produk</h2>
@if(Auth::user()->role=='administrator')
<a href="{{ route('produk.create') }}"><button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>  
            <th>Harga</th>
            <th>Stok</th>
            <th>Rating</th>
            <th>Min. Stok</th>
            <th>Deskripsi</th>
            <th>Jenis Produk</th> 
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_produk as $produk)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $produk->kode }}</td>
            <td>{{ strtoupper($produk->nama) }}</td>
            <td>{{ $produk->harga }}</td>
            <td>{{ $produk->stok }}</td>
            <td>{{ $produk->rating }}</td>
            <td>{{ $produk->min_stok }}</td>
            <td class="text-justify">{{ $produk->deskripsi }}</td>
            <td>{{ $produk->jenis_produk->nama }}</td>
            <td>
               <form action="{{ route('produk.destroy', $produk->id) }}" method="post">
               <a href="{{ route('produk.view', $produk->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
               @if(Auth::user()->role=='administrator')
               <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-transparant"><i class="fas fa-trash text-danger"></i></button>
               @endif
               </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>