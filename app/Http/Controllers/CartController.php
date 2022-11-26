<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Cart;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_stok = $request->input('product_stok');

        if(Auth::check())
        {
            $prod_check = Produk::where('id',$product_id)->first();

            if($prod_check)
            {
                if(Cart::where('prod_id',$product_id)->where('user_id', Auth::id())->exists())
                {
                    return response()->json(['status' => $prod_check->name_produk. " Already Added to cart"]);
                }
                else
                {

                    $cartItem = new Cart();
                    $cartItem->prod_id = $product_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->prod_stok = $product_stok;
                    $cartItem->save();
    
                    return response()->json(['status' => $prod_check->name. " Added to cart"]);
                }
            }
        }
        else{
            return response()->json(['status' => "Login to Continue"]);
        }
    }

    public function viewcart()
    {
        $cartitem = Cart::where('user_id', Auth::id())->get();

        return view('halaman.cart', compact('cartitem'));
    }

    public function deletecart(Request $request)
    {
        if(auth::check())
        {
            $prod_id = $request->input('prod_id');
            if(Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists())
            {
                $cartItem = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status' => "Product Deleted Successfully"]);
            }
        }
        else{
            return response()->json(['status' => "Login to Continue"]);
        }
    }
}
