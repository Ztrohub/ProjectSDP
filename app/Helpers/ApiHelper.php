<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class ApiHelper
{

    public static function getResponse($request)
    {
        $response = Route::dispatch($request);
        $responseBody = json_decode($response->getContent(), false);
        return $responseBody;
    }

}
