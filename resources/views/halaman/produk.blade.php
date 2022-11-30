<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style>
        a{
          text-decoration: none;
          color: black;
        }
        a:hover{
          color: green;
        }
      </style>
</head>
<body>
    
    
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: green; color: white;">
        <div class="container-fluid">
          <a class="navbar-brand ms-5" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="float-end me-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('/produkpage') }}">Produk</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Akun
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @if (Auth::user())
                  <li class="dropdown-item"><a>{{Auth::user()->name}}</a></li>
                  <form action="" method="post" class="d-flex">
                  {{-- <li class="dropdown-item" >Logout</li> --}}
                  <li class="dropdown-item" ><a href="{{Route('logout')}}"> Log Out</a></li>
                  </form>
                  @else
                  {{-- <li class="dropdown-item" >Login</li> --}}
                  <li class="dropdown-item" ><a href="{{Route('login')}}">Sign in</a></li>
                  @endif
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<div class="container mt-5  d-flex">
  <div class="width-content d-flex flex-column">
      @foreach ($kategori as $item)
      <br>
      <a href="{{ route('artikel.kategori',$item->slug) }}"  class="me-4" style="font-size: 20px;">{{$item->nama_kategori}}</a>
      @endforeach
  </div>
  <div class="row justify-content-center">
            @foreach ($produks as $isi)
            <div class="col-md-4 mt-4 ms-4" style="width: 20rem;">
                    <div class="card float-end" style="width: 18rem;">
                        <a href="">
                        <img src="{{ asset('img/'. $isi->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $isi->name_produk }}</h5>
                            <strong style="font-size: 20px;">IDR :</strong>
                            <span style="font-weight: 100; font-size: 20px" class="ms-2">{{ $isi->harga }}/kg</span>
                            <p class="card-text mt-2">{{ $isi->short_description }}</p>
                            </a>
                            @if (Auth::user())
                            <a href="#" class="btn btn-success mt-3">Checkout</a>
                            @else
                            <a href="#" class="btn btn-danger mt-3">Checkout</a>
                            @endif
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>