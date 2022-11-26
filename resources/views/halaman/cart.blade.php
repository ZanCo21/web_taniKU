@extends('index_master')


@section('konten') 
<div class="container">
    <div class="row product_data">
        <div class="col-md-12 mt-2 ms-2">
            <a href="{{ route('/') }}" class="btn btn-danger mt-3">Back</a>
            <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('cart') }}">cart</a></li>
                </ol>
            </nav>
        </div>
    </div>

<div class="container my-5">
    @foreach ($cartitem as $item)
    <div class="card shadow mb-4 product_data">
        <div class="card-body">
            <div class="row product_data">
                    <div class="col-md-2">
                        <img src="{{ asset('img/'.$item->products->image) }}" height="70px" alt="img">
                    </div>
                    <div class="col-md-5">
                        <h5>{{ $item->products->name_produk }}</h5>
                    </div>
                    <div class="col-md-3">
                        {{-- <h3 class="">Cart</h3> --}}
                        <br>
                        <label for="Quantity">Quantity</label>
                        <form id='myform' method='' class='quantity input-group text-center mb-3' action='#'>
                            <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                            <input type='button' value='-' class='qtyminus minus' field='quantity' />
                            <input type='text' name='quantity' value='{{ $item->prod_stok }}' class='qty' min="1"/>
                            <input type='button' value='+' class='qtyplus plus' field='quantity' /><span style="font-size: 20px;">  /Kg</span>
                        </form>
                    </div>
                    <div class="col-md-2 mt-4">
                        <button class="btn btn-danger delete-cart-item"><i class="fa-solid fa-trash"></i> Remove</button> 
                    </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection