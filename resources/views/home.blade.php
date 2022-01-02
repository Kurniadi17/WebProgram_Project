@extends('layout.main')
@section('title', 'Hikea - HomePage')
@section('isi')

    <div class="d-flex justify-content-center" style="margin-top: 100px">
        <h3>Welcome @auth {{ucfirst(trans(auth()->user()->name))}} @endauth to HIKEA FURNITURE</h3>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-center align-items-center">
        @foreach($prods as $p)
        <form action="{{url('/addcart',$p->id)}}" method="post">
        @csrf
        <div class="card border border-primary m-4" style="width: 18rem;">
          <a href="/detail/{{$p->id}}"> <img src="{{asset('storage/'.$p->image)}}" class="card-img-top" alt="...">   </a>  
            <div class="card-body">
            <h5 class="card-title text-center">{{$p->name}}</h5>
                <p class="card-text text-center">Rp. {{$p->price}}</p>
                {{-- Admin --}}
                @auth
                    @if(auth()->user()->role == 'admin')
                    <div class="d-flex justify-content-between">
                        <a href="/update/{{$p->id}}" class="btn btn-primary">Update</a>
                        <a href="/delete/{{$p->id}}" class="btn btn-primary">Delete</a>
                    </div>
                    @else
                    <div class="justify-content-between text-center">
                      <input type="submit" value="Add to Cart">
                    </div>
                    @endif
                @else
                    <div class="justify-content-between text-center">
                        <a href="/login" class="btn btn-primary">Add to Cart</a>
                    </div>
                @endauth
            </div>
        </div>
        </form>
        @endforeach
            
    </div>


@endsection