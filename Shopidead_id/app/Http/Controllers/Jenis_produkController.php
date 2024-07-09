<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Jenis_produk;

class Jenis_produkController extends Controller
{
    //
    public function show(){
        $list_jenis_produk = Jenis_produk::all();
        return view('jenis_produk.show',['list_jenis_produk'=>$list_jenis_produk]);
    }

    public function create()
    {
        $Jenis_produk = new Jenis_produk();
        return view('jenis_produk.form',['jenis_produk'=>$Jenis_produk]);
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
            Jenis_produk::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('jenis_produk.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new produk instance with the validated data
            Jenis_produk::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('jenis_produk.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $jenis_produk = Jenis_produk::find($id);
        return view('jenis_produk.form',['jenis_produk'=>$jenis_produk]);
    }
    public function view($id)
    {
        $jenis_produk = Jenis_produk::find($id);
        return view('jenis_produk.view',['jenis_produk'=>$jenis_produk]);
    }
    public function destroy($id): RedirectResponse
    {
        Jenis_produk::find($id)->delete();
        return redirect(route('jenis_produk.show'))->with('pesan', 'Data berhasil dihapus');
    }
}