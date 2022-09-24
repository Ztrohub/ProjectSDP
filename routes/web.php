<?php

use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('pages.login');
});

Route::post('/dashboard', function(Request $request){
    $uname = $request ->UNAME;
    $upass =$request ->UPASS;
    $param = $uname;
    if($uname == "admin" && $upass == "admin"){
        // return redirect('/index')->with(['param' => $param]);
        return view('pages.dashboard', compact('param'));
        //return view('pages.index',['param' => $param]); sama aja kek compact
    }
})->name('login');

Route::get('/cart', function(){
    $uname = "admin";
    $param = $uname;

    return view('pages.cart', compact('param'));
})->name('cart');

Route::get('/checkout', function(){
    $uname = "admin";
    $param = $uname;

    return view('pages.checkout', compact('param'));
})->name('checkout');

Route::get('/store', function(){
    $uname = "admin";
    $param = $uname;

    return view('pages.store', compact('param'));
})->name('store');
