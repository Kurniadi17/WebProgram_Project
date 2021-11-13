<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
              <a class="nav-link page-scroll active" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="viewAdmin">View</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="productAdmin">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="addProduct">Add Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="logout">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End navbar -->
</body>
</html>