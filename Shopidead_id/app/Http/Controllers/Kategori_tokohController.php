<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Kategori_tokoh;

class Kategori_tokohController extends Controller
{
    //
    public function show(){
        $list_kategori_tokoh = Kategori_tokoh::all();
        return view('kategori_tokoh.show',['list_kategori_tokoh'=>$list_kategori_tokoh]);
    }

    public function create()
    {
        $kategori_tokoh = new kategori_tokoh();
        return view('kategori_tokoh.form',['kategori_tokoh'=>$kategori_tokoh]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required',
        ]);

        if($request->id){  
            kategori_tokoh::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kategori_tokoh.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new produk instance with the validated data
            kategori_tokoh::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kategori_tokoh.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $kategori_tokoh = kategori_tokoh::find($id);
        return view('kategori_tokoh.form',['kategori_tokoh'=>$kategori_tokoh]);
    }
    public function view($id)
    {
        $kategori_tokoh = kategori_tokoh::find($id);
        return view('kategori_tokoh.view',['kategori_tokoh'=>$kategori_tokoh]);
    }
    public function destroy($id): RedirectResponse
    {
        kategori_tokoh::find($id)->delete();
        return redirect(route('kategori_tokoh.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
