@extends('index_master')
@section('konten')
<div class="col-md-12 mt-2 ms-2">
    <a href="{{ url('cart') }}" class="btn btn-danger mt-3">Back</a>
    <nav aria-label="breadcrumb" class="mt-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Cart</li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6>Form Data</h6>
                    <hr>
                    <label>Name</label>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h6>Produk Order</h6>
                    <hr>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Harga</th>
                        </thead>
                        <tbody>
                            @php $total = 0; @endphp
                            @foreach ($cartitems as $item)
                            <tr>
                                <td> {{ $item->products->name_produk }}</td>
                                <td> {{ $item->prod_stok }}</td>
                                <td> {{ $item->products->harga }}</td>
                            </tr>
                            @php $total += $item->products->harga * $item->prod_stok; @endphp
                            @endforeach
                        </tbody>
                    </table>

                    <div class="card-footer">
                        <h6><strong>TOTAL PRICE : {{ $total }}</strong></h6>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary w-100">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection