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
        <p>Checkout</p>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <div>
            <table>
                @foreach($cart as $cart)
                <tr>
                    <td class="border" style="padding: 30px;">
                        <img width="100px" height="100px" src="{{asset('storage/'.$cart->image)}}" class="card-img-top" alt="...">
                    </td>
                    <td class="border" style="padding: 30px;">{{$cart->name}}</td>
                    <td class="border" style="padding: 30px">Rp. {{$cart->price}}</td>
                    <td class="border" style="padding: 30px">{{$cart->quantity}} Item(s)</td>
                    <td class="border" style="padding: 30px">Rp. {{($cart->quantity)*($cart->price)}}</td>
                    <td class="border" style="padding: 30px">
                        <div class="input-group quantity">
                            <form method="POST" action="{{url('decrement/'.$cart->id)}}">
                                @csrf
                                <div class="input-group-prepend increment-btn" style="cursor: pointer">
                                    <button type="submit" class="btn btn-primary">-</button>
                                </div>    
                            </form>
                            <form method="POST" action="{{url('increment/'.$cart->id)}}">
                                @csrf
                                <div class="input-group-prepend increment-btn" style="cursor: pointer">
                                    <button type="submit" class="btn btn-primary">+</button>
                                </div>    
                            </form>
                        </div>    
                    </td>
                </tr>
                @endforeach
            </table>  
        </div>
    </div>
@endsection