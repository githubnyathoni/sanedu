<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(){
        $id = Order::where('user_id', Auth::id())->first('status');
        $user = User::find(Auth::id());
        $product = Product::first();
        if($id == null){
            return view('dashboard',compact('user', 'product'));
        }
        else if($id->status == 0){
            
            return view('dashboard-v2',compact('user', 'product'));
        }

    }
}
