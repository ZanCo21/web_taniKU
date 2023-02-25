@extends('index_master')
@section('konten')
<div class="" style="border: 1px solid black;"> 
  <div class="" style="width: 30rem; align-items: center; margin-left:6%; margin-top:70px;">  
  <a href="{{ route('/') }}" class="btn btn-danger" style="margin-top: -60px;">Back</a> 
    <h1 style="font-weight: bold;">Thanks for you order !</h1>
    <br>
    <h1 style="font-weight: bold;">E Invoice</h1>
    <div class="ms-2" style="width: 18rem; margin-bottom: 20px;">
        {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
        <div class="list-group list-group-flush">
          <table style="width: 40rem; font-weight: bold; color: darkgrey; font-size: 18px; margin-top: 20px;">
            <thead>
              <tr>
               <td>Order ID.</td>
              <td>Order Date</td>
              <td>Resi NO.</td>
              <td>Payment</td>    
              </tr>
            </thead>
            <tbody style="color: black;">
              <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->created_at }}</td>
                <td>{{ $order->no_resi }}</td>
                <td>{{ $order->bank }}</td>
              </tr>
            </tbody>
            
          </table>
            <br>
            <hr width="1110px">
            <h5 style="margin-left: 5%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;"> Order Items.</h5><p style="margin-left: 15%; margin-top: 20px; font-weight: bold;">{{ $order->barang }}</p> 
            <h5 style="margin-left: 5%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;">From.</h5><p style="margin-left: 15%; margin-top: 20px; font-weight: bold;">PT. TanikuKota Depok Jawabarat , Indonesia</p> 
            <h5 style="margin-left: 200%; margin-top: -120px; width: 30rem; font-weight: bold; color: darkgray;">To.</h5><p style="margin-left: 600px; width: 30rem; margin-top: 20px; font-weight: bold;">{{ $order->name }} {{ $order->phone}} {{ $order->address}} {{ $order->nama_kota}} {{ $order->nama_provinsi}} {{ $order->kode_pos }}</p>
            <h5 style="margin-left: 5%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;">Shipping</h5><p style="margin-left: 15%; width: 30rem; margin-top: 20px; font-weight: bold;">{{ $order->nama_layanan }}</p>
            <br>
            <hr width="1110px" >
            <br>
        </div>
        <div style="border: 1px solid black; width:386%;">
            <p style="margin-left: 5%; margin-top: 20px;">Subtotal</p>
            <p style="margin-left: 88%; margin-top: -30px;">Rp.{{ $order->total_harga }}</p>
            <p style="margin-left: 5%; margin-top: -28px;">Shipping</p>
            <p style="margin-left: 88%; margin-top: -33px;">Rp.{{ $order->total_harga }}</p>
            <p style="margin-left: 5%; margin-top: -25px; font-weight: bold;">Total</p>
            <p style="margin-left: 88%; color: green; font-weight: bold; margin-top: -33px;">Rp.{{ $order->total_harga }}</p>
         </div>
    </div>
        <div class="d-grid gap-2 col-3  " style="margin-bottom: 20px; background-color: #173F36; border-radius: 5px; margin-left: 20px; ">
          <button class="btn btn-outline-secondary" type="button" style="color: white;" onclick="window.print()">Print</button>
        </div>
        <br>
        <hr width="1110px">
  </div>
</div>
@endsection   