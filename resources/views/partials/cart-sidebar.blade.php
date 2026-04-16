<div id="cart-sidebar" class="fixed top-20 right-0 w-96 h-[calc(100vh-5rem)] bg-white shadow-2xl border-l border-outline-variant transform translate-x-full transition-transform duration-300 ease-in-out z-[70] overflow-y-auto">
    <div class="p-6 border-b border-outline-variant">
        <div class="flex items-center justify-between">
            <h3 class="font-bold text-xl">Keranjang ({{ count(session('cart', [])) }})</h3>
            <button onclick="toggleCartSidebar()" class="text-on-surface-variant hover:text-on-surface text-2xl">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
    </div>
    
    <div class="p-6 space-y-4">
        @if(session()->has('cart'))
            @php $total = 0; @endphp
            @foreach(session('cart') as $id => $item)
                @php $product = \App\Models\Product::find($id); @endphp
                @if($product)
                    <div class="flex gap-4 p-4 rounded-xl bg-surface-container-low">
                        <a href="{{ route('products.show', $product->slug) }}" class="w-20 h-20 rounded-lg overflow-hidden flex-shrink-0">
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                        </a>
                        <div class="flex-1 min-w-0">
                            <a href="{{ route('products.show', $product->slug) }}" class="font-semibold line-clamp-1 block mb-1">{{ $product->name }}</a>
                            <div class="flex items-center justify-between text-sm">
                                <span class="font-bold">Rp {{ number_format($item['price'], 0, ',', '.') }}</span>
                                <span class="font-bold">x {{ $item['qty'] }}</span>
                            </div>
                            <div class="text-right mt-1">
                                <span class="font-bold text-primary text-sm">Rp {{ number_format($item['qty'] * $item['price'], 0, ',', '.') }}</span>
                            </div>
                            <form method="POST" action="{{ route('cart.remove', $id) }}" class="mt-2">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-error text-sm hover:underline" onclick="return confirm('Hapus?')">Hapus</button>
                            </form>
                        </div>
                    </div>
                    @php $total += $item['qty'] * $item['price']; @endphp
                @endif
            @endforeach
            @if($total > 0)
                <div class="pt-4 border-t border-outline-variant p-4 bg-primary/5 rounded-xl">
                    <div class="flex justify-between font-bold text-lg">
                        <span>Total: </span>
                        <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
                    </div>
                    <a href="{{ route('cart.index') }}" class="w-full block mt-4 bg-primary text-white py-3 rounded-xl text-center font-semibold">
                        Lihat Keranjang
                    </a>
                </div>
            @endif
        @else
            <div class="text-center py-12">
                <span class="material-symbols-outlined text-6xl text-on-surface-variant mb-4 block">shopping_bag</span>
                <p class="text-on-surface-variant mb-4">Keranjang kosong</p>
                <a href="{{ route('products.index') }}" class="editorial-gradient text-white px-6 py-2 rounded-lg font-semibold">
                    Belanja Sekarang
                </a>
            </div>
        @endif
    </div>
</div>

<!-- Overlay -->
    <div id="cart-overlay" class="fixed inset-0 z-[69] bg-transparent invisible opacity-0 transition-all duration-300" onclick="toggleCartSidebar()"></div>

<script>
function toggleCartSidebar() {
    const sidebar = document.getElementById('cart-sidebar');
    const overlay = document.getElementById('cart-overlay');
    sidebar.classList.toggle('translate-x-full');
    overlay.classList.toggle('invisible');
    overlay.classList.toggle('opacity-0');
}

// Auto-show sidebar on add success (hash check)
if (window.location.hash === '#cart-sidebar') {
    toggleCartSidebar();
}

// Navbar bag click
document.querySelector('a[href=\"#cart\"]')?.addEventListener('click', function(e) {
    e.preventDefault();
    toggleCartSidebar();
});
</script>
