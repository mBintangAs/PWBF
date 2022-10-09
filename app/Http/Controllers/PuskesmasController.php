<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\DoctorSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PuskesmasController extends Controller
{
    public function home() {
        $artikel =  DB::table('artikels')->paginate(6);
        return view('home',[
            'artikel'=> $artikel,
        ]);
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function doc() {
        $jadwal = DoctorSchedule::where('doctor_id',Auth::user()->id)->paginate(7);
        return view('doctor/doc',[
            'jadwal'=>$jadwal
        ]);
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
    public function adlogin () {
        
        return view('admin/adlogin');
    }
  public function ad()
  {
    return view('admin/addash');
  }
    public function adloginpost (Request $request) {
        $email = $request['email'];
        $password = $request['password'];
        if (Auth::attempt(array('email' => $email, 'password' => $password, 'level' => 1))) {
            $request->session()->regenerate();
            return redirect('/ad');
        }
        return back()->with('salah', 'Silahkan cek kembali email atau password anda')->with('email', $email);
    }
    public function docloginpost (Request $request) {
        $email = $request['email'];
        $password = $request['password'];
        if (Auth::attempt(array('email' => $email, 'password' => $password, 'level' => 2))) {
            $request->session()->regenerate();
            return redirect('/doc');
        }
        return back()->with('salah', 'Silahkan cek kembali email atau password anda')->with('email', $email);
    }

    public function logoutdoctor(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('login-doctor');
    }
    public function docregister (){
        return view('doctor/docregister');
    }
}