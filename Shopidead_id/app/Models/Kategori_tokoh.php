<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_tokoh extends Model
{
    use HasFactory;

    protected $table = 'kategori_tokoh';
    protected $fillable = ['id', 'nama'];

    public $timestamps = false;
}