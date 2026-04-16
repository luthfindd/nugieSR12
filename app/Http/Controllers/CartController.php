<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display the shopping cart.
     */
    public function index()
    {
        $cartItems = [];
        $total = 0;

        if (session()->has('cart')) {
            foreach (session('cart') as $id => $item) {
                $product = Product::find($id);
                if ($product) {
                    $product->cart_qty = $item['qty'];
                    $product->cart_price = $item['price'];
                    $product->subtotal = $item['qty'] * $item['price'];
                    $cartItems[] = $product;
                    $total += $product->subtotal;
                }
            }
        }

        return view('cart', compact('cartItems', 'total'));
    }

    /**
     * Add item to cart.
     */
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1|max:99'
        ]);

        $product = Product::findOrFail($request->product_id);
        $cart = session('cart', []);

        $id = $product->id;
        if (isset($cart[$id])) {
            $cart[$id]['qty'] += $request->qty;
        } else {
            $cart[$id] = [
                'qty' => $request->qty,
                'price' => $product->price
            ];
        }

        session(['cart' => $cart]);

        return redirect()->back()->withFragment('cart-sidebar')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    /**
     * Update cart item quantity.
     */
    public function update(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1|max:99'
        ]);

        $cart = session('cart', []);
        $id = $request->product_id;

        if (isset($cart[$id])) {
            $cart[$id]['qty'] = $request->qty;
        }

        session(['cart' => $cart]);

        return redirect()->route('cart.index')->with('success', 'Keranjang diperbarui!');
    }

    /**
     * Remove item from cart.
     */
    public function remove($id)
    {
        $cart = session('cart', []);
        unset($cart[$id]);
        session(['cart' => $cart]);

        return redirect()->route('cart.index')->with('success', 'Produk dihapus dari keranjang!');
    }

    /**
     * Clear entire cart.
     */
    public function clear()
    {
        session()->forget('cart');

        return redirect()->route('cart.index')->with('success', 'Keranjang dikosongkan!');
    }
}

