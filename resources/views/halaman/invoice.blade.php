@extends('index_master')
@section('konten')
{{-- <div class="" style="border: 1px solid black;">  --}}
  <a href="{{ route('/') }}" class="btn btn-danger" style="margin-left: 6%; margin-top: 3%;">Back</a> 
  <div class="" style="align-items: center; margin-left:6%; margin-right: 6%; margin-top:70px; border: 1px solid black;">  
   <br>
    <div style="margin-left: 5vw;"> 

    @if ($order->status == 'Paid')
    <h1 style="font-weight: bold;">Thanks for you order !</h1>
    @else
    <h1 style="font-weight: bold;">Your order failed !</h1>
    @endif
    <br>
    <h1 style="font-weight: bold;">E-Invoice</h1>
    <br>
    <div class="" style="margin-bottom: 20px;">
        {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
        <div class="list-group list-group-flush">
          <table style=" font-weight: bold; color: darkgrey; font-size: 18px; margin-top: 20px;">
            <thead>
              <tr>
                <td>Order ID.</td>
                <td>Order Date</td>
                @if ($order->status == 'Unpaid')
                @else
                <td>Resi NO.</td>
                @endif
                @if ($order->bank == '')
                <td>Payment</td>    
                @else
                <td>Payment</td>    
                @endif
                <td>Status</td>   
              </tr>
            </thead>
            <tbody style="color: black;">
              <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->created_at }}</td>
                @if ($order->status == 'Unpaid')
                @else
                <td>{{ $order->no_resi }}</td>
                @endif
                @if ($order->bank == '')
                <td>order failed </td>
                @else
                <td>{{ $order->bank }}</td>
                @endif
                <td>{{ $order->status }}</td>
              </tr>
            </tbody>
            
          </table>
            <br>
            <hr width="95%">
            <div>
              
            </div>
            <h5 style="margin-left: 2%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;"> Order Items.</h5><p style="margin-left: 5%; margin-top: 16px; font-weight: bold;">{{ $order->barang }}</p> 
            <h5 style="margin-left: 2%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;">Form.</h5><p style="margin-left: 5%; margin-top: 16px; font-weight: bold;">PT.Taniku Kota Depok,Jawabarat,Indonesia.</p> 
            <h5 style="margin-left: 55%; margin-top: -120px; width: 30rem; font-weight: bold; color: darkgray;">To.</h5><p style="margin-left: 55%; width: 320px; margin-top: 20px; font-weight: bold;">{{ $order->name }} {{ $order->phone}} {{ $order->address}} {{ $order->nama_kota}} {{ $order->nama_provinsi}} {{ $order->kode_pos }}</p>
            <h5 style="margin-left: 2%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;">Shipping</h5><p style="margin-left: 5%; width: 30rem; margin-top: 16px; font-weight: bold;">{{ $order->nama_layanan }}</p>
            <br>
            <hr width="95%">
            <br>
        </div>
        <div style="border: 1px solid black; width: 95%;">
            <p style="margin-left: 5%; margin-top: 20px;">Subtotal</p>
            <p style="margin-left: 85%; margin-top: -30px;">Rp.{{ $order->subtotal_produk }}</p>
            <p style="margin-left: 5%; margin-top: -28px;">Shipping</p>
            <p style="margin-left: 85%; margin-top: -33px;">Rp.{{ $order->ongkos_kirim }}</p>
            <p style="margin-left: 5%; margin-top: -25px; font-weight: bold;">Total</p>
            <p style="margin-left: 85%; color: green; font-weight: bold; margin-top: -33px;">Rp.{{ $order->total_harga }}</p>
         </div>
    </div>
        {{-- <div class="d-grid gap-2 col-3  " style="margin-bottom: 20px; background-color: #173F36; border-radius: 5px; margin-left: 15px; "> --}}
          <button class="btn btn-outline-secondary mb-4" type="button" style="color: white; background-color: #173F36; border-radius: 5px;" onclick="window.print()">Print</button>
        {{-- </div> --}}
        <br>
        {{-- <hr width="93%"> --}}
   </div>
  </div>
{{-- </div> --}}
@endsection   