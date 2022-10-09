<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $valid =  $request->validate([
            'email' => 'email:dns|unique:users|required',
            'username' => 'username:dns|unique:users|required',
            'password' => 'min:8|required',
            'password_confirmation' => 'min:8|required|same:password'

        ]);
        $valid['password'] = bcrypt($request['password']);
        User::create($valid);
        return view('auth.login', [
            'registberhasil' => 'true',
            'email' => $valid['email'],

        ]);
    }

}
