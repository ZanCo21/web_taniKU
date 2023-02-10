@extends('app')
@section('content')
<!-- My CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="row">
    <div class="container">
        <!-- <img src={{ asset('asset/sayuran.png') }} alt=""> -->
        <div class="gambar">
            <form action="{{ route('register.action') }}" class="" method="POST">
            @csrf
            <div class="mb-1">
                <label class="form-control1">Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="" />
            </div>
            <div class="mb-2">
                <label class="form-control1">Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="" />
            </div>
            <div class="mb-3">
                <label class="form-control1">No. Telephone <span class="text-danger">*</span></label>
                <input class="form-control" type="number" name="no" value="" />
            </div>
            <div class="mb-4">
                <label class="form-control1">Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-5">
                <label class="form-control1">Password Confirmation <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password_confirm" />
            </div>
           
            <div class="mb-8 mt-5">
                <button class="btn-primary" style="margin-left: 120px;">Register</button>
            </div>
            

        </form>
        <div style="display: flex; margin-left: 55%; width: 80%;">
            <div class="col-md-3">
                <a class="btn btn-outline-dark" href="{{ route('githublogin') }}" style="text-transform:none; margin-top: 400px; width: 200%; background-color: white; color: black;">
                  <img  style="margin-bottom:3px; margin-left:10px; width: 20%; margin-top: 5px;" alt="Google sign-in" src="https://cdn-icons-png.flaticon.com/512/25/25231.png" />
                  Login with Github
                </a>
              </div>
            </div>
            <div style="display: flex; margin-left: 10%; width: 80%; margin-top: -100px;">
              <div class="col-md-3">
                <a class="btn btn-outline-dark" href="{{ route('googlelogin') }}" role="button" style="text-transform:none; margin-top: 32px; width: 200%; background-color: white; color: black;">
                  <img style="margin-bottom:3px; margin-left:10px; width: 20%; margin-top: 5px;" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                  Login with Google
                </a>
              </div>
            </div>  
            <div class="text-center" style="margin-top: 10px">
            ALREADY HAVE AN ACCOUNT? <a href="login">Login</a>
          </div>
        </div>   
    </div>
         
</div>
@endsection