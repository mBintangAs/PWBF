<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\DoctorSchedule;
use App\Models\RekamMedis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PuskesmasController extends Controller
{
    public function home() {
        $artikel =  DB::table('artikels')->paginate(6);
        return view('home',[
            'artikell'=> $artikel,
        ]);
    }
    public function lihatartikel()
    {
        
        return view('lihatartikel');
    }
    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function doc() {
        // $jadwal = DoctorSchedule::where('doctor_id',Auth::user()->id)->paginate(7);
        return view('doctor/doc');
    }

    
    public function docprofile() {
        return view('doctor/docprofile');
    }

    public function adartikel() {
        return view('admin/adartikel');
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

    public function docrmform () {
        
        return view('doctor/docrmform');
    }

    public function adlogin () {
        
        return view('admin/adlogin');
    }
  public function ad()
  {
    return view('admin/addash');
  }
  public function InputData (){
    return view('admin/adinputdata');
  }
  public function rekammedis()
  {
    $RekamMedis=RekamMedis::with('user')->get();
    return view('admin/adrekam',[
        "RekamMedis"=>$RekamMedis
    ]);
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