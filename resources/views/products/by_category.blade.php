@extends('layouts.app')

@section('title', $category->name . ' - Nugie Skincare & Herbal SR12')

@section('content')
<section class="py-16 bg-background">
    <div class="max-w-7xl mx-auto px-8">
        <div class="flex flex-col md:flex-row justify-between items-start mb-12 gap-8">
            <div class="space-y-2">
                <a href="{{ route('products.index') }}" class="text-secondary hover:text-primary transition-colors inline-flex items-center gap-2 text-sm">
                    <span class="material-symbols-outlined text-sm">arrow_back</span>
                    Semua Kategori
                </a>
                <h1 class="font-headline text-4xl text-on-surface">{{ $category->name }}</h1>
                @if($category->description)
                    <p class="text-on-surface-variant max-w-2xl">{{ $category->description }}</p>
                @endif
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
                                 src="{{ $product->image }}"/>
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
                <p class="col-span-full text-center text-stone-500 py-12">Tidak ada produk di kategori ini</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-16">
            {{ $products->links() }}
        </div>
    </div>
</section>
@endsection
