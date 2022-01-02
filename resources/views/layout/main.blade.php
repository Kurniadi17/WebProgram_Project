<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('storage/img/Hikea.png')}}">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg fixed-top navbar-light shadow-sm" style="background-color: #f1cbb5">
      <div class="container-fluid">
        <a class="navbar-brand fs-4 fw-bold page-scroll" href="#home">HIKEA</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link page-scroll" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="/view">View</a>
            </li>
          @auth
            <li class="nav-item">
              <a class="nav-link page-scroll" href="/profile-detail/{{auth()->user()->id}}">Profile</a>
            </li>
            @if(auth()->user()->role == 'admin')
              <li class="nav-item">
                <a class="nav-link page-scroll" href="/add-product">Add Product</a>
              </li>
            @endif
            @if(auth()->user()->role != 'admin')
            <li class="nav-item">
              <a class="nav-link page-scroll" href={{url('/showcart', Auth::user()->id)}}>Cart({{$count}})</a>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link page-scroll" href="/logout">Logout</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link page-scroll" href="/login">Login</a>
            </li>
          @endauth
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container my-4">
        @yield('isi')
    </div>
    
    <footer id="footer" class="text-center fixed-bottom" style="background-color: #ffc19d">
        <p class="copy mt-3">Copyright &#169 Furniture 2021. All Right Reserved</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymosus"></script>
    <script src="../../js/custom.js"></script>
 </body>
</html>