<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
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
    return view('shop', ['id' => $id, 'name' => $name]);
})->name('shop');

Route::get("/contact", function () {
    return view('contact');
})->name('contact');

Route::get('products', [ProductController::class, "indexList"]);
Route::get('products/{id}', [ProductController::class, "showProduct"])->name('products.showProduct');

Route::resource('categories', CategoryController::class);

Route::resource('comments', CommentController::class);

Route::get("/admin", [HomeController::class, "indexAdmin"])->name('home.admin');


Route::prefix('admin')->group(function() {
    Route::resource('products', ProductController::class);
});
