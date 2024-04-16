<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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

Route::get("/admin", [HomeController::class, "indexAdmin"])->middleware('auth')->name('home.admin');

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::resource('products', ProductController::class);
});



require __DIR__.'/auth.php';
