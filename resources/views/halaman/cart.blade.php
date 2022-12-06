@extends('index_master')


@section('konten') 
<div class="container ms-5">
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
    @php $total = 0; @endphp
    @foreach ($cartitem as $item)
    <div class="card shadow mb-4 product_data">
        <div class="card-body">
            <div class="row product_data">
                    <div class="col-md-2">
                        <img src="{{ asset('img/'.$item->products->image) }}" height="70px" alt="img">
                        <h5>RP :{{ $item->products->harga }}</h5>

                    </div>
                    <div class="col-md-5">
                        <h5>{{ $item->products->name_produk }}</h5>
                    </div>
                    {{-- <div class="col-md-5">
                    </div> --}}
                    <div class="col-md-3">
                        {{-- <h3 class="">Cart</h3> --}}
                        <br>
                        @if ($item->products->stok >= $item->prod_stok)                             
                        <label for="Quantity">Quantity</label>
                        <form id='myform' method='' class='quantity input-group text-center mb-3' action='#'>
                            <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">  
                            <input type='button' value='-' class='qtyminus changeQuantity minus decrement-btn' field='quantity' />
                            <input type='text' name='quantity' value='{{ $item->prod_stok }}' class='qty' min="1"/>
                            <input type='button' value='+' class='qtyplus changeQuantity plus increment-btn' field='quantity' /><span style="font-size: 20px;">  /Kg</span>
                            @php $total += $item->products->harga * $item->prod_stok; @endphp
                            @else
                             <h6>Out of Stock</h6>
                            @endif
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
<div class="float-end pe-2 pt-2">
    @if (Auth::user())
    <a href="{{ url('checkout') }}" class="btn btn-success ">proceed to Checkout</a>
    @else
    <a href="/login" class="btn btn-danger">proceed to Checkout</a>
    @endif
</div>
<div class="card-footer">
    <h4>TOTAL PRICE : {{ $total }}</strong></h4>
</div>
@endsection