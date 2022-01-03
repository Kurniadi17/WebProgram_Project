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
                @foreach($carts as $cart)
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
    <div class="d-flex justify-content-center align-items-center mt-5">
        <p>Total: Rp. </p>
    </div>
    <div class="d-flex flex-column justify-content-center mt-2" style="margin-left: 450px; margin-right: 400px">
        <div class="form-group d-flex flex-row align-items-center">
            <label for="gender" class="mx-4">
                Payment Method
            </label>
            <input type="radio" name="gender" value="credit" class="mx-1 mt-1">
            <label for="Male">Credit</label>
            <br>
            <input type="radio" name="gender" value="debit" class="mx-1 mt-1">
            <label for="Female">Debit</label>
            <br>
        </div>
        <div class="form-group d-flex flex-row mt-3" >
            <label for="address" class="mx-4 mt-2" style="width: 200px;">
                Card Number
            </label>
            <input type="text" class="form-control" placeholder="Enter your card number" name="address">
            <span class="text-danger">@error('name'){{$message}} @enderror</span>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-4">
        <form method="POST" action="">
            @csrf
            <div class="input-group-prepend increment-btn" style="cursor: pointer">
                <button type="submit" class="btn btn-primary">Proceed To Checkout</button>
            </div>    
        </form>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-4">
        <form method="POST" action="">
            @csrf
            <div class="input-group-prepend increment-btn" style="cursor: pointer">
                <button type="submit" class="btn btn-primary">Checkout</button>
            </div>    
        </form>
    </div>
@endsection