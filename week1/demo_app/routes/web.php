<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Type\Integer;

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

Route::get("/", [HomeController::class, "index"])->name('home');

Route::get("/shop/{id}/{name}", function (int $id, string $name) {
    return view('shop', ['id'=> $id,'name' => $name]);
})->name('shop');

Route::get("/contact", function () {
    return view('contact');
})->name('contact');

Route::resource('products', ProductController::class);