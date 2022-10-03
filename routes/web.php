<?php

use App\Http\Controllers\PuskesmasController;
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

Route::get('/login', [PuskesmasController::class, 'login']);

Route::get('/register', [PuskesmasController::class, 'register']);

Route::get('/doc', [PuskesmasController::class, 'doc']);

Route::get('/docprofile', [PuskesmasController::class, 'docprofile']);

Route::get('/docrm', [PuskesmasController::class, 'docrm']);

Route::get('/docjadwal', [PuskesmasController::class, 'docjadwal']);

Route::get('/doclogin', [PuskesmasController::class, 'doclogin']);

Route::get('/docregister', [PuskesmasController::class, 'docregister']);