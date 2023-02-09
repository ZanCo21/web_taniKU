<?php

namespace App\Http\Controllers;

use App\Mail\OrderEmail;
use App\Models\User;
use App\Models\Order;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::count();
        $produk = Produk::count();
        $transaksi = Order::where('status','Paid')->count();
        $user = User::where('level', 'user')->count();

        return view('halaman.dashboard', compact('kategori', 'produk', 'transaksi', 'user'));

        // $kategori = Kategori::select('')->get();
        // return view('halaman.dashboard', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kategori = Kategori::all();

        return view('halaman.admin.kategori.addkategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategori::create($request->all());
        // Mail::to('fauzan.alghifari21@gmail.com')->send(new OrderEmail());

        return redirect('/dashboard/kategori');
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
        $delete = Kategori::find($id);

        $delete->delete();

        return redirect('/dashboard/kategori');
    }
}
