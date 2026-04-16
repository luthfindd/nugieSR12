@extends('layouts.app')

@section('title', 'Keranjang Belanja')

@section('content')
<section class="py-16 bg-background min-h-screen">
    <div class="max-w-6xl mx-auto px-8">
        <div class="flex items-center gap-3 mb-12">
            <a href="{{ route('products.index') }}" class="text-secondary hover:text-primary transition-colors inline-flex items-center gap-2">
                <span class="material-symbols-outlined text-lg">arrow_back</span>
                Lanjut Belanja
            </a>
        </div>

        @if (session('success'))
            <div class="mb-8 p-4 bg-green-50 border border-green-200 rounded-xl text-green-800 text-sm font-semibold flex items-start gap-3">
                <span class="material-symbols-outlined mt-0.5">check_circle</span>
                {{ session('success') }}
            </div>
        @endif

        @if (empty($cartItems))
            <div class="text-center py-24">
                <div class="w-24 h-24 mx-auto bg-surface-container rounded-2xl flex items-center justify-center mb-8">
                    <span class="material-symbols-outlined text-4xl text-on-surface-variant">shopping_cart</span>
                </div>
                <h2 class="text-2xl font-bold text-on-surface mb-4">Keranjang Kosong</h2>
                <p class="text-on-surface-variant mb-8">Belum ada produk di keranjang belanja Anda.</p>
                <a href="{{ route('products.index') }}" class="editorial-gradient text-white px-8 py-4 rounded-xl font-bold inline-flex items-center gap-2">
                    <span class="material-symbols-outlined">storefront</span>
                    Mulai Belanja
                </a>
            </div>
        @else
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Cart Items List -->
                <div class="lg:col-span-2 space-y-6">
                    <h1 class="font-headline text-3xl font-bold text-on-surface mb-2">Keranjang Belanja</h1>
                    <p class="text-on-surface-variant">Periksa dan atur produk sebelum checkout</p>

                    @foreach ($cartItems as $item)
                        <div class="flex gap-6 p-6 bg-surface-container-low rounded-2xl border border-outline-variant">
                            <a href="{{ route('products.show', $item->slug) }}" class="w-28 h-28 flex-shrink-0 rounded-xl overflow-hidden bg-surface-container">
                                <img src="{{ $item->image_url }}" alt="{{ $item->name }}" class="w-full h-full object-cover"/>
                            </a>
                            <div class="flex-1 min-w-0">
                                <div class="space-y-2 mb-6">
                                    <a href="{{ route('products.show', $item->slug) }}" class="font-bold text-on-surface hover:text-primary block leading-tight line-clamp-2">
                                        {{ $item->name }}
                                    </a>
                                    <p class="text-on-surface-variant text-sm">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                                </div>

                                <!-- Quantity Controls -->
                                <div class="flex items-center gap-4">
                                    <form method="POST" action="{{ route('cart.update') }}" class="flex items-center gap-2">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                                        <button type="submit" name="qty" value="{{ max(1, $item->cart_qty - 1 ) }}" class="w-12 h-12 border border-outline-variant rounded-xl flex items-center justify-center hover:bg-surface-container text-sm font-bold">-</button>
                                        <span class="w-16 text-center text-lg font-bold">{{ $item->cart_qty }}</span>
                                        <button type="submit" name="qty" value="{{ $item->cart_qty + 1 }}" class="w-12 h-12 border border-outline-variant rounded-xl flex items-center justify-center hover:bg-surface-container text-sm font-bold">+</button>
                                    </form>
                                    <div class="flex gap-2 ml-auto">
                                        <form method="POST" action="{{ route('cart.remove', $item->id) }}" class="flex-shrink-0">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="text-error hover:text-error/80 text-sm font-semibold p-2 transition-colors" onclick="return confirm('Hapus {{ $item->name }}?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <div class="mt-4 pt-4 border-t border-outline-variant">
                                    <span class="text-sm font-bold text-primary">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Clear Cart -->
                    <div class="pt-6">
                        <form method="POST" action="{{ route('cart.clear') }}" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-error font-semibold hover:underline" onclick="return confirm('Kosongkan seluruh keranjang?')">
                                Kosongkan Keranjang
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="space-y-6">
                    <h2 class="font-headline text-xl font-bold text-on-surface">Ringkasan</h2>
                    
                    <div class="bg-surface-container-low p-8 rounded-2xl border border-outline-variant space-y-4">
                        <div class="flex justify-between text-sm">
                            <span>Total Item</span>
                            <span>{{ count($cartItems) }}</span>
                        </div>
                        <div class="flex justify-between text-lg font-bold">
                            <span>Total Belanja</span>
                            <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
                        </div>
                    </div>

                    <button class="editorial-gradient text-white w-full py-4 rounded-xl font-bold text-lg shadow-lg hover:shadow-xl transition-all">
                        Lanjut Checkout
                    </button>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection

