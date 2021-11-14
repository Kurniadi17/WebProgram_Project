<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
@extends('navbarAdmin')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:100px;">
                <h4>Add Furniture</h4>
                <hr>
                <form action="{{route('new-product')}}" method="post" enctype="multipart/form-data">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">
                            Name
                        </label>
                        <input type="text" class="form-control" placeholder="Enter furniture's name" name="name" value="">
                        <span class="text-danger">@error('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="price">
                            Price
                        </label>
                        <input type="number" class="form-control" placeholder="Enter furniture's price" name="price" value="">
                        <span class="text-danger">@error('price'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="type">
                            Type
                        </label>
                        <input type="text" class="form-control" placeholder="Enter furniture's type" name="type" value="">
                        <span class="text-danger">@error('type'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="color">
                            Color
                        </label>
                        <input type="text" class="form-control" placeholder="Enter furniture's color" name="color" value="">
                        <span class="text-danger">@error('color'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="image">
                            Image
                        </label>
                        <input type="file" class="form-control" placeholder="Enter your address" name="image" value="">
                        <span class="text-danger">@error('image'){{$message}} @enderror</span>
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