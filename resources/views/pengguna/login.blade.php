<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="row">
    
    <div class="col-md-6">
        <h1>LOGIN</h1>
        <form action="{{ Route('postlogin') }}" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label>Email <span class="text-danger">*</span></label>
                <input autofocus class="form-control" type="email" name="email" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
                <a class="btn btn-danger" href="/">Back</a>
            </div>
            <label for="" >Don’t have an account?</label>
            <a href="register" style="color: blue;" onclick="">Go To Register</a>
        </form>
    </div>
</div>
</body>
</html>