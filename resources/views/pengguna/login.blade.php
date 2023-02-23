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
        <div class="gambar2">
        <h3>Login</h3>
        <form action="{{ Route('postlogin') }}" class="" method="POST">
            {{ csrf_field() }}
            <div class="mb-6 mt-5">
                <label class="fotm-controll" >Email</label>
                <input autofocus class="form-control" type="email" name="email" value="{{ old('username') }}" required>
            </div>
            <div class="mb-7 mt-5">
                <label class="fotm-controll">Password</label>
                <input class="form-control" type="password" name="password" required>
            </div>
            <div class="mb-8 mt-5">
                <button class="btn-primary2">Login</button>
            </div>
            
        </form>
        <div style="display: flex; margin-left: 47%; width: 200%;">
            <div class="col-md-3">
                <a class="btn btn-outline-dark" href="{{ route('githublogin') }}" style="text-transform:none; margin-top: 300px; width: 70%; background-color: white; color: black;">
                  <img  style="margin-bottom:3px; margin-left:10px; width: 20%; margin-top: 5px;" alt="Google sign-in" src="https://cdn-icons-png.flaticon.com/512/25/25231.png" />
                  Login with Github
                </a>
              </div>
            </div>
            <div style="display: flex; margin-left: 10%; width: 200%; margin-top: -100px;">
              <div class="col-md-3">
                <a class="btn btn-outline-dark" href="{{ route('googlelogin') }}" role="button" style="text-transform:none; margin-top: 38px; width: 70%; background-color: white; color: black;">
                  <img style="margin-bottom:3px; margin-left:10px; width: 20%; margin-top: 5px;" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                  Login with Google
                </a>
              </div>
            </div>  
            <div class="text-center2" style="margin-top: 20px;">
            DON'T HAVE AN ACCOUNT? <a href="register">register</a>
            </div>
        </div>         
    </div>
   
</div>
<img src="img/TaniKU2.png" alt="" style="margin-left: 30%; margin-top: 90px;">
</body>
</html>