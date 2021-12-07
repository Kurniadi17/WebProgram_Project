<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
@extends('navbarAdmin')
<body>
    <div class="d-flex justify-content-center" style="margin-top: 100px" >
        <h4>Welcome, Admin to JH Furniture</h4>
    </div>
    <div class="input-group">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
        aria-describedby="search-addon" />
        <button type="button" class="btn btn-outline-primary">search</button>
    </div>
    <div class="d-flex justify-content-center align-items-center">
         @foreach ($products as $product)
         <div class="card border border-primary m-4" style="width: 18rem;">
            <img src="{{ asset('img'. $product->name)}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title text-center">{{$product->name}}</h5>
                <p class="card-text text-center">Rp. 85.000</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
        @endforeach


        <div class="card border border-primary m-4" style="width: 18rem;">
            <img src="https://cdn.discordapp.com/attachments/896407128942727221/909101010658668646/0729767_PE737131_S4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title text-center">Mammut</h5>
                <p class="card-text text-center">Rp. 85.000</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
        <div class="card border border-primary m-4" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Card title</h5>
                <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
        <div class="card border border-primary m-4" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Card title</h5>
                <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
        <div class="card border border-primary m-4" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Card title</h5>
                <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>

</body>
@extends('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymosus"></script>
</html>