<?php

use App\Http\Controllers\API\APIItem;
use App\Http\Controllers\web\Admin\WebUserController;
use App\Http\Controllers\web\WebLoginController;
use App\Models\Item;
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
Route::middleware(['auth:sanctum', 'ability:owner'])->prefix('owner')->group( function() {
    Route::get('/', function() {
        return redirect()->route("owner_report");
    });

    Route::get('/report', function() {
        $param = array();
        $param["loginUser"] = Auth::user();

        return view('pages.owner.laporan', $param); // ini list laporan
    })->name('owner_report');

    // == USER ==
    Route::prefix('users')->group( function() {
        Route::get('/', [WebUserController::class, 'index'])->name('master_user');

        Route::get('/edit', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.master.users.edit_user', $param);
        })->name('master_edit_user');
    });

});


// == MANAJER ==
Route::prefix('manager')->group( function() {
    Route::get('/', function() {
        return redirect()->route("master_service");
    });

    Route::prefix('paycheck')->group( function() {
        Route::get('/', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.manager.paycheck', $param); // ini list gajian
        })->name('manager_paycheck');

        Route::get('/edit', function() {
            $param = array();
            $param["loginUser"] = Auth::user();

            return view('pages.manager.edit_paycheck', $param); // ini list gajian
        })->name('manager_edit_paycheck');
    });
});


// == SERVICE ==
Route::prefix('services')->group( function() {
    Route::get('/', function() {
        $param = array();
        $param["loginUser"] = Auth::user();

        return view('pages.master.services.master_service', $param);
    })->name('master_service');

    Route::get('/edit', function() {
        $param = array();
        $param["loginUser"] = Auth::user();

        return view('pages.master.services.edit_service', $param);
    })->name('master_edit_service');
});


// == ITEM ==
Route::middleware(['auth:sanctum', 'ability:owner,manajer'])->prefix('items')->group( function() {
    Route::get('/', function() {
        $param = array();
        $param["loginUser"] = Auth::user();
        $param["items"] = Item::withTrashed()->get();

        return view('pages.master.items.master_item', $param);
    })->name('master_item');

    Route::get('/edit', function(Request $request) {
        $param = array();
        $param["loginUser"] = Auth::user();
        $param["item"] = Item::where('item_id', $request->item_id)->first();

        return view('pages.master.items.edit_item', $param);
    })->name('master_edit_item');

    Route::post('/insert', [APIItem::class, "insert"])->name('master_insert_item');

    Route::post('/update', [APIItem::class, "update"])->name('master_update_item');

    Route::get('/delete', [APIItem::class, "delete"])->name('master_delete_item');

    Route::get('/restore', [APIItem::class, "restore"])->name('master_restore_item');
});
