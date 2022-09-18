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

Route::get('/dashboard', function(){
    return view('pages.dashboard');
});

Route::post('login', function(Request $request){
    $uname = $request ->UNAME;
    $upass =$request ->UPASS;

    if($uname == "admin" && $upass == "admin"){
        return redirect('/dashboard');
    }
})->name('login');
