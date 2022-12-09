<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Midtrans\Snap as Snap;
use Midtrans\Config as MidtransConfig;

class MidtransController extends Controller
{
    public function pay(Request $request)
    {
        $user = User::find(Auth::user()->user_id);

        $temp = $user->Carts()->get();

        $items = [];

        $total = 0;
        foreach ($temp as $t){
            $items[] = [
                'id' => $t->item_id,
                'price' => $t->item_price/100,
                'quantity' => $t->pivot->item_qty,
                'name' => $t->item_name
            ];
            $total += $t->pivot->item_qty * $t->item_price;
        }

        $total /= 100;

        $statement = DB::select("SHOW TABLE STATUS LIKE 'htrans'");
        $nextId = $statement[0]->Auto_increment;
        $nextId = str_pad($nextId, 6, '0', STR_PAD_LEFT);

        MidtransConfig::$serverKey = env('MIDTRANS_SERVER_KEY');
        MidtransConfig::$clientKey = env('MIDTRANS_CLIENT_KEY');
        MidtransConfig::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        MidtransConfig::$isSanitized = env('MIDTRANS_IS_SANITIZED');
        MidtransConfig::$is3ds = env('MIDTRANS_IS_3DS');

        $transaction = [
            'transaction_details' => [
                'order_id' => $nextId,
                'gross_amount' => $total,
            ],
            'customer_details' => [
                'first_name' => $user->user_name,
            ],
            'item_details' => $items,
            'enable_payments' => ['gopay', 'bank_transfer', 'credit_card'],
        ];

        $paymentURL = Snap::createTransaction($transaction)->redirect_url;



        return redirect($paymentURL);
    }
}