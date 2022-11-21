<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        // if(Auth::user()->level==0){
        //     return redirect('/ad');
        // }
        // if(Auth::user()->level==1){
        //     return redirect('/doc');
        // }
        $artikel =  DB::table('artikels')->paginate(6);
        return view('home',[
            'artikel'=> $artikel,
        ]);
    }
}
