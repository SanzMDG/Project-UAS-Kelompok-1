<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Testimoni;
use App\Models\Produk;
use App\Models\Kategori_tokoh;

class TestimoniController extends Controller
{
    //
    public function show(){
        $list_testimoni = Testimoni::all();
        return view('testimoni.show', ['list_testimoni'=>$list_testimoni]);
    }

    public function create()
    {
        $list_produk = Produk::all();
        $list_kategori_tokoh = Kategori_tokoh::all();
        $testimoni = new Testimoni();
        return view('testimoni.form',['list_produk'=>$list_produk,'list_kategori_tokoh'=>$list_kategori_tokoh,'testimoni'=>$testimoni]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'tanggal' => 'required',
            'nama_tokoh' => 'required',
            'komentar' => 'required',
            'rating' => 'required',
            'produk_id' => 'required',
            'kategori_tokoh_id' => 'required',
        ]);

        if($request->id){  
            Testimoni::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('testimoni.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new produk instance with the validated data
            Testimoni::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('testimoni.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $testimoni = Testimoni::find($id);
        $list_produk = Produk::all();
        $list_kategori_tokoh = Kategori_tokoh::all();
        return view('testimoni.form',['testimoni'=>$testimoni,'list_produk'=>$list_produk,'list_kategori_tokoh'=>$list_kategori_tokoh]);
    }
    public function view($id)
    {
        $testimoni = Testimoni::find($id);
        return view('testimoni.view',['testimoni'=>$testimoni]);
    }
    public function destroy($id): RedirectResponse
    {
        Testimoni::find($id)->delete();
        return redirect(route('testimoni.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
