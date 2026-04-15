@extends('layouts.app')

@section('title', 'Home - Nugie Skincare & Herbal SR12')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover brightness-75 scale-105" 
             alt="Cinematic close-up of dark green botanical leaves with soft morning dew" 
             src="https://lh3.googleusercontent.com/aida-public/AB6AXuDteMPKiEvz9CdFBJP-VUkd45KmNfL-vGwzdTqGEAAlaq0P_YBI99eH--7bygu0tFsNOK0JeTMXJjb-6M2ODvwlAc3bjAS6aJ_hpVFyV9wV8KVB92ssaRmhAG_69nj7kEvejBzy75SXe0UTT7WGCaNGloqfPnMZeb239CZwYWqLWicpHC_-BwOrH_KMBtYbn8FiB8Jn0tie3sd_UF-bkUmUzT-zuCNBrxJUkjEbifeY7zyObXmIDFpq7vmf-m7ZDkZfT5o7VpD215E"/>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
        <div class="max-w-2xl space-y-6">
            <h1 class="font-headline text-[3.5rem] leading-[1.1] text-white -tracking-[0.02em]">
                Kebijaksanaan Alam, <br/><span class="italic font-normal">Perawatan Modern.</span>
            </h1>
            <p class="text-lg text-white/90 font-light max-w-lg leading-relaxed">
                Rasakan perpaduan premium antara kebijaksanaan herbal tradisional Indonesia dan sains dermatologi canggih untuk kulit paling bersinar Anda.
            </p>
            <div class="flex items-center space-x-4 pt-4">
                <a href="{{ route('products.index') }}" class="editorial-gradient text-white px-8 py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                    Jelajahi Katalog
                </a>
                <button class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-8 py-3 rounded-xl font-semibold hover:bg-white/20 transition-all duration-300">
                    Cerita Kami
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Marketplace Banners (Asymmetric Layout) -->
<section class="py-24 bg-surface-container-low">
    <div class="max-w-7xl mx-auto px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch">
            <div class="md:col-span-7 bg-[#ff4700]/5 rounded-xl p-12 flex flex-col justify-between ghost-border relative overflow-hidden group">
                <div class="space-y-4 relative z-10">
                    <span class="label-sm text-[#ff4700] tracking-widest font-bold">TOKO RESMI</span>
                    <h2 class="font-headline text-3xl text-on-surface">Temukan kami di Shopee</h2>
                    <p class="text-on-surface-variant max-w-sm">Voucher eksklusif dan flash sale tersedia setiap hari di mall Shopee resmi kami.</p>
                    <a class="inline-flex items-center text-[#ff4700] font-bold mt-4 group-hover:translate-x-2 transition-transform duration-300" href="#">
                        BELANJA SEKARANG <span class="material-symbols-outlined ml-2">arrow_forward</span>
                    </a>
                </div>
                <div class="absolute right-[-10%] top-1/2 -translate-y-1/2 opacity-10 group-hover:scale-110 transition-transform duration-700">
                    <span class="material-symbols-outlined text-[15rem]">shopping_cart</span>
                </div>
            </div>
            <div class="md:col-span-5 bg-[#42b549]/5 rounded-xl p-12 flex flex-col justify-between ghost-border relative overflow-hidden group">
                <div class="space-y-4 relative z-10">
                    <span class="label-sm text-[#42b549] tracking-widest font-bold">DISTRIBUTOR</span>
                    <h2 class="font-headline text-3xl text-on-surface">Tokopedia</h2>
                    <p class="text-on-surface-variant">Pengiriman terpercaya dan pembayaran aman untuk semua kebutuhan herbal Anda.</p>
                    <a class="inline-flex items-center text-[#42b549] font-bold mt-4 group-hover:translate-x-2 transition-transform duration-300" href="#">
                        KUNJUNGI TOKO <span class="material-symbols-outlined ml-2">arrow_forward</span>
                    </a>
                </div>
                <div class="absolute right-[-10%] bottom-[-10%] opacity-10 group-hover:rotate-12 transition-transform duration-700">
                    <span class="material-symbols-outlined text-[12rem]">storefront</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products (Editorial Catalog) -->
<section class="py-32 bg-background">
    <div class="max-w-7xl mx-auto px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
            <div class="space-y-4">
                <span class="text-secondary font-bold tracking-[0.2em] text-sm uppercase">Koleksi Pilihan</span>
                <h2 class="font-headline text-4xl text-on-surface">Apotek Tanda Tangan</h2>
            </div>
            <div class="flex space-x-4">
                <button class="w-12 h-12 rounded-full border border-outline-variant flex items-center justify-center hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="w-12 h-12 rounded-full border border-outline-variant flex items-center justify-center hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-16">
            @forelse($featured_products as $product)
                <!-- Product Card -->
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
                <p class="text-center text-stone-500">Belum ada produk unggulan</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Aesthetic Brand Quote -->
<section class="py-24 bg-surface-container flex items-center justify-center text-center">
    <div class="max-w-3xl px-8 space-y-8">
        <span class="material-symbols-outlined text-secondary text-5xl" style="font-variation-settings: 'FILL' 1;">spa</span>
        <p class="font-headline text-3xl italic text-primary leading-relaxed">
            "Kami percaya bahwa kecantikan sejati ditanam dari dalam, dirawat oleh elemen paling kuat di bumi dan dihormati melalui ritual yang sadar."
        </p>
        <div class="w-16 h-[1px] bg-secondary mx-auto"></div>
        <p class="label-sm font-bold tracking-[0.3em] uppercase text-on-surface-variant">Nugie SR12</p>
    </div>
</section>
@endsection
