<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Storage;

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

Route::redirect('/login', '/admin/login')->name('login.redirect');

// Demo pages
Route::get('/testimonials', function () {
    return view('pages.testimonials');
})->name('testimonial');

Route::get('/product-detail/{slug}', function ($slug) {
    $product = \App\Models\Product::where('slug', $slug)->with(['category', 'images'])->firstOrFail();
    $related_products = \App\Models\Product::where('category_id', $product->category_id)
        ->where('id', '!=', $product->id)
        ->take(8)
        ->get();
    return view('product-detail', compact('product', 'related_products'));
})->name('product.detail');

Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{slug}', [ProductController::class, 'show'])->name('show');
    Route::get('/category/{slug}', [ProductController::class, 'by_category'])->name('by_category');
});

Route::controller(\App\Http\Controllers\CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cart.index');
    Route::post('/cart/add', 'add')->name('cart.add');
    Route::post('/cart/update', 'update')->name('cart.update');
    Route::delete('/cart/remove/{id}', 'remove')->name('cart.remove');
    Route::delete('/cart/clear', 'clear')->name('cart.clear');
});

// Debug route for image check
Route::get('/debug/product/{id}', function ($id) {
    $product = \App\Models\Product::with('images')->findOrFail($id);
    $mainPath = $product->image;
    $mainExists = $mainPath && Storage::disk('public')->exists($mainPath);
    $mainUrl = $product->image_url;
    
    $images = $product->images->map(function ($img) {
        $exists = Storage::disk('public')->exists($img->image_url);
        return [
            'image_url' => $img->image_url,
            'exists' => $exists,
        ];
    });
    
    return response()->json([
        'product' => $product->only('id', 'name', 'image'),
        'main_image_path' => $mainPath,
        'main_image_exists' => $mainExists,
        'main_image_url' => $mainUrl,
        'additional_images' => $images,
        'storage_public_url' => Storage::url(''),
    ]);
})->name('debug.product');

/*
|-------------------------------------------------------------------------- 
| Admin Routes
|-------------------------------------------------------------------------- 
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login',  [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    });

    Route::middleware('admin.auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('inventory', InventoryController::class)->names('inventory')->except(['show']);

        Route::get('/orders',    fn () => view('admin.orders'))->name('orders');
        Route::get('/customers', fn () => view('admin.customers'))->name('customers');
    });
});
