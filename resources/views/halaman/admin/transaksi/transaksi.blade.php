@extends('dashboard_master')

@section('konten')
<div class="main-panel">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data transaksi</h4>
            {{-- <a href="{{ route('addproduk') }}" class="badge badge-outline-success">Add Produk</a> --}}
            {{-- <p class="card-description"> Add class  --}}
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                <th>Order ID</th>
                <th>Nama Pembeli</th>
                <th>Email</th> 
                <th>Barang</th>
                <th>Total Harga</th>
                <th>Bank</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($getdata_transaksi as $isi)
                  <tr>
                  <td>{{ $isi->order_id }}</td>
                  <td>{{ $isi->name }}</td>
                  <td>{{ $isi->email }}</td>
                  <td>{{ $isi->barang }}</td>
                  <td>{{ $isi->total_harga }}</td>
                  <td>{{ $isi->bank }} {{ $isi->payment_type }}</td>
                  <th>{{ $isi->status }}</th>
                  <th>{{ $isi->created_at }}</th>
              {{-- <th width="30px">{{ $isi-> }}</th> --}}
              <td>
                <a href="{{ route('detail.pesanan',$isi->id) }}" class="btn btn-success btn-sm">Detail</a>
              </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection