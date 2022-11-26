@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="" />
            </div>
            <div class="mb-3">
                <label>Email<span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="" />
            </div>
            <div class="mb-3">
                <label>No <span class="text-danger">*</span></label>
                <input class="form-control" type="number" name="no" value="" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <label>Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password_confirm" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a class="btn btn-danger" href="/">Back</a>
            </div>
            <label for="" >ALREADY HAVE AN ACCOUNT?</label>
            <a href="login" style="color: blue;" onclick="">Go To Login</a>
        </form>
    </div>
</div>
@endsection