<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        
        $old_cartitems = Cart::where('user_id', Auth::id())->get();
        foreach ($old_cartitems as $item) 
        {
            if (!Produk::where('id', $item->prod_id)->where('stok', '>=', $item->prod_stok)->exists()) 
            {
                $removeItem = Cart::where('user_id', Auth::id())->where('prod_id', $item->prod_id)->first();
                $removeItem->delete();
            }
        }
        
        $cartitems = Cart::where('user_id', Auth::id())->get();

        return view('halaman.checkout', compact('cartitems'));
    }
}
