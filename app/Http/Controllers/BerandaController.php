<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    
    public function halamansatu(){
        return view('halaman.index');
    }

    public function halamandua(){
        return view('halaman.dashboard');
    }

    public function showberanda(){
        return view('halaman.beranda');
    }

    public function produk()
    {
        $produk = Produk::all();

        return view('halaman.admin.produk.produk', compact('produk'));
    }

    public function kategori()
    {
        $kategori = Kategori::all();

        return view('halaman.admin.kategori.kategori', compact('kategori'));

        
    }
}
