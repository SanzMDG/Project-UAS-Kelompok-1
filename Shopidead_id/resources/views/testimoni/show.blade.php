<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Testimoni</x-slot> 
<x-slot name="card_title">Daftar Testimoni</x-slot>
<x-slot name="breadcrumb_active">Testimoni</x-slot>
<x-slot name="card_footer">@Etalase e-commerce</x-slot>

<h2 class="text-center">Data Testimoni</h2>
@if(Auth::user()->role=='administrator')
<a href="{{ route('testimoni.create') }}"><button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Tokoh</th>  
            <th>Komentar</th>
            <th>Rating</th>
            <th>Produk</th>
            <th>Kategori Tokoh</th>
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_testimoni as $testimoni)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $testimoni->tanggal }}</td>
            <td>{{ strtoupper($testimoni->nama_tokoh) }}</td>
            <td>{{ $testimoni->komentar }}</td>
            <td>{{ $testimoni->rating }}</td>
            <td>{{ $testimoni->produk->nama }}</td>
            <td>{{ $testimoni->kategori_tokoh->nama }}</td>
            <td>
               <form action="{{ route('testimoni.destroy', $testimoni->id) }}" method="post">
               <a href="{{ route('testimoni.view', $testimoni->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
               @if(Auth::user()->role=='administrator')
               <a href="{{ route('testimoni.edit', $testimoni->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
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