<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\KategoriAlat;
use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $kategorisAlat = KategoriAlat::all();
        $kategorisProduk = KategoriProduk::all();

        $kategoriAlatId = $request->get('kategori_alat_id');
        $kategoriProdukId = $request->get('kategori_produk_id');

        // Query untuk alat
        if ($kategoriAlatId) {
            $alats = Alat::where('kategori_alat_id', $kategoriAlatId)->get();
        } else {
            $alats = Alat::all();
        }

        // Query untuk produk
        if ($kategoriProdukId) {
            $produks = Produk::where('kategori_produk_id', $kategoriProdukId)->get();
        } else {
            $produks = Produk::all();
        }

        return view('home', compact(
            'alats',
            'kategorisAlat',
            'kategoriAlatId',
            'produks',
            'kategorisProduk',
            'kategoriProdukId'
        ));
    }

    public function filterAlat(Request $request)
    {
        $kategoriId = $request->get('kategori_alat_id');

        $alats = Alat::when($kategoriId && $kategoriId != 0, function ($query) use ($kategoriId) {
            return $query->where('kategori_alat_id', $kategoriId);
        })->get();

        return view('partials.alat_list', compact('alats'))->render();
    }


    public function filterProduk(Request $request)
    {
        $kategoriId = $request->get('kategori_produk_id');

        $produks = Produk::when($kategoriId && $kategoriId != 0, function ($query) use ($kategoriId) {
            return $query->where('kategori_produk_id', $kategoriId);
        })->get();

        return view('partials.produk_list', compact('produks'))->render();
    }

}