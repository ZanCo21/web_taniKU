@extends('index_master')
@section('konten') 
  <div class="container mt-5 d-flex div1">
      <div class="flex-column card col-lg-2 ps-4 pt-2">
        {{-- @foreach ($kategori as $item)
          <a href="{{ route('artikel.kategori'.$item->slug) }}"  class="ms-4" style="font-size: 20px;">{{$item->nama_kategori}}</a>
        @endforeach --}}
        <a href="{{ route('/') }}"><i class="fa-sharp fa-solid fa-box"></i>Semua Produk</a>
      </div>
      
      <div class="row justify-content-start ms-4">
          <h2 class="text-start">{{ $kategori->nama_kategori }}</h2>
            @foreach ($products as $isi)

            <div class="col-md-4 ms-2 mb-2" style="width: 18rem; border: 1px solid black; border-radius: 10px;">
                        <a href="{{ route('detail.produk',$isi->id) }}">
                        <img src="{{ asset('img/'. $isi->image) }}" height="180px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $isi->name_produk }}</h5>
                            <strong style="font-size: 20px;">IDR :</strong>
                            <span style="font-weight: 100; font-size: 20px" class="ms-2">{{ $isi->harga }}/kg</span>
                            <p class="card-text mt-2">{{ $isi->short_description }}</p>
                            </a>
                            @if (Auth::user())
                            <a href="#" class="btn btn-success addToCartBtn mt-3">Checkout</a>
                            @else
                            <a href="#" class="btn btn-danger mt-3">Checkout</a>
                            @endif
                        </div>
            </div>
            @endforeach
        </div>
  </div>
@endsection