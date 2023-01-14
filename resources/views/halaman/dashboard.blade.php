@extends('dashboard_master')

@section('konten')
  <div class="container mt-5 w-50">
    <h1 class="text-center mt-5 ">kategori</h1>
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