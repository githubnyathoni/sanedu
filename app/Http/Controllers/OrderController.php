<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function order(Request $input){
        Order::create([
            'user_id' => Auth::id(),
            'product_id' => 1,
            'payment' => $input->options,
            'total' => 250000,
            'status' => 0
        ]);

        return redirect()->route('dashboard');
    }

    public function verifikasi(){
        return redirect(route('verifikasi'));
    }
}
