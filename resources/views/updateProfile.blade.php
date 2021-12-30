@extends('layout.main')
@section('title', 'Hikea - Update')
@section('isi')
  
        <div class="container">
            <div class="col-md-8 mx-auto align-items-center justify-content-center" style="margin-top:150px;">
                <h4>Update Profile</h4>
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                 @endif
                <hr>
                <form action="/profile-update/{{$users->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">
                            Full Name :
                        </label>
                        <input type="text" class="form-control" placeholder="Enter your name" name="name" value="{{$users->name}}">
                        
                    </div>
                    <div class="form-group">
                        <label for="email">
                            Email :
                        </label>
                        <input type="email" class="form-control" placeholder="Enter your email" name="email" value="{{$users->email}}">
                        
                    </div>
                    <div class="form-group">
                        <label for="passwrod">
                            Password :
                        </label>
                        <input type="password" class="form-control" placeholder="Enter your password" name="password" value="{{$users->password}}">
                        
                    </div>
                    <div class="form-group">
                        <label for="address">
                            Address : 
                        </label>
                        <input type="text" class="form-control" placeholder="Enter your address" name="address" value="{{$users->address}}">
                        
                    </div>
                    <div class="form-group">
                        <label for="gender">
                            Gender
                        </label><br>
                        <input type="radio" name="gender" value="Male"  {{ $users->gender == 'Male' ? 'checked' : '' }}>
                        <label for="Male">Male</label>
                        <br>
                        <input type="radio" name="gender" value="Female" {{ $users->gender == 'Female' ? 'checked' : '' }}>
                        <label for="Female">Female</label>
                        <br>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-block btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
  
@endsection