<?php

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

Route::get('/', [PuskesmasController::class, 'home']);

Route::get('/login', [PuskesmasController::class, 'login'])->name('login-patient');

Route::get('/register', [PuskesmasController::class, 'register']);
Route::post('/register2', [userController::class, "register"]);

Route::get('/doclogin', [PuskesmasController::class, 'doclogin'])->middleware('guest')->name('login-doctor');
Route::get('/adlogin', [PuskesmasController::class, 'adlogin'])->middleware('guest')->name('login-admin');
route::post('/adlogin',[PuskesmasController::class, 'adloginpost']);
Route::post('/doclogin', [PuskesmasController::class, 'docloginpost']);

Route::get('/docregister', [PuskesmasController::class, 'docregister']);

Route::group(['middleware' => ['auth', 'ceklevel:0']], function () {
    
});
Route::group(['middleware' => ['authad', 'ceklevelad:1']], function () {
    route::get('/ad',[PuskesmasController::class, 'ad']);

});
Route::group(['middleware' => ['authdoc', 'cekleveldoc:2']], function () {
    Route::get('/docjadwal', [PuskesmasController::class, 'docjadwal']);
    Route::get('/docrm', [PuskesmasController::class, 'docrm']);
    Route::get('/docprofile', [PuskesmasController::class, 'docprofile']);
    Route::get('/doc', [PuskesmasController::class, 'doc']);
    route::post('/doclogout',[ PuskesmasController::class, 'logoutdoctor']);

});