<?php

namespace App\Http\Controllers\web\Admin;

use App\Helpers\ApiHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebUserController extends Controller
{
    public function index(Request $request)
    {
        $req = Request::create('api/users/getall', 'GET');

        $response = ApiHelper::getResponse($req);

        $users = $response->data;

        // dd($users);

        // dd($users);

        return view('pages.owner.master_user', compact('users'));
    }

    public function doinsert(Request $request)
    {
        $req = Request::create('api/users/insert', 'POST', [
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
            'dob' => $request->dob,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'jk' => $request->jk,
            'role' => $request->role
        ]);

        $response = ApiHelper::getResponse($req);

        return redirect()->back();
    }
}
