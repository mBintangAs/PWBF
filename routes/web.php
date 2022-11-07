<?php

use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\PuskesmasController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PuskesmasController::class, 'home'])->name('home');
Route::post('/lihat-artikel', [PuskesmasController::class, 'lihatartikel']);

Route::get('/login', [PuskesmasController::class, 'login']);
Route::post('/login', [PuskesmasController::class, 'login']);

Route::get('/register', [PuskesmasController::class, 'register']);
Route::post('/register2', [userController::class, "register"]);

Route::get('/doclogin', [PuskesmasController::class, 'doclogin']);
Route::get('/adlogin', [PuskesmasController::class, 'adlogin']);
route::post('/adlogin',[PuskesmasController::class, 'adloginpost']);
Route::post('/doclogin', [PuskesmasController::class, 'docloginpost']);

Route::get('/adartikel', [PuskesmasController::class, 'adartikel']);
Route::get('/docregister', [PuskesmasController::class, 'docregister']);
Route::get('/docjadwal', [PuskesmasController::class, 'docjadwal']);
    Route::get('/docrm', [PuskesmasController::class, 'docrm']);
    Route::get('/docprofile', [PuskesmasController::class, 'docprofile']);
    Route::get('/doc', [PuskesmasController::class, 'doc']);
    route::post('/doclogout',[ PuskesmasController::class, 'logoutdoctor']);
    route::get('/ad',[PuskesmasController::class, 'ad']);
    Route::get('/docrmform', [PuskesmasController::class, 'docrmform']);
    Route::get('/rekam-medis',[PuskesmasController::class,'rekammedis']);
    Route::get('/input-data',[PuskesmasController::class,'InputData']);
    Route::get('/formad',[PuskesmasController::class,'Formad']);

route::get('/doc',[DoctorScheduleController::class, 'index']);

