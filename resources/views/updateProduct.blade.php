@extends('layout.main')
@section('title', 'Hikea - Update')
@section('isi')
    <div class="container">
            <div class="col-md-8 mx-auto align-items-center justify-content-center" style="margin-top:150px;">
                <h3 class="text-center">Update Furniture</h3>
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                 @endif
                <hr>
                <form action="/update/{{$prods->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">
                            Name
                        </label>
                        <input type="text" class="form-control" placeholder="Enter furniture's name" name="name" value="{{$prods->name}}">
                        
                    </div>
                    <div class="form-group">
                        <label for="price">
                            Price
                        </label>
                        <input type="number" class="form-control" placeholder="Enter furniture's price" name="price" value="{{$prods->price}}">
                        
                    </div>
                    <div class="form-group">
                        <label for="type">
                            Type
                        </label>
                        <input type="text" class="form-control" placeholder="Enter furniture's type" name="type" value="{{$prods->type}}">
                        
                    </div>
                    <div class="form-group">
                        <label for="color">
                            Color
                        </label>
                        <input type="text" class="form-control" placeholder="Enter furniture's color" name="color" value="{{$prods->color}}">
                        
                    </div>
                    <div class="form-group">
                        <label for="image">
                            Image
                        </label>
                        <input type="file" class="form-control" placeholder="Enter your address" name="image" value="{{$prods->image}}">
                        
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-block btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
    </div>
@endsection