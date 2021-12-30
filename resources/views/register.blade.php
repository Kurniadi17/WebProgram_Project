@extends('layout.Main')
@section('title', 'Hikea - Register')
@section('isi')


    <div class="container align-items-center justify-items-center" style="margin-top: 10rem">
        <div class="row">
            <div class="col-md-5 ">
                 <img src="{{url('')}}" class="" alt=""  style="object-fit: cover; width:100%; height:100%"> 
            </div>
            <div class="col-md-7">
                <h4>Registration</h4>
                @if(Session::has('berhasil'))
                    <div class="alert alert-success">{{Session::get('berhasil')}}</div>
                @endif
                <hr>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">
                            Full Name
                        </label>
                        <input type="text" class="form-control" placeholder="Enter Full Name" name="name" >
                        <span class="text-danger">@error('name'){{$message}} @enderror</span>
                    </div>
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
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" >
                        <span class="text-danger">@error('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="address">
                            Address
                        </label>
                        <input type="text" class="form-control" placeholder="Enter your address" name="address">
                        <span class="text-danger">@error('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="gender">
                            Gender
                        </label><br>
                        <input type="radio" name="gender" value="Male">
                        <label for="Male">Male</label>
                        <br>
                        <input type="radio" name="gender" value="Female">
                        <label for="Female">Female</label>
                        <br>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>
                    <br>
                    <a href="/login">Login Here!</a>
                </form>
            </div>
        </div>
    </div>
@endsection