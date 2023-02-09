<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $postProduk->weight = $request->weight;
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
        $produk = Produk::find($id);
        $kategori = Kategori::all();

        return view('halaman.admin.produk.edit_produk', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $editsiswa = Produk::find($id);
        $awal = $editsiswa->image;

        $dt = [
            'name_produk'   => $request->name_produk,
                'slug'   => $request->slug,
                'harga'   => $request->harga,
                'weight'   => $request->weight,
                'short_description'   => $request->short_description,
                'description'   => $request->description,
                'stok'   => $request->stok
        ];

        if ($request->hasfile('image')) {
            Storage::delete('public/img/'.$awal);
            $request->image->move(public_path().'/img', $awal);
        }
        $editsiswa->update($dt);


        // dd($editsiswa);
        return redirect()->route('produk')->with('success','Student deleted successfully');
    }
    
    public function delete($id)
    {
        $deleteproduk = Produk::find($id);

        $deleteproduk->delete();

        return redirect()->route('produk')->with('success','Student deleted successfully');
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
