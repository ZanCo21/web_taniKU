<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Mail\OrderEmail;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        $order = Cart::where('user_id', Auth::id())->delete();
        // $order = Order::where('user_id', Auth::id())->get();
        // $resi = 'IDN';


        // dd($request->all());
        $order = new Order();
        $order->user_id = Auth::id();
        $order->no_resi = 'IDN-'.random_int(100000, 999999);
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->nama_provinsi = $request->nama_provinsi;
        $order->nama_kota = $request->nama_kota;
        $order->kurir = $request->kurir;
        $order->nama_layanan = $request->nama_layanan;
        $order->kode_pos = $request->kode_pos;
        $order->barang = $request->barang;
        $order->ongkos_kirim = $request->ongkos_kirim;
        $order->weight = $request->weight;
        $order->subtotal_produk = $request->sub_produk;
        $order->total_harga = $request->harga_total;
        $order->save();

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $request->harga_total,
            ),
            'customer_details' => array(
                'user_id' => Auth::id(),
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ),
        );

        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);

        return view('pengguna.pesanan', compact('snapToken','order'));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);

        // cek hash sudah sesuai dengan data signature key yg di kirim midtrabs
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture')
            {
                $order = Order::find($request->order_id);
                $order->update(['status' => 'Paid']);
                $order->update(['bank' => $request->bank]);
                $order->update(['payment_type' => $request->payment_type]);
                $order->update(['order_id' => $request->order_id]);
                Mail::to($order->email)->send(new OrderEmail($order));
            }
        }
    }

    public function invoice($id)
    {
        $order = Order::find($id);

        if($order->status == 'Unpaid'){
            Mail::to($order->email)->send(new SendEmail($order));
        }
        
        return view('halaman.invoice', compact('order'));
    }
}
