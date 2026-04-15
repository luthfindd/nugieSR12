<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Tampilkan dashboard admin dengan ringkasan data.
     */
    public function index()
    {
        // Simulasi data atau ambil dari DB
        $stats = [
            'total_products' => Product::count(),
            'active_stock'   => Product::where('stock', '>', 0)->count(),
            'low_stock'      => Product::where('stock', '<', 20)->count(),
            'total_revenue'  => 'Rp 42.5M' // Placeholder sementara
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
