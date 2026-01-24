<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PhoneProductController extends Controller
{
    public function read(){
        $products = Product::all();    
        return view("CRUD.read",["products"=> $products]);
    }
    public function create(){
        return view("CRUD.create");
    }
    public function store(Request $request){
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->price = $request->product_price;
        $product->quantity = $request->product_qty;
        $product->save();
        return redirect()->route("read");
    }
    public function destroy($id){
        $products = Product::find($id);
        $products->delete();
        return redirect()->route("read");
    // return redirect()->back()->with('success', 'Deleted');
    }
    public function edit($id){
        $products = Product::find($id);
        return view("CRUD.edit",["product"=> $products]);
    }
    public function update(Request $request, $id){
        // dd($request->all());
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->price = $request->product_price;
        $product->quantity = $request->product_qty;
        $product->update();
        return redirect()->route("read");
    }
}
