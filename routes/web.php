<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello", function(){
    return "Hello Get";
});

Route::post("/hello", function(){
    return "Hello Post";
});

Route::put("/hello", function(){
    return "Hello Put";
});

Route::patch("/hello", function(){
    return "Hello Patch";
});

Route::delete('/hello', function () {
    return "Hello Delete";
});

Route::options("/hello", function(){
    return "Hello Options";
});

Route::get("/sum", function(Request $request){
    $a = (int) $request->query('a', 0);
    $b = (int) $request->query('b', 0);
    return "sum of a and b : " . ($a + $b);
});

Route::get("/say-greeting", function(){
    return view("say-greeting");
});

Route::post("/say-greeting", function(Request $request){
    return "Received Message: " . $request->input("message");
});

Route::match(['get','post'], '/hi', function(){
    return 'Hello get and post';
});

Route::any("/any", function(){
    return "Hello any";
});