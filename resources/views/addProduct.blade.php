<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
@extends('navbarAdmin')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:100px;">
                <h4>Add Furniture</h4>
                <hr>
                <form action="{{route('register-user')}}" method="post">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">
                            name
                        </label>
                        <input type="text" class="form-control" placeholder="Enter furniture's name" name="name" value="{{old('name')}}">
                        <span class="text-danger">@error('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            price
                        </label>
                        <input type="text" class="form-control" placeholder="Enter furniture's price" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">
                            type
                        </label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="address">
                            color
                        </label>
                        <input type="text" class="form-control" placeholder="Enter your address" name="address" value="">
                        <span class="text-danger">@error('address'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="gender">
                            image
                        </label>
                        <input type="text" class="form-control" placeholder="Enter your address" name="address" value="">
                        <span class="text-danger">@error('gender'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-block btn-primary" type="submit">Add Furniture</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@extends('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymosus"></script>
</html>