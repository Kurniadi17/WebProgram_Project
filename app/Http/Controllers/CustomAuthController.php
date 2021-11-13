<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Cookie;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");
    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:20',
            'address'=>'required|min:4|max:95',
            'gender'=>'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->gender = $request->gender;
        $res = $user->save();
        if ($res) {
            return back()->with('success','You have registered successfully');
        } else {
            return back()->with('fail','Something wrong');
        }
    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=> 'required|min:5|max:12'
        ]);
        $user = User::where('email','=',$request->email)->first();

        if($user){
            if(Hash::check($request->password, $user->password))
            {
                $request->session()->put('loginId',$user->id);
                if($request->has('remember_me')){
                    Cookie::queue('userEmail', $request->email, 60);
                    Cookie::queue('userPwd', $request->password, 60);
                }
                return redirect('home');
            }else{
                return back()->with('fail', 'Password not matches.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
        }
    }
    public function home(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('home', compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
    public function viewAdmin(){
        return view('viewAdmin');
    }
    public function productAdmin(){
        return view('productAdmin');
    }
    public function addProduct(){
        return view('addProduct');
    }
}
