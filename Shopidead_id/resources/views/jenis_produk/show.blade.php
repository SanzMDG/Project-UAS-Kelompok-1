<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Jenis Produk</x-slot> 
<x-slot name="card_title">Daftar Jenis Produk</x-slot>
<x-slot name="breadcrumb_active">Jenis Produk</x-slot>
<x-slot name="card_footer">@Etalase e-commerce</x-slot>

<h2 class="text-center">Data Jenis Produk</h2>
<a href="{{ route('jenis_produk.create') }}"><button class="btn btn-primary mb-1"><i class="fa-solid fa-plus"></i> Tambah Data</button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Produk</th>  
            <th class="col-4">Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_jenis_produk as $jenis_produk)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $jenis_produk->nama }}</td>
            <td>
                <form action="{{ route('jenis_produk.destroy', $jenis_produk->id) }}" method="post">
                <a href="{{ route('jenis_produk.view', $jenis_produk->id) }}" class="btn btn-primary">View</a>
                <a href="{{ route('jenis_produk.edit', $jenis_produk->id) }}" class="btn btn-warning">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>