<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="styledashboard/login.css">
</head>
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
<body style="background-image: url(img/padi.jpg);">
<div class="row">
    <div class="container2">
        <h1>Login</h1>
        <form action="{{ Route('postlogin') }}" class="gambar2" method="POST">
            {{ csrf_field() }}
            <div class="mb-6">
                <label class="fotm-controll" >Email</label>
                <input autofocus class="form-control" type="email" name="email" value="{{ old('username') }}" />
            </div>
            <div class="mb-7">
                <label class="fotm-controll">Password</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="mb-8">
                <button class="btn-primary2">Login</button>
            </div>
            <div class="text-center2" style="margin-top: 360px">
            DON'T HAVE AN ACCOUNT? <a href="register">register</a>
          </div>
        </form>
    </div>
</div>
<img src="img/TaniKU2.png" alt="">
</body>
</html>