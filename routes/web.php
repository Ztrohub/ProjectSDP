<?php

use App\Http\Controllers\web\WebLoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::middleware('login')->group(function(){
    Route::get('/', function () {
        return redirect()->route('login');
    });

    Route::get('/login', [WebLoginController::class, 'indexLogin'])->name('login');

    Route::post('/login', [WebLoginController::class, 'doLogin'])->name('login');
});

Route::get('/logout', [WebLoginController::class, 'doLogout'])->name('logout');

Route::get('/flush', function(){
    Session::flush();
    return redirect()->route('login');
});

Route::middleware(['auth:sanctum', 'ability:owner'])->prefix('owner')->group(function () {
    Route::get('/', function () {
        return view('pages.dashboard');
    })->name('dashboard');
});

// Route::middleware(['auth:sanctum', 'ability:manajer'])->prefix('manajer')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('pages.dashboard')->name('dashboard');
//     })->name('dashboard');
// });

// Route::middleware(['auth:sanctum', 'ability:teknisi'])->prefix('teknisi')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('pages.dashboard')->name('dashboard');
//     })->name('dashboard');
// });

// Route::middleware(['auth:sanctum', 'ability:kasir'])->prefix('kasir')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('pages.dashboard')->name('dashboard');
//     })->name('dashboard');
// });


Route::get('/cart', function(Request $request){
    $loginUser = array();
    if($request->session()->has('loginUser')){
        $loginUser = $request->session()->get('loginUser');
    }
    $param = array();
    $param["loginUser"] = $loginUser;

    return view('pages.cart', $param);
})->name('cart');

Route::get('/checkout', function(){
    $uname = "admin";
    $param = $uname;

    return view('pages.checkout', compact('param'));
})->name('checkout');

Route::get('/store', function(Request $request){
    $loginUser = array();
    if($request->session()->has('loginUser')){
        $loginUser = $request->session()->get('loginUser');
    }
    $param = array();
    $param["loginUser"] = $loginUser;

    return view('pages.store', $param);
})->name('store');

Route::prefix('master')->group(function () {
    Route::prefix('item')->group(function () {
        Route::get('/', function (Request $request){
            $loginUser = array();
            if($request->session()->has('loginUser')){
                $loginUser = $request->session()->get('loginUser');
            }
            $param = array();
            $param["loginUser"] = $loginUser;

            return view('pages.master.master_item', $param);
        })->name('master_item');

        Route::get('/add', function (Request $request){
            $loginUser = array();
            if($request->session()->has('loginUser')){
                $loginUser = $request->session()->get('loginUser');
            }
            $param = array();
            $param["loginUser"] = $loginUser;

            return view('pages.add_item', $param);
        })->name('master_item_add');
    });
});


//ROUTE JUAN
Route::get('/service',function(){
    return view('pages.service');
})->name('teknisi_service');

Route::get('/history',function(){
    return view('pages.history');
})->name('service_history');

// Route::get('/owner', function () {
//     return view('pages.PemilikUsaha.contentPemilikUsaha'); //ini list user
// })->name('owner');
Route::get('/owner/masterbarang', function(){
    return view('pages.PemilikUsaha.MasterBarang');
})->name('owner_masterbarang');;
Route::get('/owner/masterservice', function(){
    return view('pages.PemilikUsaha.MasterService');
})->name('owner_masterservice');
Route::get('/owner/laporan', function () {
    return view('pages.PemilikUsaha.Laporan'); //ini list laporan
})->name('owner_laporan');


Route::get('/manager/users',function(){
    return view('pages.Manajer.Users');
})->name('manager_masterusers');

Route::get('/manager/barang', function () {
    return view('pages.Manajer.MasterBarang');
})->name('manager_masterbarang');

Route::get('/manager/service', function () {
    return view('pages.Manajer.MasterService');
})->name('manager_masterservice');

Route::get('/manager/gajian', function () {
    return view('pages.Manajer.Gajian'); //ini list gajian
})->name('manager_gajian');

