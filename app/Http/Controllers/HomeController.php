<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        $kategori = Kategori::all();
        return view('halaman.index', compact('produks', 'kategori'));

    }

    public function showprofil(){
        return view('halaman.profil');
    }

    public function showabout(){
        return view('halaman.about');
    }
}
