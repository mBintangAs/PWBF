    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\userController;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\RegisterController;
    use App\Http\Controllers\PuskesmasController;
    use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\ScheduleController;
use App\Models\DoctorSchedule;

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
    Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::any('/logout', [LoginController::class, 'logout']);
    Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/docregister', [PuskesmasController::class, 'docregister']);
    route::get('/logout',[LoginController::class,'logout']);
    // 0 admin
    Route::group(['middleware'=>['auth','cekLevel:0']],function ()
    {
        route::get('/ad',[PuskesmasController::class, 'ad']);
        Route::get('/rekam-medis',[PuskesmasController::class,'rekammedis']);
        Route::get('/input-data',[PuskesmasController::class,'InputData']);
        Route::get('/adartikel', [PuskesmasController::class, 'adartikel']);
    });
    // 1 dokter
    Route::group(['middleware'=>['auth','cekLevel:1']],function ()
    {
        Route::get('/docjadwal', [PuskesmasController::class, 'docjadwal']);
        Route::get('/doc',[DoctorScheduleController::class, 'index']);
        Route::get('/docprofile', [PuskesmasController::class, 'docprofile']);
        Route::get('/docrmform', [PuskesmasController::class, 'docrmform']);
        Route::get('/docrm', [PuskesmasController::class, 'docrm']);
    });
    // 2 pasien

    Route::resource('/schedule', ScheduleController::class);
