@extends('dashboard_master')

@section('konten')
<div class="main-panel">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data User</h4>
            {{-- <p class="card-description"> Add class  --}}
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Nama</th>
                <th>Email</th> 
                <th>Level</th> 
                <th>Auth Type</th>
                <th>Bergabung</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($user as $row)
                  <tr>
                  <td>{{ $row->id }}</td>
                  <td><img style="width: 45px; height: 50px;" src="/img/1668793223971.png"></td>
              <td>{{ $row->name }}</td>
              <td>{{ $row->email }}</td>
              <td>{{ $row->level }}</td>
              <td>{{ $row->auth_type }}</td>
              <td>{{ $row->created_at }}</td>
              <td></td>
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