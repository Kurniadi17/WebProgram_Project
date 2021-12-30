<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function createLogin(Request $request){
        $data = $request->validate([
            'email'=>'required|email',
            'password'=> 'required|min:5|max:12'
        ]);
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            if($request->has('remember_me')){
                Cookie::queue('userEmail', $data['email'], 60);
                Cookie::queue('userPwd', $data['password'], 60);
            }
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();     
        return redirect('/');
    }

    public function profileDetail($id){
        $users = User::find($id);
        return view('profile',['users'=>$users]);
    }

    public function oldProfile($id){
        $users = User::find($id);
        return view ('updateProfile', ['users'=>$users]);
    }

    public function updateProfile(Request $request, $id){
          $users = User::find($id);
          $users->name = $request->name;
          $users->email = $request->email;
          $users->password = $request->password;
          $users->address = $request->address;
          $users->gender = $request->gender;

        //   $brg->color = $request->input('name');
        //   $users->image = $request->image= $request->file('image')->store('img');
          $users->update();
          return back()->with('success','Profile Successfully Updated');
    }

}
