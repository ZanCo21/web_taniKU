<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['produk'] = Produk::orderBy('name_produk','DESC')->paginate(10);
        $kategori = Kategori::all();
        return view('produk.form', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::orderBy('name','ASC')->get();
        // d

        $this->data['kategori'] = $kategori->toArray();
        $this->data['produk'] = null;

        return view('produk.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $img = $request->image;
        $namaFile =  time().rand(100,999).".".$img->getClientOriginalExtension();

        $postProduk = new Produk;
        $postProduk->name_produk = $request->name_produk;
        $postProduk->slug = $request->slug;
        $postProduk->harga = $request->harga;
        $postProduk->image = $namaFile;
        $postProduk->short_description = $request->short_description;
        $postProduk->description = $request->description;
        $postProduk->stok = $request->stok;

        $img->move(public_path().'/img', $namaFile);
        $postProduk->save();

        return redirect('dashboard');
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
