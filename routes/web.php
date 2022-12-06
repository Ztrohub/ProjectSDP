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

Route::middleware('login')->group( function(){
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

Route::middleware(['auth:sanctum'])->group(function () {

    Route::middleware(['ability:owner'])->prefix('owner')->group(function () {

    });

    Route::middleware(['ability:manajer'])->prefix('manajer')->group(function () {

    });

    Route::middleware(['ability:teknisi'])->prefix('teknisi')->group(function () {

    });

    Route::middleware(['ability:kasir'])->prefix('kasir')->group(function () {

    });

    Route::middleware(['ability:owner'])->prefix('users')->group(function(){
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


// == KASIR ==
Route::prefix('kasir')->group( function() {
    Route::get('/', function() {
        return redirect()->route("kasir_store");
    });

    Route::get('/store', function() {
        $param = array();
        $param["loginUser"] = Auth::user();

        return view('pages.kasir.store', $param);
    })->name('kasir_store');

    Route::get('/cart', function() {
        $param = array();
        $param["loginUser"] = Auth::user();

        return view('pages.kasir.cart', $param);
    })->name('kasir_cart');

    Route::get('/checkout', function() {
        $param = array();
        $param["loginUser"] = Auth::user();

        return view('pages.kasir.checkout', $param);
    })->name('kasir_checkout');
});


// == TEKNISI ==
Route::prefix('teknisi')->group( function() {
    // Route::get('/', function() {
    //     return view('pages.teknisi.dashboard');
    // })->name('teknisi_dashboard');

    Route::get('/', function() {
        return redirect()->route("teknisi_service");
    });

    Route::prefix('service')->group( function() {
        Route::get('/',function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.teknisi.my_service', $param);
        })->name('teknisi_service');

        Route::get('/edit',function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.teknisi.edit_my_service', $param);
        })->name('teknisi_edit_service');
    });

    Route::get('/history',function() {
        $param = array();
        $param["loginUser"] = Auth::user();

        return view('pages.teknisi.history', $param);
    })->name('teknisi_service_history');
});


// == OWNER ==
Route::prefix('owner')->group( function() {
    Route::get('/', function() {
        return redirect()->route("owner_report");
    });

    Route::get('/laporan', function() {
        $param = array();
        $param["loginUser"] = Auth::user();

        return view('pages.owner.laporan', $param); // ini list laporan
    })->name('owner_report');

    Route::prefix('services')->group( function() {
        Route::get('/', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.owner.master_service', $param);
        })->name('owner_service');

        Route::get('/edit', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.owner.edit_service', $param);
        })->name('owner_edit_service');
    });

    Route::prefix('items')->group( function() {
        Route::get('/', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.owner.master_item', $param);
        })->name('owner_item');

        Route::get('/edit', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.owner.edit_item', $param);
        })->name('owner_edit_item');
    });

    Route::prefix('users')->group( function() {
        Route::get('/', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.owner.master_user', $param); // ini list user
        })->name('owner_user');

        Route::get('/edit', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.owner.edit_user', $param);
        })->name('owner_edit_user');
    });
});


// == MANAJER ==
Route::prefix('manajer')->group( function() {
    Route::get('/', function() {
        return redirect()->route("manajer_masterservice");
    });

    Route::prefix('services')->group( function() {
        Route::get('/', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.manajer.master_service', $param);
        })->name('manajer_service');

        Route::get('/edit', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.manajer.edit_service', $param);
        })->name('manajer_edit_service');
    });

    Route::prefix('items')->group( function() {
        Route::get('/', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.manajer.master_item', $param);
        })->name('manajer_item');

        Route::get('/edit', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.manajer.edit_item', $param);
        })->name('manajer_edit_item');
    });

    Route::prefix('users')->group( function() {
        Route::get('/', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.manajer.master_user', $param);
        })->name('manajer_user');

        Route::get('/edit', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.manajer.edit_user', $param);
        })->name('manajer_edit_user');
    });

    Route::get('/paycheck', function() {
        $param = array();
        $param["loginUser"] = Auth::user();

        return view('pages.manajer.Gajian', $param); // ini list gajian
    })->name('manajer_gajian');
});

