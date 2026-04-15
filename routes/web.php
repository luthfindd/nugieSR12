<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\InventoryController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Demo pages
Route::get('/testimonial', function () {
    return view('testimonials');
})->name('testimonial');

Route::get('/product-detail/{slug?}', function ($slug = null) {
    $product = $slug ? \App\Models\Product::where('slug', $slug)->first() : \App\Models\Product::first();
    return view('product-detail', compact('product'));
})->name('product.detail');


Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{slug}', [ProductController::class, 'show'])->name('show');
});

Route::get('/category/{slug}', [ProductController::class, 'by_category'])->name('category');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// Guest-only: Login page & processing
Route::prefix('admin')->name('admin.')->group(function () {

    // Unauthenticated routes
    Route::get('/login',  [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    // Authenticated routes
    Route::middleware('admin.auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        // Dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

        // Inventory (Full CRUD)
        Route::resource('inventory', App\Http\Controllers\Admin\InventoryController::class)->names('inventory')->except(['show']);

        // Orders & Customers Placeholders
        Route::get('/orders',    fn () => view('admin.orders'))->name('orders');
        Route::get('/customers', fn () => view('admin.customers'))->name('customers');
    });
});
