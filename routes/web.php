<?php

use App\Http\Controllers\web\Admin\WebUserController;
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

// === OWNER ===
Route::middleware(['auth:sanctum', 'ability:owner'])->prefix('owner')->group(function () {
    Route::get('/', function () {
        return view('pages.teknisi.dashboard');
    })->name('dashboard');

    Route::prefix('users')->group(function(){
        Route::get('/', [WebUserController::class, "index"]);

        Route::get('edit/{user_id}', [WebUserController::class, "edit"]);

        Route::post('edit/{user_id}', [WebUserController::class, "doedit"]);

        Route::get('delete/{user_id}', [WebUserController::class, "dodelete"]);

        Route::get('insert', [WebUserController::class, "insert"]);

        Route::post('insert', [WebUserController::class, "doinsert"]);
    });
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


// == TEKNISI ==
Route::get('/cart', function(Request $request){
    $loginUser = array();
    if($request->session()->has('loginUser')){
        $loginUser = $request->session()->get('loginUser');
    }
    $param = array();
    $param["loginUser"] = $loginUser;

    return view('pages.teknisi.cart', $param);
})->name('cart');

Route::get('/checkout', function(){
    $uname = "admin";
    $param = $uname;

    // Auth::user();

    return view('pages.teknisi.checkout', compact('param'));
})->name('checkout');

Route::get('/store', function(Request $request){
    $loginUser = array();
    if($request->session()->has('loginUser')){
        $loginUser = $request->session()->get('loginUser');
    }
    $param = array();
    $param["loginUser"] = $loginUser;

    return view('pages.teknisi.store', $param);
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

            return view('pages.teknisi.master_item', $param);
        })->name('master_item');

        Route::get('/add', function (Request $request){
            $loginUser = array();
            if($request->session()->has('loginUser')){
                $loginUser = $request->session()->get('loginUser');
            }
            $param = array();
            $param["loginUser"] = $loginUser;

            return view('pages.teknisi.add_item', $param);
        })->name('master_item_add');
    });
});

Route::get('/service',function(){
    return view('pages.teknisi.service');
})->name('teknisi_service');

Route::get('/history',function(){
    return view('pages.teknisi.history');
})->name('service_history');


// == OWNER ==


Route::get('/owner/user', function () {
    return view('pages.owner.contentPemilikUsaha'); //ini list user
})->name('owner_user');

Route::get('/owner/barang', function(){
    return view('pages.owner.MasterBarang');
})->name('owner_barang');;

Route::get('/owner/service', function(){
    return view('pages.owner.MasterService');
})->name('owner_service');

Route::get('/owner/laporan', function () {
    return view('pages.owner.Laporan'); //ini list laporan
})->name('owner_laporan');


// == MANAJER ==
Route::get('/manager/users',function(){
    return view('pages.manajer.Users');
})->name('manager_masterusers');

Route::get('/manager/barang', function () {
    return view('pages.manajer.MasterBarang');
})->name('manager_masterbarang');

Route::get('/manager/service', function () {
    return view('pages.manajer.MasterService');
})->name('manager_masterservice');

Route::get('/manager/gajian', function () {
    return view('pages.manajer.Gajian'); //ini list gajian
})->name('manager_gajian');

