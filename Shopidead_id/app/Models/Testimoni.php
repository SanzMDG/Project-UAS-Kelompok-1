<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimoni';
    protected $fillable = ['id', 'tanggal', 'nama_tokoh', 'komentar', 'rating', 'produk_id', 'kategori_tokoh_id'];
    
    //disable created_at and updated_at field
    public $timestamps = false;

    public function produk(){
        return $this->belongsTo(Produk::class); //belongsTo -> one to many
    }

    public function kategori_tokoh(){
        return $this->belongsTo(Kategori_tokoh::class); //belongsTo -> one to many
    }
}
