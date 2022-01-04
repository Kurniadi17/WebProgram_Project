@extends('layout.main')
@section('title', 'Hikea - Profile')
@section('isi')
    <div class="container" style="margin-top:100px;">
        <h1 >Profile Furniture</h1>
        <div class="m-2 p-3">
            <h3 class="text-center mb-5">@auth {{ ucfirst(trans(auth()->user()->name))}} @endauth Profile</h3>
            <div class="px-5 m-5">
                @auth
                    <div class="form-group px-5">
                        <p class="fs-5">
                            Full Name : {{$users->name}}
                        </p>
                        <p class="fs-5">
                            Email : {{$users->email}}
                        </p>
                        <p class="fs-5">
                            Role : {{$users->role}}
                        </p>
                    </div>
                    @if(auth()->user()->role == 'admin')
                        <div class="p-5 d-flex justify-content-between">
                            <a href="/transactionHistory/{{$users->id}}" class="btn btn-primary">View All User's Transaction</a>
                            <a href="/profile-update/{{$users->id}}" class="btn btn-primary">Update Profile</a>
                            <a href="/logout" class="btn btn-primary">Logout</a>
                        </div>
                    @else 
                        <div class="px-5">
                            <p class="fs-5">
                                Address : {{$users->address}}
                            </p>
                            <p class="fs-5">
                                Gender : {{$users->gender}}
                            </p>
                        </div>
                        <div class="p-5 d-flex justify-content-between">
                            <a href="/transactionHistory/{{$users->id}}" class="btn btn-primary">View Transaction History</a>
                            <a href="/profile-update/{{$users->id}}" class="btn btn-primary">Update Profile</a>
                            <a href="/logout" class="btn btn-primary">Logout</a>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
    </div>
     
@endsection



