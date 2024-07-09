<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillable = ['id', 'kode', 'nama', 'harga', 'stok', 'rating', 'min_stok', 'deskripsi','jenis_produk_id'];
    
    //disable created_at and updated_at field
    public $timestamps = false;

    public function jenis_produk(){
        return $this->belongsTo(Jenis_produk::class); //belongsTo -> one to many
    }
}