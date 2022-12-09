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
    
    public function lihatartikel()
    {

        $artikel = Artikel::find(request('id'));
        return view('lihatartikel',[
            'artikel'=>$artikel
        ]);
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
    $date = date('Y-m-d');
    $dateplus7 = date('Y-m-d', strtotime('+7 day', strtotime($date)));
    $jadwalDokter = DoctorSchedule::whereBetween('tanggal',[$date, $dateplus7])->orderBy('tanggal', 'desc')->get();

    return view('admin.addash',[
        'jadwaldokter'=>$jadwalDokter
    ]);
  }
  public function InputData (){
    return view('admin.adinputdata');
  }
  public function rekammedis()
  {
    $RekamMedis=RekamMedis::with('user')->get();
    return view('admin/adrekam',[
        "RekamMedis"=>$RekamMedis
    ]);
  }
   
    public function docregister (){
        return view('doctor/docregister');
    }
    
}
