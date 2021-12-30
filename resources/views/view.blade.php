@extends('layout.main')
@section('title', 'Hikea - View')
@section('isi')

    <div class="text-center justify-content-center" style="margin-top: 100px">
        <h3>Welcome @auth {{ucfirst(trans(auth()->user()->name))}} @endauth to HIKEA FURNITURE</h3>
        <div class="d-flex justify-content-center align-items-center">
            @foreach($prods as $p)
            <div class="card border border-primary m-4" style="width: 18rem;">
            <a href="/detail/{{$p->id}}"> <img src="{{asset('storage/'.$p->image)}}" class="card-img-top" alt="...">   </a>  
                <div class="card-body">
                <h5 class="card-title text-center">{{$p->name}}</h5>
                    <p class="card-text text-center">Rp.{{$p->price}}</p>
                    {{-- Admin --}}
                    @auth
                        @if(auth()->user()->role == 'admin')
                        <div class="d-flex justify-content-between">
                            <a href="/update/{{$p->id}}" class="btn btn-primary">Update</a>
                            <a href="/delete/{{$p->id}}" class="btn btn-primary">Delete</a>
                        </div>
                        @else
                        <div class="justify-content-between text-center">
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                        @endif
                    @else
                        <div class="justify-content-between text-center">
                            <a href="/login" class="btn btn-primary">Add to Cart</a>
                        </div>
                    @endauth
                </div>
            </div>
            @endforeach  
        </div>
        <div class="mt-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link" href="">Previous</a>
                  </li>
                  {{-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
                  <li class="page-item">
                    <a class="page-link" href="">Next</a>
                  </li>
                </ul>
              </nav>
        </div>
    </div>


@endsection