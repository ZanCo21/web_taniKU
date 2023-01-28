@extends('index_master')
@section('konten')

  <div class="card" style="width: 30rem; align-items: center; margin-left:32%; margin-top:40px;">
        
    <h1 style="font-weight: bold; margin:10px;">Invoice</h1>
    <div class="card ms-2" style="width: 18rem; margin-bottom: 20px;">
        {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
        <div class="card-body">   
          <h5 class="card-title" style="font-weight: bold">Detail Order</h5>
          <p class="card-text">{{ $order->barang }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Address :</b><br>{{ $order->address }}</li>
            <li class="list-group-item"><b>Nama Provinsi :</b><br>{{ $order->nama_provinsi }}</li>
            <li class="list-group-item"><b>Nama Kota :</b><br>{{ $order->nama_kota }}</li>
            <li class="list-group-item"><b>Kurir :</b><br>{{ $order->kurir }}</li>
            <li class="list-group-item"><b>Kode Pos :</b><br>{{ $order->kode_pos }}</li>
            <li class="list-group-item"><b>Nama layanan :</b><br>{{ $order->nama_layanan }}</li>
            <li class="list-group-item"><b> Total : <br>Rp. </b>{{ $order->total_harga }}</li> 
            <li class="list-group-item"><b> Status :</b><br>{{ $order->status }}</li>
            {{-- <li class="list-group-item " style="color: white;"><p class="bg-danger p-2" style="width: fit-content;">{{ $order->status }}</p></li> --}}
        </ul>
    </div>
        <div class="d-grid gap-2 col-6 mx-auto" style="margin-bottom: 20px">
          <button class="btn btn-outline-secondary" type="button" onclick="window.print()">Print Invoice</button>
        </div>
  </div>
@endsection   