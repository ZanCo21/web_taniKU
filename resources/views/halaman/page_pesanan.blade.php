@extends('index_master')
@section('konten')

<!-- <div class="view" style="width: 20%; height: 50px; margin-top: 40px; background: #E2F1FF; border-radius: 0px 20px 20px 0px; color: blue; margin-right: 30%;"> -->
<!-- <img src="/img/clipboard.png" alt="" style="margin-top: 9px; margin-left: 40px;"> -->
<!-- </div> -->
<!-- <h5 style="font-weight: bold; margin:10px; margin-top: -36px; margin-left: 79px; color: blue;">View Order 3</h5> -->
<p style="font-weight: bold; margin-top: -45px; margin-left: 23%;">Order History</p>
<!-- <div style="width: 9px; height:300px; background-color: #4F4CFC; border-radius: 10px; margin-left: 20%; margin-top: 69px;"></div> -->
<!-- <div class="container"> -->
@foreach ($orders as $item)
<div class="wrapper">
  <div class="folderTab me-5">
    <h3>My Order</h3>
  </div>
  <div class="borderBox me-5">
    <div class="tabler">
    <!-- <div class="card col-8 col-sm-6" style="width: 35rem; margin-top: -70%; margin-bottom:30px; display: position; background-color: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"> -->
        {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
        <div class="card-body">
            <p class="card-title" style="font-weight:bold; margin-top: -20px; color: darkgrey; margin-top: 5px;">Order ID.</p>
            <p class="card-text" style="font-weight: bold; margin-top: -10px;">{{ $item->user_id}}</p>
        </div>
        <div>
            <p style="margin-left: 12px; font-weight: bold; color: grey; margin-top: -10px; font-size: 20px;">Order Items.</p>
            <p style="margin-left: 12px; font-weight: bold; margin-top: -15px; font-size: 20px;">{{ $item->barang }}</p>
            <br>
            <hr>
            <h4 style="margin-left: 12px; font-weight: bold;">Total</h4>
            <h4 style="float: right; font-weight: bold; color: green; margin-top: -35px;" class="">Rp.{{ $item->total_harga}}</h4>
        </div>
        
    </div>
    
    <div class="tabler">
      <a href="{{ route('detail.pesanan',$item->id) }}" class="edit btn-success fright" style="color: white;">Detail</a>
    
    </div> 
  </div>
</div>
@endforeach
</div>
@endsection