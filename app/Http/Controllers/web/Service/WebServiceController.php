<?php

namespace App\Http\Controllers\web\Service;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class WebServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::all();
        $customers = Customer::all();
        $teknisis = User::where('user_role', '2')->get();

        return view('pages.master.services.master_service', compact('services', 'customers', 'teknisis'));
    }

    public function insert(Request $request){

        $request->validate([
            'customer' => "required",
            'description' => "required",
            'date' => "required",
            'firstTech' => "required",
            'secondTech' => "required",
            'cost' => "required|numeric|min:1000|bail",
        ], [
            'name.required' => ':attribute tidak boleh kosong!',
            'description.required' => ':attribute tidak boleh kosong!',
            'date.required' => ':attribute tidak boleh kosong!',
            'firstTech.required' => ':attribute tidak boleh kosong!',
            'secondTech.required' => ':attribute tidak boleh kosong!',
            'cost.required' => ':attribute tidak boleh kosong!',
            'cost.numeric' => ':attribute harus berupa angka!',
            'cost.min' => ':attribute minimal Rp 1.000!',
        ], [
            'name' => 'Customer',
            'description' => 'Deskripsi',
            'date' => 'Alamat',
            'firstTech' => 'Nomor telepon',
            'secondTech' => 'Jenis kelamin',
            'cost' => 'Biaya'
        ]);

        $service = Service::create([
            'service_description' => $request->description,
            'service_date' => $request->date,
            'customer_id' => $request->customer,
            'service_cost' => $request->cost,
            'service_status' => '0',
            'service_payment_status' => '0'
        ]);

        $service->Users()->attach($request->firstTech);
        $service->Users()->attach($request->secondTech);

        return redirect()->route('master_service')->with('success');

    }
}
