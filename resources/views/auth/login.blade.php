<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head> -->
<body class="d-flex flex-column min-vh-100">
    <!-- <section class="Form border" > -->
    @extends('navbar')
        <div class="container justify-content-center" style="margin-top:auto; margin-bottom:auto;" style="width:100%; height:100%">
        <div class="row border">
            <div class="col-md-5" style="background-image: url(/img/istockphoto-1293762741-170667a.jpg);">
                <!-- <img src="{{url('/img/istockphoto-1293762741-170667a.jpg')}}" class="img-fluid w-100 h-100" alt="" > -->
            </div>
            <div class="col-md-7">
                <h4>Login</h4>
                <hr>
                <form action="{{route('login-user')}}" method="post">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="email">
                            Email
                        </label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" 
                        @if(Cookie::has('userEmail'))
                            value="{{Cookie::get('userEmail')}}"
                        @endif>
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">
                            Password
                        </label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" 
                        @if(Cookie::has('userPwd'))
                            value="{{Cookie::get('userPwd')}}"
                        @endif  >
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="remember_me" id="remember_me" name="remember_me" 
                        @if(Cookie::has('userEmail'))
                            checked
                        @endif 
                        >
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Keep me logged in
                        </label>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>
                    <br>
                    <a href="registration">Register Here!</a>
                </form>
            </div>
        </div>
    </div>
    <!-- </section> -->
</body>
@extends('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymosus"></script>
</html>