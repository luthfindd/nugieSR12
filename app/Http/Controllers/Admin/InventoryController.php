<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class InventoryController extends Controller
{
    /**
     * Tampilkan halaman inventory admin dengan filter.
     */
    public function index(Request $request)
    {
        $query = Product::with(['category', 'images']);

        // Filter: Search (Name / Description)
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Filter: Category
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        $products = $query->latest()->paginate(15)->withQueryString();
        $categories = Category::all();

        return view('admin.inventory', compact('products', 'categories'));
    }

    /**
     * Form tambah produk baru.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.inventory-form', compact('categories'));
    }

    /**
     * Simpan produk baru.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048', // Main image, Max 2MB
            'images.*'    => 'nullable|image|max:2048', // Additional images
        ]);

        Log::info('Product creation validation passed', ['data' => $data]);

        $data['slug'] = Str::slug($request->name) . '-' . rand(100, 999);

        // Handle Main Image Upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path;
            Log::info('Main image uploaded', ['path' => $path]);
        }

        $product = Product::create($data);
        Log::info('Product created', ['id' => $product->id]);

        // Handle Additional Images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $additionalImage) {
                if ($additionalImage->isValid()) {
                    $path = $additionalImage->store('products', 'public');
                    $product->images()->create([
                        'image_url' => $path,
                        'alt_text' => $product->name . ' - Additional image',
                    ]);
                    Log::info('Additional image uploaded', ['path' => $path, 'product_id' => $product->id]);
                }
            }
        }

        return redirect()->route('admin.inventory.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Form edit produk.
     */
    public function edit(Product $inventory)
    {
        $product = $inventory;
        $categories = Category::all();
        return view('admin.inventory-form', compact('product', 'categories'));
    }

    /**
     * Update produk.
     */
    public function update(Request $request, Product $inventory)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048', // Main image update
            'images.*'    => 'nullable|image|max:2048', // Additional images
        ]);

        Log::info('Product update validation passed', ['product_id' => $inventory->id, 'data' => $data]);

        // Handle Main Image Update
        if ($request->hasFile('image')) {
            // Delete old main image
            if ($inventory->image && Storage::disk('public')->exists($inventory->image)) {
                Storage::disk('public')->delete($inventory->image);
            }
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path;
            Log::info('Main image updated', ['path' => $path, 'product_id' => $inventory->id]);
        }

        $inventory->update($data);
        Log::info('Product updated', ['id' => $inventory->id]);

        // Handle Additional Images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $additionalImage) {
                if ($additionalImage->isValid()) {
                    $path = $additionalImage->store('products', 'public');
                    $inventory->images()->create([
                        'image_url' => $path,
                        'alt_text' => $inventory->name . ' - Additional image',
                    ]);
                    Log::info('Additional image added', ['path' => $path, 'product_id' => $inventory->id]);
                }
            }
        }

        return redirect()->route('admin.inventory.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Hapus produk.
     */
    public function destroy(Product $inventory)
    {
        // Delete image from storage
        if ($inventory->image && Storage::disk('public')->exists($inventory->image)) {
            Storage::disk('public')->delete($inventory->image);
        }

        $inventory->delete();

        return redirect()->route('admin.inventory.index')
            ->with('success', 'Produk berhasil dihapus.');
    }
}
