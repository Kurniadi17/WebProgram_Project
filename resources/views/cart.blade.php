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
        
            
    </div>


@endsection