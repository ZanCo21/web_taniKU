<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Taniku</title>
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
      body{
        background-color: #fff;
        margin: 0;
        padding: 0;
        font-family: 'Montserrat', sans-serif;
      }

      a{
        text-decoration: none;
        color: black;
      }
      a:hover{
        color: black;
      }

      .div1{
        margin-right: 20%;
      }

      .div1 div:first-child{
        border-radius: 10px;
      }

      .div1 div:nth-child(3){
        border-radius: 10px;
      }

      .kategori{
        font-size: 20px;
      }

      .kolom1{
        text-align: center;
      }

      .iklan1{
        width: 310px;
        margin-left: 30%;
        padding: 15px;
        box-sizing: border-box;
        box-shadow: 0 2px 15px 0 rgb(32 32 32 / 10%);
      }

      .iklanlarge{        
        border-radius: 10px; 
      }


      .banner{
        margin-top: 2%;
      }

    .slider{
    width: 800px;
    height: 400px;
    border-radius: 10px;
    overflow: hidden;
  }
.slides{
    width: 800%;
    height: 400px;
    display: flex;
}
.slides input{
    display: none;
}
.slide{
    width: 20%;
    transition: 2s;
}
.slide img{
    width: 800px;
    height: 400px;
}

/* css untuk slide manual navigasi */

.navigations-manual{
    position: absolute;
    width: 879px;
    margin-top: 10px;
    display: flex;
    justify-content: center;
}

.manual-btn{
    border: 2px solid #00FFF6;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
}
.manual-btn:not(:last-child){
    margin-right: 40px;
}
.manual-btn:hover{
    background-color: #00FFF6;
}

#radio1:checked ~ .first{
    margin-left: 0;
}
#radio2:checked ~ .first{
    margin-left: -20%;
}
#radio3:checked ~ .first{
    margin-left: -40%;
}
#radio4:checked ~ .first{
    margin-left: -60%;
}

/* css untuk auto slide navigasi */

.navigations-auto{
    position: absolute;
}
.navigations-auto div{
    border: 2px solid #00FFF6;
    padding: 5px;
    border-radius: 10px;
    transition: 1s;
}
.navigations-auto:not(:last-child){
    margin-left: 40px;
}

#radio1:checked ~ .navigations-auto .auto-btn1{
    background: #00FFF6;
}
#radio2:checked ~ .navigations-auto .auto-btn2{
    background: #00FFF6;
}
#radio3:checked ~ .navigations-auto .auto-btn3{
    background: #00FFF6;
}
#radio4:checked ~ .navigations-auto .auto-btn4{
    background: #00FFF6;
}


    .qty {
    width: 40px;
    height: 25px;
    text-align: center;
    }
    input.qtyplus { width:25px; height:25px;}
    input.qtyminus { width:25px; height:25px;}
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #173F36; color: white;">
  <div class="container-fluid">
    <a class="navbar-brand ms-5 h2" href="#" style="font-size: 28px;">TaniKU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="float-end me-5" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('cart') }}">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Akun
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li class="dropdown-item" ><a href="">Profil</a></li>
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

    <div class="container ms-5">
        <div class="col-md-12">
          @yield('konten')
        </div>
      </div>        
    </div>

    {{-- fotter --}}
    <div class="mt-5" style="background-color: #173F36; height: 200px; width: 100%; text-align: center;">
      <br>
      <div class="pt-5" style="">
      <i class="fa-brands fa-instagram me-2" style="color: #fff;"></i>
      <i class="fa-regular fa-envelope me-2" style="color: #fff;"></i>
      <i class="fa-brands fa-whatsapp" style="color: #fff;"></i>
      <p style="color: #fff;" class="pt-2"><i class="fa-regular fa-copyright"></i> 2022 TANIKU FOOD SOLUSI</p>
      </div>
    </div>

    <script src="https://kit.fontawesome.com/09294afb62.js" crossorigin="anonymous"></script>
    <script src="../asset/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>