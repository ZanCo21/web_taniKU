@extends('dashboard_master')

@section('konten')
<div class="main-panel">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Kategori</h4>
            <a href="" class="badge badge-outline-success">Add kategori</a>
            {{-- <p class="card-description"> Add class  --}}
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                <th>ID</th>
                <th>Nama kategori</th>
                <th>Slug</th> 
                <th>Action</th>
                  </tr>
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
        </div>
      </div>
    </div>

    
@endsection