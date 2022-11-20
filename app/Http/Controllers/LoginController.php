<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (){
        $data['title']='Login';
        return view('/login', $data);
    }

    public function authenticate(Request $request){
        $credentials= $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'berhasil');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
