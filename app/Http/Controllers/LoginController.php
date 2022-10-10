<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request) {
        if($request->isMethod('post')){
            Login::create([
                'username'=>$request->username,
                'password'=>Hash::make($request['password']),
            ]);
            return redirect('/');
        }
        return view('/');
    }
}