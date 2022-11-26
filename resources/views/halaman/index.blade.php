@extends('index_master')

@section('konten')    
    {{-- @if (Auth::user())
    <h4>Selamat Datang <b id="username">{{Auth::user()->name}}</b></h4>
    @endif --}}
 <div class="d-flex banner">   
        <!-- img slider start -->
    <div class="iklanlarge">   
        <div class="slider">
            <div class="slides">
                <!-- radio button start -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!-- radio button end -->
                <!-- slide image start -->
                <div class="slide first">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F1.bp.blogspot.com%2F-OdKOq4MV3bA%2FXlpHt3WQPOI%2FAAAAAAAAAd8%2FFM4oMx5NIkQO5BukC4VeVJmCpIKXdS2lgCLcBGAsYHQ%2Fs1600%2FGettyImages-629562295-937x625.jpg&f=1&nofb=1&ipt=ac9306f03b7626954cf43f6a2eea1a0092cc8953c0617a34d1efe8d9709c3a63&ipo=images" alt="">
                </div>
                <div class="slide">
                    <img src="https://media.istockphoto.com/id/95380001/id/foto/seorang-wanita-bekerja-di-memotong-beras.jpg?s=612x612&w=0&k=20&c=beKjC3CAL4VfWg06ujTxK_Q9ZrSzxjwuBmsbmJsS5h8=" alt="petani">
                </div>
                <div class="slide">
                    <img src="https://media.istockphoto.com/id/1366791288/id/foto/di-rumah-kaca-seorang-petani-muda-asia-yang-cerdas-menggunakan-tablet-untuk-memantau-kualitas.jpg?s=612x612&w=0&k=20&c=nQvnIu7XryJ6zQybVFXEGsjPylw9NeqhMWnZuXh_kck=" alt="petani">
                </div>
                <div class="slide">
                    <img src="https://media.istockphoto.com/id/1345932975/id/foto/petani-pasangan-asia-memanen-sayuran-hidroponik-segar-di-perkebunan-rumah-kaca.jpg?s=612x612&w=0&k=20&c=TfG78nd78RSmzHfwJCI7e14BtLp8ncAwVwLyQcC6RrY=" alt="petani">
                </div>
                <!-- slide image end -->
                <!-- automatic navigations start -->
                <div class="navitagion-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <!-- automatic navigations end -->
            </div>
        </div>
    </div> 

    <div class="flex-column">
        <div class="iklan">
        <img src="https://primafreshmart.com/pub/media/banner/tmp/images/Banner_promo_November_PFM_desktop_1_.jpg" class="iklan1" alt="iklan 1">
        </div>

        <div class="iklan" style="margin-top: 14%;">
            <img src="https://primafreshmart.com/pub/media/banner/tmp/images/Banner_promo_November_PFM_desktop_1_.jpg" class="iklan1" alt="iklan 1">
        </div>
    </div>  
 </div>


<div class="container mt-5 d-flex div1">
  <div class="flex-column card col-lg-2 ps-4 pt-2">
    <h3>kategori</h3>
      @foreach ($kategori as $item)
      <br>
      <a href="{{ route('artikel.kategori',$item->slug) }}"  class="kategori"><i class="fa-sharp fa-solid fa-box"></i>  {{$item->nama_kategori}}</a>
      @endforeach
  </div>
  <div class="row justify-content-start ms-4">
            @foreach ($produks as $isi)
                    <div class="card col-md-3 ms-2 mb-2" style="width: 18rem;">
                        <a href="{{ route('detail.produk',$isi->id) }}">
                        <img src="{{ asset('img/'. $isi->image) }}" height="180px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $isi->name_produk }}</h5>
                            <strong style="font-size: 20px;">IDR :</strong>
                            <span style="font-weig  ht: 100; font-size: 20px" class="ms-2">{{ $isi->harga }}/kg</span>
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
@endsection