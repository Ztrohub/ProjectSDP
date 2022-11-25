<?php

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
    return redirect()->route('login');
});

Route::get('/login', function(){
    return view('pages.login');
})->name('login');

Route::post('/login', function(Request $request){
    $username = $request ->username;
    $password = $request ->password;

    $loginUser = array();
    $loginUser['username'] = $username;
    $loginUser['password'] = $password;
    $request->session()->put('loginUser', $loginUser);
    return redirect()->route('dashboard');
})->name('login');

Route::get('/dashboard', function(Request $request){
    $loginUser = array();
    if($request->session()->has('loginUser')){
        $loginUser = $request->session()->get('loginUser');
    }
    $param = array();
    $param["loginUser"] = $loginUser;

    return view('pages.dashboard', $param);
})->name('dashboard');

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

Route::get('/owner', function () {
    return view('pages.PemilikUsaha.contentPemilikUsaha'); //ini list user
})->name('owner');
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

