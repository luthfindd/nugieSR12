@extends('layouts.app')

@section('title', 'Produk - Nugie Skincare & Herbal SR12')

@section('content')
<section class="py-16 bg-background">
    <div class="max-w-7xl mx-auto px-8">
        <div class="flex flex-col md:flex-row justify-between items-start mb-12 gap-8">
            <div class="space-y-4">
                <span class="text-secondary font-bold tracking-[0.2em] text-sm uppercase">Koleksi Lengkap</span>
                <h1 class="font-headline text-4xl text-on-surface">Semua Produk</h1>
            </div>
            
            <!-- Filter by Category -->
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('products.index') }}" 
                   class="px-4 py-2 rounded-full border border-outline-variant hover:bg-surface-container transition-colors text-sm">
                    Semua
                </a>
                @foreach($categories as $category)
                    <a href="{{ route('category', $category->slug) }}" 
                       class="px-4 py-2 rounded-full border border-outline-variant hover:bg-surface-container transition-colors text-sm">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-16">
            @forelse($products as $product)
                <div class="group cursor-pointer">
                    <a href="{{ route('products.show', $product->slug) }}" class="block">
                        <div class="relative aspect-[4/5] overflow-hidden rounded-xl bg-surface-container-low mb-6">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                                 alt="{{ $product->name }}" 
                                 src="{{ $product->image_url }}"/>
                            @if($product->badge)
                                <div class="absolute top-4 {{ $product->badge == 'New Arrival' ? 'left-4 bg-white/80' : 'right-4 bg-secondary text-white' }} backdrop-blur-sm px-3 py-1 rounded-full text-[10px] font-bold tracking-widest uppercase">
                                    {{ $product->badge }}
                                </div>
                            @endif
                        </div>
                        <div class="space-y-2">
                            <span class="text-stone-500 text-xs uppercase tracking-widest font-bold">{{ $product->category->name }}</span>
                            <h3 class="text-lg font-bold text-on-surface">{{ $product->name }}</h3>
                            <p class="text-secondary font-semibold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                    </a>
                </div>
            @empty
                <p class="col-span-full text-center text-stone-500 py-12">Tidak ada produk ditemukan</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-16">
            {{ $products->links() }}
        </div>
    </div>
</section>
@endsection
