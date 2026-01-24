<?php

namespace App\Http\Controllers;

use App\Models\PhoneProduct;
use Illuminate\Http\Request;

class PhoneProductController extends Controller
{
    public function read(){
        return view("crud.read");
    }
    public function create(){
        return view("crud.create");
    }
    public function store(Request $request){
        $product = new PhoneProduct();
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_qty = $request->product_qty;
        $product->product_image = $request->product_image;
    }
}
