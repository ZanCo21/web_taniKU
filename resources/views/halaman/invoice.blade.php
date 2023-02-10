@extends('index_master')
@section('konten')

  <div class="" style="width: 30rem; align-items: center; margin-left:6%; margin-top:70px;">
    <button type="button">Back</button>
        
    <h1 style="font-weight: bold;">Thanks for you order !</h1>
    <br>
    <h1 style="font-weight: bold;">E Invoice</h1>
    <div class="ms-2" style="width: 18rem; margin-bottom: 20px;">
        {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
        <div class="card-body">   
          <h5 class="card-title" style="font-weight: bold; color: darkgrey;">Order ID.</h5>
          <p class="card-text" style="font-weight: bold;">{{ $order->id }}</p>
        </div>
        <div class="list-group list-group-flush">
            <h5 style="margin-left: 70%; margin-top: -73px; width: 30rem; font-weight: bold; color: darkgray;">Order Date </h5><p style="font-weight: bold; margin-left: 70%; width: 30rem;">{{ $order->created_at }}</p>
            <h5 style="margin-left: 160%; margin-top: -74px; width: 30rem; font-weight: bold; color: darkgray;">Resi NO. </h5><p style="font-weight: bold; margin-left: 160%; width: 30rem;">{{ $order->no_resi }}</p>
            <h5 style="margin-left: 220%; margin-top: -75px; width: 30rem; font-weight: bold; color: darkgray;">Payment</h5><p  style="font-weight: bold; margin-left: 220%; width: 30rem;">{{ $order->bank }}</p>
            <br>
            <hr width="1110px">
            <h5 style="margin-left: 5%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;"> Order Items.</h5><input type="text" placeholder="{{ $order->barang }}" style="margin-left: 5%; border-radius: 4px; border: 1px solid #000000">
            <h5 style="margin-left: 5%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;">From.</h5><input type="text" placeholder="PT. TanikuKota Depok Jawabarat , Indonesia" style="margin-left: 5%; border-radius: 4px; border: 1px solid #000000; height: 120px; width: 130%;">
            <h5 style="margin-left: 200%; margin-top: -150px; width: 30rem; font-weight: bold; color: darkgray;">To.</h5><input type="text" placeholder="{{ $order->name }} {{ $order->phone}} {{ $order->address}} {{ $order->nama_kota}} {{ $order->nama_provinsi}} {{ $order->kode_pos }}" style="margin-left: 200%; border-radius: 4px; border: 1px solid #000000; height: 120px; width: 190%;">
            <h5 style="margin-left: 5%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;">Shipping</h5><input type="text" placeholder="{{ $order->nama_layanan }}" style="margin-left: 5%; border-radius: 4px; border: 1px solid #000000; width: 385%;">
            <br>
            <hr width="1110px" >
            <br>
            <p style="margin-left: 5%;">Subtotal</p>
            <p style="margin-left: 370%; margin-top: -30px;">Rp.{{ $order->total_harga }}</p>
            <p style="margin-left: 5%; margin-top: -20px;">Shipping</p>
            <p style="margin-left: 370%; margin-top: -30px;">Rp.{{ $order->total_harga }}</p>
            <p style="margin-left: 5%; margin-top: -20px; font-weight: bold;">Total</p>
            <p style="margin-left: 370%; color: green; font-weight: bold; margin-top: -30px;">Rp.{{ $order->total_harga }}</p>
        </div>
    </div>
        <div class="d-grid gap-2 col-3  " style="margin-bottom: 20px; background-color: #173F36; border-radius: 5px; margin-left: 20px; ">
          <button class="btn btn-outline-secondary" type="button" style="color: white;" onclick="window.print()">Print</button>
        </div>
        <br>
        <hr width="1110px">
  </div>
@endsection   