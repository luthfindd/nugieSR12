<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(12);
        $categories = Category::all();
        
        return view('products.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with(['category', 'images'])->firstOrFail();
        $related_products = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();
            
        return view('products.show', [
            'product' => $product,
            'related_products' => $related_products,
        ]);
    }

    public function by_category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->products()->paginate(12);
        
        return view('products.by_category', [
            'category' => $category,
            'products' => $products,
        ]);
    }
}
