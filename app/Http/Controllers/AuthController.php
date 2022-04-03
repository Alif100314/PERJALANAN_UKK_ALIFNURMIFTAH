<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
Use Alert;
use Illuminate\Support\str;

class AuthController extends Controller
{
    public function login ()
    {
        return view('Auth.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))) {
            
        Alert::success('Success Title', 'Success Message');
            return redirect('home')->with('success', 'Task Created Successfully!');
        }
            return redirect('login');
    }
    public function logout()
    {
        Auth::logout();
        Alert::success('Success Title', 'Success Message');
        return redirect('/login')->with('success', 'Task Created Successfully!');
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function postregister(Request $request)
    {
        // dd($request->password);
        $password = $request->password; 

        $user = new User();
        $user->nik = $request->nik;
        $user->name = $request->name;
        $user->foto = 'default.png';
        $user->email = $request->email;
        $user->role = "user";
        $user->password = bcrypt($password);
        $user->remember_token = Str::random(32);
        // dd($user);
        $user->save();
       
        return redirect('/login');
    }
}
