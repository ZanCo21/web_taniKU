@extends('dashboard_master')

@section('konten')
<div class="main-panel">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data produk</h4>
            <a href="{{ route('addproduk') }}" class="badge badge-outline-success">Add Produk</a>
            {{-- <p class="card-description"> Add class  --}}
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Nama Produk</th>
                <th>Slug</th> 
                <th>Harga</th>
                <th>stok</th>
                <th>short Des</th>
                {{-- <th>Des</th> --}}
                <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($produk as $isi)
                  <tr>
                  <th>{{ $isi->id }}</th>
              <th>
                <img style="width: 60px; height: 60px;" src="{{ asset('img/'. $isi->image) }}">
              </th>
              <th>{{ $isi->name_produk }}</th>
              <th>{{ $isi->slug }}</th>
              <th>{{ $isi->harga }}</th>
              <th>{{ $isi->stok }}</th>
              <th width="30px">{{ $isi->short_description }}</th>
              {{-- <th>{{ $isi->description }}</th> --}}
              <td></td>
              <td>
                  <a href="{{ route('get.produk',$isi->id ) }}" class="btn btn-success btn-sm">Edit</a>
                  {{-- <button class="btn btn-danger btn-sm">Delet</button> --}}
                  <a href="/delete/produk/{{ $isi->id }}" class="badge badge-outline-danger">Delete</a>
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