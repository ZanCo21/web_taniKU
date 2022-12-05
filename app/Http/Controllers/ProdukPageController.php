<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::all();
        $kategori = Kategori::all();
        
        return view('halaman.index',['produks' => $produks, 'kategori'=>$kategori ], compact('produks', 'kategori'));
    }

    // public function artikel_kategori(Kategori $kategori)
    // {
    //    $produks = $kategori->Produk()->get();
    //    $kategori = Kategori::all();
       
    //    return view('halaman.produk',['produks' => $produks, 'kategori'=>$kategori ], compact('produks', 'kategori'));

    // }

    public function showKategori($slug)
    {
        
      
        if (Kategori::where('slug', $slug)) {
            $kategori = Kategori::where('slug', $slug)->first();
            $products = Produk::where('slug', $kategori->slug)->where('status_slug', '1')->get();
            return view('produk.kategori', compact('kategori','products'));
        }else{
            return $this->index();
        }

    }

    public function detailproduk($id){
        $produkss = Produk::where('id', $id)->first();
        // d

        return view('produk.detail', compact('produkss'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
