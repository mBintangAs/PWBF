<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuskesmasController extends Controller
{
    public function home() {
        return view('home');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function doc() {
        return view('doctor/doc');
    }

    public function docprofile() {
        return view('doctor/docprofile');
    }
    
    public function docrm() {
        return view('doctor/docrm');
    }

    public function docjadwal () {
        return view('doctor/docjadwal');
    }

    public function doclogin () {
        return view('doctor/doclogin');
    }

    public function docregister (){
        return view('doctor/docregister');
    }
}
