@extends('app')
@section('content')
<!-- My CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <img src={{ asset('asset/sayuran.png') }} alt=""> -->
            <form action="{{ route('register.action') }}" class="gambar" method="POST">
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
           
            <div class="mb-6">
                <button class="btn-primary">Register</button>
                <a class="btn btn-danger" href="/">Back</a>
            </div>
            <div class="text-center" style="margin-top: 437px">
            ALREADY HAVE AN ACCOUNT? <a href="login">Login</a>
          </div>

        </form>
    </div>
</div>
@endsection