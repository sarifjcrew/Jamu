<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $timestamps = True;

    protected $fillable = [
        'nama produk',
        'deskripsi produk',
        'harga',
        'gambar',
        'stok'
    ];
}
