<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $fillable = ['nama', 'gambar', 'kategori_alat_id'];

    public function kategori_alat()
    {
        return $this->belongsTo(KategoriAlat::class, 'kategori_alat_id');
    }
}
