@extends('layout.main')
@section('title', 'Hikea - Tambah data')
@section('isi')
    <div class="container" style="margin-top:100px;">
        <div class="mb-4">
            <h1 >Detail Furniture</h1>
        </div>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        {{-- <img src="" alt=""> --}}
        <div class="m-2 p-3 border">
            <h2 class="text-center">{{$prods->name}}</h2>
            <div class="d-flex justify-content-around align-items-center">
                <img src="{{asset('storage/'.$prods->image)}}" width="320px" height="320px" alt="">
                <div class="">
                    <p class="fs-3">
                        Price : {{$prods->price}}
                    </p>
                    <p class="fs-3">
                        Type : {{$prods->type}}
                    </p>
                    <p class="fs-3">
                        Color : {{$prods->color}}
                    </p>
                </div>
                {{-- <div class="form-group">
                    <h2 for="image">
                        <img src="{{asset('storage/'.$prods->image)}}" alt="">
                    </label>
                </div> --}}
            </div>
        </div>
        {{-- Admin --}}
        <div class="m-3 d-flex justify-content-evenly">
            <a href="{{url()->previous()}}" class="btn btn-primary">Previous</a> 
            @auth           
            @if(auth()->user()->role == 'admin')
                <a href="/update/{{$prods->id}}" class="btn btn-primary">Update</a>
                <a href="/delete/{{$prods->id}}" class="btn btn-primary">Delete</a>
                @else
                <a href="" class="btn btn-primary">Add to Cart</a>
            @endif
            @else
            <a href="/login" class="btn btn-primary">Add to Cart</a>
            @endauth
        </div>
    
@endsection



