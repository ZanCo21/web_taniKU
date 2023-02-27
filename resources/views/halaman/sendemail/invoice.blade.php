<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Taniku</title>
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="/styledashboard/index.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
        <script type="text/javascript"
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{config('midtrans.client_key')}}"></script>
      <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
</head>
<body>

<div class="" style="min-height: 100vh; display: flex; flex-direction: column; justify-content: space-between;">
    <div>
      <div class="">
        <div>
          <div class="col-md-12">
{{-- <div class="" style="border: 1px solid black;">  --}}
  {{-- <a href="{{ route('/') }}" class="btn btn-danger" style="margin-left: 6%; margin-top: 3%;">Back</a>  --}}
  <div class="" style="align-items: center; margin-left:6%; margin-right: 6%; padding-right: 5%; margin-top:70px; border: 1px solid black;">  
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
            <hr width="93%">
            <div>
              
            </div>
            <h5 style="margin-left: 2%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;"> Order Items.</h5><p style="margin-left: 5%; margin-top: 16px; font-weight: bold;">{{ $order->barang }}</p> 
            <h5 style="margin-left: 2%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;">Form.</h5><p style="margin-left: 5%; margin-top: 16px; font-weight: bold;">PT.Taniku Kota Depok,Jawabarat,Indonesia.</p> 
            <h5 style="margin-left: 2%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;">To.</h5><p style="margin-left: 5%; width: 320px; margin-top: 16px; font-weight: bold;">{{ $order->name }} {{ $order->phone}} {{ $order->address}} {{ $order->nama_kota}} {{ $order->nama_provinsi}} {{ $order->kode_pos }}</p>
            <h5 style="margin-left: 2%; margin-top: 20px; width: 30rem; font-weight: bold; color: darkgray;">Shipping</h5><p style="margin-left: 5%; width: 30rem; margin-top: 16px; font-weight: bold;">{{ $order->nama_layanan }}</p>
            <br>
            <hr width="93%">
            <br>
        </div>
        <div style="border: 1px solid black; width: 93%;">
            <p style="margin-left: 5%; margin-top: 20px;">Subtotal</p>
            <p style="margin-left: 88%; margin-top: -30px;">Rp.{{ $order->subtotal_produk }}</p>
            <p style="margin-left: 5%; margin-top: -28px;">Shipping</p>
            <p style="margin-left: 88%; margin-top: -33px;">Rp.{{ $order->ongkos_kirim }}</p>
            <p style="margin-left: 5%; margin-top: -25px; font-weight: bold;">Total</p>
            <p style="margin-left: 88%; color: green; font-weight: bold; margin-top: -33px;">Rp.{{ $order->total_harga }}</p>
         </div>
    </div>
        {{-- <div class="d-grid gap-2 col-3  " style="margin-bottom: 20px; background-color: #173F36; border-radius: 5px; margin-left: 15px; "> --}}
          {{-- <button class="btn btn-outline-secondary" type="button" style="color: white; background-color: #173F36; border-radius: 5px;" onclick="window.print()">Print</button> --}}
        {{-- </div> --}}
        <br>
        {{-- <hr width="93%"> --}}
   </div>
  </div>
{{-- </div> --}}
          </div>
        </div>        
      </div>
      </div>
          
    </div>

    {{-- fotter --}}
</div>


    <script src="https://kit.fontawesome.com/09294afb62.js" crossorigin="anonymous"></script>
    <script src="../asset/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>