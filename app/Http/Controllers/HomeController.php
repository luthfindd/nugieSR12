<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featured_products = Product::with('category')->latest()->take(12)->get();
        $categories = Category::all();
        
        return view('pages.home', [
            'featured_products' => $featured_products,
            'categories' => $categories,
        ]);
    }
}
