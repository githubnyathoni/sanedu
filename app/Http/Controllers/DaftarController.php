<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DaftarController extends Controller
{

    public function index(){
        $product = Product::first();
        return view('daftar')->with('product', $product);
    }
}
