<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Produk;
use App\Models\Jenis_produk;

class ProdukController extends Controller
{
    //
    public function show(){
        $list_produk = Produk::all();
        return view('produk.show', ['list_produk'=>$list_produk]);
    }

    public function create()
    {
        $list_jenis_produk = Jenis_produk::all();
        $produk = new Produk();
        return view('produk.form',['produk'=>$produk,'list_jenis_produk'=>$list_jenis_produk]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'rating' => 'required',
            'min_stok' => 'required',
            'jenis_produk_id' => 'required',
            'deskripsi' => 'required',
        ]);

        if($request->id){  
            Produk::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('produk.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new produk instance with the validated data
            Produk::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('produk.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        $list_jenis_produk = Jenis_produk::all();
        return view('produk.form',['produk'=>$produk,'list_jenis_produk'=>$list_jenis_produk]);
    }
    public function view($id)
    {
        $produk = Produk::find($id);
        return view('produk.view',['produk'=>$produk]);
    }
    public function destroy($id): RedirectResponse
    {
        Produk::find($id)->delete();
        return redirect(route('produk.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
