@extends('index_master')
@section('konten')
<h2>Detail Order</h2>
<div class="card ms-2" style="width: 18rem; margin-top:15px; margin-bottom:30px; display:flex;">
    {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
    <div class="card-body">
      <h5 class="card-title" style="font-weight:bold;">Detail Order</h5>
      <h3 class="card-title" style="font-weight:bold;">*Note* Ambil data dari database yang mau di tampilin</h3>
      <p class="card-text">{{ $pesanan->barang }}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>Address :</b><br>{{ $pesanan->address }}</li>
        <li class="list-group-item"><b>Nama Layanan :</b><br>{{ $pesanan->nama_layanan }}</li>
        <li class="list-group-item"><b>Total :<br> Rp. </b>{{ $pesanan->total_harga }}</li>
        <li class="list-group-item"><b>Payment Status :</b><br>{{ $pesanan->status }}</li>
        {{-- <li class="list-group-item"><b>Status Kurir :</b><br>Pengiriman</li> --}}
        {{-- <li class="list-group-item " style="color: white;"><p class="bg-danger p-2" style="width: fit-content;">{{ $order->status }}</p></li> --}}
    </ul>
</div>
@endsection