<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_produk extends Model
{
    use HasFactory;

    protected $table = 'jenis_produk';
    protected $fillable = ['id', 'nama'];

    public $timestamps = false;

    
}