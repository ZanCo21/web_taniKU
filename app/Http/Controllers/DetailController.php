<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function detailproduk($id){
        $barang = Produk::where('id', $id)->first();
        $barangs = Produk::select([
                                    "stok"
                                    ])->get();

        return view('detail', compact('barang', 'barangs'));
    }
}
