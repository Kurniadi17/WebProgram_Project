@extends('layout.main')
@section('title', 'Hikea - Tambah data')
@section('isi')
    <div class="container">
            <div class="col-md-8 mx-auto align-items-center justify-content-center" style="margin-top:150px;">
                <h3 class="text-center">Add Furniture</h3>
                <hr>
                @if(session()->has('success'))
                 <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                <form action="/add-product" method="POST" enctype="multipart/form-data">
                       
                    @csrf
                    <div class="form-group">
                        <label for="name">
                            Name
                        </label>
                        <input type="text" class="form-control" placeholder="Enter furniture's name" name="name" >
                        {{-- <span class="text-danger">@error('name'){{$message}} @enderror</span> --}}
                    </div>
                    <div class="form-group">
                        <label for="price">
                            Price
                        </label>
                        <input type="number" class="form-control" placeholder="Enter furniture's price" name="price" >
                        {{-- <span class="text-danger">@error('name'){{$message}} @enderror</span> --}}
                    </div>
                    <div class="form-group">
                        <label for="type">
                            Type
                        </label>
                        <input type="text" class="form-control" placeholder="Enter furniture's type" name="type" >
                        {{-- <span class="text-danger">@error('name'){{$message}} @enderror</span> --}}
                    </div>
                    <div class="form-group">
                        <label for="color">
                            Color
                        </label>
                        <input type="text" class="form-control" placeholder="Enter furniture's color" name="color" >
                        {{-- <span class="text-danger">@error('name'){{$message}} @enderror</span> --}}
                    </div>
                    <div class="form-group">
                        <label for="image">
                            Image
                        </label>
                        <input type="file" class="form-control" placeholder="Enter your address" name="image" >
                        {{-- <span class="text-danger">@error('name'){{$message}} @enderror</span> --}}
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-block btn-primary" type="submit">Add Furniture</button>
                    </div>
                </form>
            </div>
    </div>
@endsection