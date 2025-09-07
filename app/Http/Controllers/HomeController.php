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
        $kategoriAlatId = $request->get('kategori_alat_id');

        if ($kategoriAlatId) {
            $alats = Alat::where('kategori_alat_id', $kategoriAlatId)->get();
        } else {
            $alats = Alat::all();
        }

        $html = '<div class="row">';
        
        if ($alats->isEmpty()) {
            $html .= '<p class="text-center text-danger">Tidak ada alat dalam kategori ini.</p>';
        } else {
            foreach ($alats as $alat) {
                $html .= '
                <div class="col-md-3">
                    <div class="alat-card">
                        <img src="'.asset('storage/' . $alat->gambar).'" alt="'.$alat->nama.'">
                        <div class="alat-overlay">
                            <div>'.$alat->nama.'</div>
                            <div class="alat-view-icon" onclick="showImageModal(\''.asset('storage/' . $alat->gambar).'\', \''.$alat->nama.'\')">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                    </div>
                </div>';
            }
        }
        $html .= '</div>';

        return $html;
    }

    public function filterProduk(Request $request)
    {
        $kategoriProdukId = $request->get('kategori_produk_id');

        if ($kategoriProdukId) {
            $produks = Produk::where('kategori_produk_id', $kategoriProdukId)->get();
        } else {
            $produks = Produk::all();
        }

        $html = '<div class="row">';
        
        if ($produks->isEmpty()) {
            $html .= '<p class="text-center text-danger">Tidak ada produk dalam kategori ini.</p>';
        } else {
            foreach ($produks as $produk) {
                $html .= '
                <div class="col-md-3">
                    <div class="produk-card">
                        <img src="'.asset('storage/' . $produk->gambar).'" alt="'.$produk->nama.'">
                        <div class="produk-overlay">
                            <div>'.$produk->nama.'</div>
                            <div class="produk-view-icon" onclick="showImageModal(\''.asset('storage/' . $produk->gambar).'\', \''.$produk->nama.'\')">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                    </div>
                </div>';
            }
        }
        $html .= '</div>';

        return $html;
    }
}