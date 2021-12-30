@extends('layout.Main')
@section('title', 'Hikea - Login')
@section('isi')
    <div class="container align-items-center justify-items-center" style="margin-top: 13rem">
        <div class="row">
            <div class="col-md-5">
                <img src="{{url('')}}" class="" alt=""  style="object-fit:fill; width:100%; height:100%"> 
            </div>
            <div class="col-md-7">
                <h4>Login</h4>
                <hr>
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">
                            Email
                        </label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" >
                        <span class="text-danger">@error('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">
                            Password
                        </label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password">
                        <span class="text-danger">@error('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="remember_me" id="remember_me" name="remember_me" 
                        >
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Keep me logged in
                        </label>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>
                    <br>
                    <a href="/register">Register Here!</a>
                </form>
            </div>
        </div>
    </div>
    <!-- </section> -->
@endsection