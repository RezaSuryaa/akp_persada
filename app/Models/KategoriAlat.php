<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriAlat extends Model
{
    protected $fillable = ['nama'];
    
    public function alats()
    {
        return $this->hasMany(Alat::class, 'kategori_alat_id');
    }
}
