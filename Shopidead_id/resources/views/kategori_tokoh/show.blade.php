<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Kategori Tokoh</x-slot> 
<x-slot name="card_title">Daftar Kategori Tokoh</x-slot>
<x-slot name="breadcrumb_active">Kategori Tokoh</x-slot>
<x-slot name="card_footer">@Etalase e-commerce</x-slot>

<h2 class="text-center">Data Kategori Tokoh</h2>
<a href="{{ route('kategori_tokoh.create') }}"><button class="btn btn-primary mb-1"><i class="fa-solid fa-plus"></i> Tambah Data</button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>  
            <th>Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_kategori_tokoh as $kategori_tokoh)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $kategori_tokoh->nama }}</td>
            <td>
                <form action="{{ route('kategori_tokoh.destroy', $kategori_tokoh->id) }}" method="post">
                <a href="{{ route('kategori_tokoh.view', $kategori_tokoh->id) }}" class="btn btn-primary">View</a>
                <a href="{{ route('kategori_tokoh.edit', $kategori_tokoh->id) }}" class="btn btn-warning">Edit</a>
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