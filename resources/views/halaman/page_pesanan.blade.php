@extends('index_master')
@section('konten')
<div class="card" style="width: 30rem; align-items: center; margin-left:32%; margin-top:40px; display:flex;" >
    <h1 style="font-weight: bold;margin:10px;">Pesanan Saya</h1>
    @foreach ($orders as $item)        
    <div class="card ms-2" style="width: 18rem; margin-top:15px; margin-bottom:30px; display:flex;">
        {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
        <div class="card-body">
          <h5 class="card-title" style="font-weight:bold;">Detail Order</h5>
          <p class="card-text">{{ $item->barang }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Address :</b><br>{{ $item->address }}</li>
            <li class="list-group-item"><b>Nama Layanan :</b><br>{{ $item->nama_layanan }}</li>
            <li class="list-group-item"><b>Total :<br> Rp. </b>{{ $item->total_harga }}</li>
            <li class="list-group-item"><b>Payment Status :</b><br>{{ $item->status }}</li>
            <li class="list-group-item"><b>Metode Pembayaran :</b><br>{{ $item->bank }}</li>
            <li class="list-group-item"><b>No Resi :</b><br>{{ $item->no_resi }}</li>
            {{-- <li class="list-group-item"><b>Status Kurir :</b><br>Pengiriman</li> --}}
            <li class="bg-success list-group-item" style="color: white;"> Done </li>
            {{-- <li class="list-group-item " style="color: white;"><p class="bg-danger p-2" style="width: fit-content;">{{ $order->status }}</p></li> --}}
        </ul>
    </div>
    @endforeach
</div>
@endsection