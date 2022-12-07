<?php

namespace App\Http\Controllers\web\Service;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Service;
use Illuminate\Http\Request;

class WebServiceController extends Controller
{
    public function index(Request $index)
    {
        $services = Service::all();

        return view('pages.master.services.master_service', compact('services'));
    }
}
