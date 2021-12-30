<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function go(){
        
        return view('register');
    }
    public function register(Request $request){
       $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:20',
            'address'=>'required|min:5|max:95',
            'gender'=>'required',
        ]);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect('register')->with('berhasil','Registrasi Berhasil');
    }
}
