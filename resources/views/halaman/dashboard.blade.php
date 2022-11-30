@extends('dashboard_master')

@section('konten')
<p>halaman dashboard ini</p>
<h4>Selamat Datang <b id="username"><?php echo (Auth::user()->name) ?></b>, Anda Login sebagai <b>{{Auth::user()->level}}</b>.</h4>
<div class="container mt-5 w-50">
    <h1 class="text-center">Produk</h1>
    <a href="{{ route('addproduk') }}" class="btn btn-success mb-3">Create Data</a>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Image</th>
                <th>Nama Produk</th>
                <th>Slug</th> 
                <th>Harga</th>
                <th>stok</th>
                <th>short Des</th>
                <th>Des</th>
                <th>Action</th>
            </thead>
            <tbody>
              @foreach ($produk as $isi)
              <tr>
              <th>{{ $isi->id }}</th>
              <th>
                <img style="width: 150px; height: 130px;" src="{{ asset('img/'. $isi->image) }}">
              </th>
              <th>{{ $isi->name_produk }}</th>
              <th>{{ $isi->slug }}</th>
              <th>{{ $isi->harga }}</th>
              <th>{{ $isi->stok }}</th>
              <th>{{ $isi->short_description }}</th>
              <th>{{ $isi->description }}</th>
              <td></td>
              <td>
                  <a href="" class="btn btn-success btn-sm">Edit</a>
                  <button class="btn btn-danger btn-sm">Delet</button>
              </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>


  <div class="container mt-5 w-50">
    <h1 class="text-center">kategori</h1>
    {{-- <a href="{{ route('mahasiswa.create') }}" class="btn btn-success mb-3">Create Data</a> --}}
    <div class="card-body">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nama kategori</th>
                <th>Slug</th> 
                <th>Action</th>
            </thead>
            <tbody>
              @foreach ($kategori as $row)
              <tr>
              <th>{{ $row->id }}</th>
              <td>{{ $row->nama_kategori }}</td>
              <td>{{ $row->slug }}</td>
              <td>
                  <a href="" class="btn btn-success btn-sm">Edit</a>
                  <button class="btn btn-danger btn-sm">Delet</button>
              </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection