<?php
namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class GetRole
{
    public static function get($user_id)
    {
        if ($user_id == '0')
            return "Owner";
        elseif ($user_id == '1')
            return "Manajer";
        elseif ($user_id == '2')
            return "Teknisi";
        else return "Kasir";
    }
}
