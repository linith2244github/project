<?php

use App\Http\Controllers\PhoneProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
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

Route::get('show', [TestController::class,'show']);
Route::get('show1', [TestController::class,'show1']);
Route::get('index', [TestController::class,'index']);
Route::get('test', [TestController::class,'test']);
Route::get('test2', [TestController::class,'test2']);
// Route::get('student', [TestController::class,'student']);
Route::post("studentStore", [TestController::class,"studentStore"]);

Route::get("product", [PhoneProductController::class, "read"])->name("read");
Route::get("product/create", [PhoneProductController::class,"create"])->name("create");
Route::post("product/store", [PhoneProductController::class, "store"])->name("store");
// Route::delete("product/destroy/{id}", [PhoneProductController::class, "destroy"])->name("destroy");
Route::get('product/destroy/{id}', [PhoneProductController::class, 'destroy'])->name('destroy');
Route::get("product/edit/{id}", [PhoneProductController::class, "edit"])->name("edit");
Route::post("product/update/{id}", [PhoneProductController::class, "update"])->name("update");

Route::get("student", [StudentController::class, "index"])->name("student.index");