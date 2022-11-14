<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PuskesmasController;
use App\Http\Controllers\DoctorScheduleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home']);
Route::post('/lihat-artikel', [PuskesmasController::class, 'lihatartikel']);

Route::get('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/doclogin', [PuskesmasController::class, 'doclogin']);
Route::get('/adlogin', [PuskesmasController::class, 'adlogin']);
route::post('/adlogin',[PuskesmasController::class, 'adloginpost']);
Route::post('/doclogin', [PuskesmasController::class, 'docloginpost']);


Route::get('/docregister', [PuskesmasController::class, 'docregister']);
Route::get('/docjadwal', [PuskesmasController::class, 'docjadwal']);
    Route::get('/docrm', [PuskesmasController::class, 'docrm']);
    Route::get('/docprofile', [PuskesmasController::class, 'docprofile']);
    Route::get('/doc', [PuskesmasController::class, 'doc']);
    route::post('/doclogout',[ PuskesmasController::class, 'logoutdoctor']);
    Route::get('/docrmform', [PuskesmasController::class, 'docrmform']);
    Route::get('/formad',[PuskesmasController::class,'Formad']);

route::get('/doc',[DoctorScheduleController::class, 'index']);

route::get('/logout',[PuskesmasController::class,'logout']);
Route::group(['middleware'=>'authAdmin'],function ()
{
    Route::get('/rekam-medis',[PuskesmasController::class,'rekammedis']);
    Route::get('/input-data',[PuskesmasController::class,'InputData']);
    route::get('/ad',[PuskesmasController::class, 'ad']);
    Route::get('/adartikel', [PuskesmasController::class, 'adartikel']);
});

