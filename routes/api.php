<?php

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->group(function(){
    // == LOGOUT ==
    Route::get('/dologout', function(Request $request){
        $user = $request->user();
        $user->currentAccessToken()->delete();
        Illuminate\Support\Facades\Session::forget("USER_TOKEN_AJA");

        return response()->json([
            'success' => true,
            'message' => "Berhasil logout!"
        ], 200);
    });

    // == QUERY TO GET ALL ITEMS ==
    Route::get('/getallitems', function(){
        return response()->json([
            'success' => true,
            'message' => "Item berhasil didapatkan semua!",
            'data' => App\Models\Item::get()
        ], 200);
    });

    // == QUERY TO INSERT NEW ITEMS ==
    Route::get('/getallitems', function(Request $request){
        $fields = $request->validate([
            'item_name' => "required",
            'item_description' => "required",
            'item_price' => "required|numeric|min:1000|bail",
            'item_stock' => "required|numeric|min:1|bail"
        ], [
            'item_name.required' => ':attribute tidak boleh kosong!',
            'item_description.required' => ':attribute tidak boleh kosong!',
            'item_price.required' => ':attribute tidak boleh kosong!',
            'item_price.numeric' => ':attribute harus berupa angka!',
            'item_price.min' => ':attribute minimal Rp 1.000!',
            'item_stock.required' => ':attribute tidak boleh kosong!',
            'item_stock.numeric' => ':attribute harus berupa angka!',
            'item_stock.min' => ':attribute minimal 1!'
        ], [
            'item_name' => 'Nama barang',
            'item_description' => 'Deskripsi barang',
            'item_price' => 'Harga barang',
            'item_stock' => 'Jumlah stok'
        ]);

        $item = Item::create([
            'item_name' => $fields['item_name'],
            'item_description' => $fields['item_description'],
            'item_price' => $fields['item_price'],
            'item_stock' => $fields['item_stock']
        ]);

        return response()->json([
            'success' => true,
            'message' => "Barang " . $item['item_name'] . " berhasil ditambahkan!"
        ], 200);
    });

    // == QUERY TO UPDATE ITEMS ==
    Route::get('/getallitems', function(Request $request){
        $fields = $request->validate([
            'item_name' => "required",
            'item_description' => "required",
            'item_price' => "required|numeric|min:1000|bail",
            'item_stock' => "required|numeric|min:1|bail"
        ], [
            'item_name.required' => ':attribute tidak boleh kosong!',
            'item_description.required' => ':attribute tidak boleh kosong!',
            'item_price.required' => ':attribute tidak boleh kosong!',
            'item_price.numeric' => ':attribute harus berupa angka!',
            'item_price.min' => ':attribute minimal Rp 1.000!',
            'item_stock.required' => ':attribute tidak boleh kosong!',
            'item_stock.numeric' => ':attribute harus berupa angka!',
            'item_stock.min' => ':attribute minimal 1!'
        ], [
            'item_name' => 'Nama barang',
            'item_description' => 'Deskripsi barang',
            'item_price' => 'Harga barang',
            'item_stock' => 'Jumlah stok'
        ]);

        $item = Item::where("item_id", $request->item_id);
        $item->item_name = $fields['item_name'];
        $item->item_description = $fields['item_description'];
        $item->item_price = $fields['item_price'];
        $item->item_stock = $fields['item_stock'];
        $item->save();

        return response()->json([
            'success' => true,
            'message' => "Barang " . $item['item_name'] . " berhasil diupdate!"
        ], 200);
    });
});


// == LOGIN ==
Route::post('/dologin', function(Request $request){
    $username = $request->username;
    $password = $request->password;
    $user = App\Models\User::where('user_username', $username)->first();

    $success = true;
    $message = "";
    $token = "";
    $data = [];

    if($user){ // PEGAWAI TERDAFTAR DI DATABASE
        if(! Hash::check($password, $user->user_password)){ // PASSWORD SALAH
            $success = false;
            $message = "Password salah!";
        } else {
            $message = "Hallo User!";
            $data = $user;

            $token = $user->createToken('auth_token')->plainTextToken;
            Illuminate\Support\Facades\Session::put("USER_TOKEN_AJA", $token);
        }
    } else {
        $success = false;
        $message = "User tidak ditemukan!";
    }

    return response()->json([
        'success' => $success,
        'message' => $message,
        'token' => $token,
        'data' => $data
    ], 200);
});

// == REGISTER ==
Route::post('/doregister', function(Request $request){
    $fields = $request->validate([
        'name' => "required|max:50|bail",
        'username' => "required|unique:users,user_username|bail",
        'password' => "required|confirmed|bail",
        'dob' => "required",
        'address' => "required",
        'phone_number' => "required|digits_between:8,14|bail",
        'jk' => "required|in:L,P",
        'role' => "required|in:0,1,2,3"
    ], [
        'name.required' => ':attribute tidak boleh kosong!',
        'name.max' => ":attribute maximal 50 karakter!",
        'username.required' => ':attribute tidak boleh kosong!',
        'username.unique' => ':attribute telah dipakai!',
        'password.required' => ':attribute tidak boleh kosong!',
        'password.confirmed' => ':attribute tidak sama!',
        'dob.required' => ':attribute tidak boleh kosong!',
        'address.required' => ':attribute tidak boleh kosong!',
        'phone_number.required' => ":attribute tidak boleh kosong!",
        'phone_number.digits_between' => ":attribute harus 8-14 digit!",
        'jk.required' => ":attribute harus dipilih!",
        'jk.in' => ":attribute tidak valid!",
        'role.required' => ":attribute harus dipilih!",
        'role.in' => ":attribute tidak valid!",
    ], [
        'name' => 'Nama user',
        'username' => 'Username',
        'password' => 'Password',
        'dob' => 'Tanggal lahir',
        'address' => 'Alamat',
        'phone_number' => 'Nomor telepon',
        'jk' => 'Jenis kelamin',
        'role' => 'Role',
    ]);

    $user = User::create([
        'user_name' => $fields['name'],
        'user_username' => $fields['username'],
        'user_password' => Hash::make($fields['password']),
        'user_dob' => DateTime::createFromFormat('d-m-Y', $fields['dob']),
        'user_address' => $fields['address'],
        'user_phone_number' => $fields['phone_number'],
        'user_jk' => $fields['jk'],
        'user_status' => 1,
        'user_role' => $fields['role']
    ]);

    return response()->json([
        'success' => true,
        'message' => "Berhasil registrasi user!",
        'data' => $user
    ], 200);
});
