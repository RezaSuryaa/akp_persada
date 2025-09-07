<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['nama', 'gambar', 'kategori_produk_id'];

    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class, 'kategori_produk_id');
    }
}
