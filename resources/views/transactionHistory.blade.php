@extends('layout.main')
@section('title', 'Hikea - View')
@section('isi')

    <div class="text-center justify-content-center" style="margin-top: 100px">
        <h3>Welcome @auth {{ucfirst(trans(auth()->user()->name))}} @endauth to HIKEA FURNITURE</h3>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="border" style="padding: 10px;">
        <p>Transaction Id: 1</p>
        <p>Transaction Date: 2021-05-22</p>
        <p>Method: Credit</p>
        <p>Card Number: xxxx-xxxx-xxxx-4567</p>
        <p>User's Name: Jhonathan</p>
        <div>
            <table>
                <tr>
                    <td class="border" style="padding-left: 30px; padding-right:30px;">Furniture's Name</td>
                    <td class="border" style="padding-left: 30px; padding-right:30px;">Furniture's Price</td>
                    <td class="border" style="padding-left: 30px; padding-right:30px;">Quantity</td>
                    <td class="border" style="padding-left: 30px; padding-right:30px;">Total Price For Each Furniture</td>
                </tr>
                <tr>
                    <td class="border" style="padding-left: 30px; padding-right:30px; text-align: center;">Grimsbu</td>
                    <td class="border" style="padding-left: 30px; padding-right:30px; text-align: center;">Rp. 1.850.000</td>
                    <td class="border" style="padding-left: 30px; padding-right:30px; text-align: center;">1</td>
                    <td class="border" style="padding-left: 30px; padding-right:30px; text-align: center;">Rp. 1.850.000</td>
                </tr>
            </table>  
            <table>  
                <tr>
                    <td class="border" style="padding-left: 205px; padding-right:200px; text-align: center;">Total Price</td>
                    <td class="border" style="padding-left: 85px;padding-right: 85px; text-align: center;">Rp. 1.850.000</td>
                </tr>
            </table>  
        </div>
    </div>


@endsection