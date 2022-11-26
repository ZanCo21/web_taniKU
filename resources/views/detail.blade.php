@extends('index_master')
@section('konten')    
<div class="container">
    <div class="row product_data">
        <div class="col-md-12 mt-2 ms-2">
            <a href="{{ route('/') }}" class="btn btn-danger mt-3">Back</a>
            <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('img/'. $barang->image) }}" width="300" class="card-img-top" alt="...">
                     </div>    
                        <div class="col-md-6">
                            <h2 class="">{{ $barang->name_produk }}</h2>
                            <br>
                            <h3>Harga : <span style="font-weight: 100">{{ $barang->harga }}/kg</span></h3>
                            <br>
                            <h3>Stok : <span style="font-weight: 100; font-size:px; " >{{ $barang->stok}}/kg</span></h3>
                            <br>
                            <p>{{ $barang->description }}</p>
                            <form id='myform' method='' class='quantity' action='#'>
                                <input type="hidden" value="{{ $barang->id }}" class="prod_id">
                                <input type='button' value='-' class='qtyminus minus' field='quantity' />
                                <input type='text' name='quantity' value='1' class='qty' min="1"/>
                                <input type='button' value='+' class='qtyplus plus' field='quantity' /><span style="font-size: 20px;">  /Kg</span>
                            </form>
                        </div>
                        
                    </div>
                    <div class="float-end">
                        @if (Auth::user())
                        <a href="#" class="btn btn-success addToCartBtn mt-3">Add to Cart</a>
                        @else
                        <a href="/login" class="btn btn-danger mt-3">Add to Cart</a>
                        @endif
                    </div>
            </div>
        </div>
    </div> 
    <hr>   
</div>   
@endsection
