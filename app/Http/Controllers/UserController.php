<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $valid =  $request->validate([
            'name' => 'required',
            'email' => 'email:dns|unique:users|required',
            'password' => 'min:8|required',
            'No_Telepon' =>'numeric|required',
            'password_confirmation' => 'min:8|required|same:password'

        ]);
        $valid['password'] = bcrypt($request['password']);
        User::create($valid);
        return view('auth.login', [
            'registberhasil' => 'true',
            'email' => $valid['email'],
            'title' => 'dr. Reynaldi - Specialist Penyakit Cinta'

        ]);
    }

}
