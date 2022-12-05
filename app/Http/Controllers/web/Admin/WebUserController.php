<?php

namespace App\Http\Controllers\web\Admin;

use App\Helpers\ApiHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebUserController extends Controller
{
    public function index(Request $request)
    {
        $req = Request::create('api/users/getall', 'GET');

        $response = ApiHelper::getResponse($req);

        dd($response);
    }
}
