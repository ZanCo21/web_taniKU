@extends('index_master')

@section('konten')    
    {{-- @if (Auth::user())
    <h4>Selamat Datang <b id="username">{{Auth::user()->name}}</b></h4>
    @endif --}}
<div class="gambar">
<div class="text-hero mt-5">
    <h2>Fresh Online <br> Store Shopping</h2>
    <br>
    <br>
    <a href="#" style="background-color: whitesmoke;" class="btn addToCartBtn mt-3">View Product</a>
</div>
<img src="img/buahh.jpg" alt="">
</div>

<h4 class="mt-5" style="margin-left: 5vw; font-weight: bold;">Categories</h4>
<div class="d-flex" style="margin-left: 5vw;">
     @foreach ($kategori as $item)
     <div style="background-image: url('img/kategoriindex.png'); background-position: center; background-repeat: no-repeat; padding: 20px; height: 140px; margin-right: 30px; border-radius: 10px;" class="mt-2">
         <a href="{{ route('artikel.kategori',$item->slug) }}"  class="kategori" style="color: white; font-weight: bold;"> {{$item->nama_kategori}}</a>
     </div>
      @endforeach
</div>

<h4 class="mt-5" style="margin-left: 5vw; font-weight: bold;">Flash Sale</h4>
<div class="container ms-5">
<div class="container d-flex div1">
  <!-- <div class="flex-column card col-lg-2 ps-4 pt-2"> -->
    <!-- <h3>kategori</h3> -->

  <!-- </div> -->
<!-- fs -->
<div class="row justify-content-start">
            @foreach ($flashsale as $isi)
                    <div class="card col-md-3 ms-2 mb-4 mt-4" style="width: 16.4rem; border-radius: 10px; border-color: black;">
                        <a href="{{ route('detail.produk',$isi->id) }}">
                        <img src="{{ asset('img/'. $isi->image) }}" height="180px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $isi->name_produk }}</h5>
                            <strong style="font-size: 20px;">IDR :</strong>
                            <span style="font-weight: 100; font-size: 20px" class="ms-2">{{ $isi->harga }}/kg</span>
                            <p class="card-text mt-2">{{ $isi->short_description }}</p>
                            </a>
                            @if (Auth::user())
                            <a href="#" class="btn btn-success addToCartBtn mt-3">Add to Cart</a>
                            @else
                            <a href="/login" class="btn btn-danger mt-3">Add to Cart</a>
                            @endif
                        </div>
                    </div>
            @endforeach
        </div>
    </div>

</div>
</div>
<center>
<div style="position: absolute; z-index: 7; text-align: center; margin-left: 37%; margin-top: 140px; column-gap: 30px;">
    <h3 style="color: white; font-weight:bolder;">Get 5% Cash Back</h3>
    <br>
    <button class="mb-5 mt-4 ps-5 pe-5 btn btn-light">Get</button>
</div>
</center>
<div class="mt-4 mb-4">
    <img src="img/carddisc.png" alt="" style=" margin-left: 5.4%; width: 85%;">

</div>    


<div class="container ms-5">
<h4 class="mt-5 mb-4" style="font-weight: bold;">Best Product For You</h4>
<div class="container d-flex div1">
<div class="row justify-content-start">
                @foreach ($produks as $isi)
                        <div class="card col-md-4 ms-2 mb-4" style="width: 16.4rem; border-radius: 10px; border-color: black;">
                            <a href="{{ route('detail.produk',$isi->id) }}">
                            <img src="{{ asset('img/'. $isi->image) }}" height="180px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $isi->name_produk }}</h5>
                                <strong style="font-size: 20px;">IDR :</strong>
                                <span style="font-weight: 100; font-size: 20px" class="ms-2">{{ $isi->harga }}/kg</span>
                                <p class="card-text mt-2">{{ $isi->short_description }}</p>
                                </a>
                                @if (Auth::user())
                                <a href="#" class="btn btn-success addToCartBtn mt-3">Add to Cart</a>
                                @else
                                <a href="/login" class="btn btn-danger mt-3">Add to Cart</a>
                                @endif
                            </div>
                        </div>
                @endforeach
        </div>
</div>
</div>

<div class="p-3 ">
    <h4 class="mb-2 mt-2 ms-5" style="font-weight: bold; margin-left: 5vw;">Service to help you shop</h4>

</div>
<div class="cardd" style="display: flex;">
<div class="card1" style="width: 330px; height: 378px; background-color:#9AC9D1; align-items:center; margin-left:5.4%;">
    <div class="card-customerservice" style="margin-left:5.4%; padding-top:15px;">
        <h4 style="font-weight: bold;">Frequently asked question</h4>
        <p>safe & reliable shopping in our store</p>
    </div>
    <div class="gambar2" style="border-radius: 10px;">
        <img style="width: 330px; height: 207px; margin-top: 70px;" src="img/cs.jpg" class="" alt="">
    </div>
</div>

<div class="card2" style="width: 330px; height: 378px; background-color:#FFC61D; align-items:center; margin-left:5.4%;">
    <div class="card-customerservice" style="margin-left:5.4%; padding-top:15px;">
        <h4 style="font-weight: bold;">Online payment <br> method</h4>
        <p>safe & reliable shopping in our store</p>
    </div>
    <div class="gambar3" style="border-radius: 10px;">
        <img style="width: 330px; height: 207px; margin-top: 70px;" src="img/delivery.webp" class="" alt="">
    </div>
</div>

<div class="card3" style="width: 330px; height: 378px; background-color:#FFC61D; align-items:center; margin-left:5.4%;">
    <div class="card-customerservice" style="margin-left:5.4%; padding-top:15px;">
        <h4 style="font-weight: bold;">Home delivery <br> option</h4>
        <p>safe & reliable shopping in our store</p>
    </div>
    <div class="gambar4" style="border-radius: 10px;">
        <img style="width: 330px; height: 207px; margin-top: 70px;" src="img/penyerahan.jpg" class="" alt="">
    </div>
</div>

</div>

@endsection