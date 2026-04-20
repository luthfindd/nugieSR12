@extends('layouts.admin')

@section('title', 'Product Inventory')

@section('content')

{{-- Top Header Action Bar --}}
<header class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
    <div>
        <h2 class="serif-header text-3xl font-bold text-primary tracking-tight">Product Inventory</h2>
        <p class="text-on-surface-variant text-sm mt-1">Manage your botanical skincare and herbal stock levels.</p>
    </div>
    <div class="flex items-center gap-3">
        <button class="bg-surface-container-high text-on-surface px-4 py-2.5 rounded-lg flex items-center gap-2 hover:bg-surface-container-highest transition-all duration-300 font-semibold text-sm">
            <span class="material-symbols-outlined text-sm">file_download</span>
            Export CSV
        </button>
        <a href="{{ route('admin.inventory.create') }}" class="bg-gradient-to-br from-primary to-primary-container text-white px-6 py-2.5 rounded-lg flex items-center gap-2 shadow-sm hover:shadow-md transition-all duration-300 font-bold text-sm">
            <span class="material-symbols-outlined text-sm">add</span>
            Add New Product
        </a>
    </div>
</header>

{{-- Success Alert --}}
@if(session('success'))
<div class="mb-8 flex items-center gap-3 bg-green-50 border border-green-200 text-green-700 rounded-xl px-6 py-4 text-sm font-bold animate-fade-in">
    <span class="material-symbols-outlined">check_circle</span>
    {{ session('success') }}
</div>
@endif

{{-- Product Table Card --}}
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_20px_40px_rgba(27,28,25,0.05)]">


    {{-- Table Filters --}}
    <form method="GET" action="{{ route('admin.inventory.index') }}" class="p-6 flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-surface-container-low">
        <div class="relative flex-1 max-w-md">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-lg">search</span>
            <input
                name="search"
                value="{{ request('search') }}"
                class="w-full bg-surface-container-high border-none focus:ring-1 focus:ring-primary/20 rounded-md py-2.5 pl-10 text-sm font-medium"
                placeholder="Search name or description..."
                type="text"
            />
        </div>
        <div class="flex items-center gap-4">
            <select name="category" onchange="this.form.submit()" class="bg-surface-container-high border-none rounded-md text-sm font-semibold py-2.5 px-4 pr-10 focus:ring-1 focus:ring-primary/20">
                <option value="">All Categories</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="bg-surface-container-high p-2.5 rounded-md hover:bg-surface-container-highest transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant">filter_list</span>
            </button>
        </div>
    </form>

    {{-- Product Table --}}
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-surface-container-low/50 text-on-surface-variant uppercase text-[10px] font-black tracking-widest">
                    <th class="px-6 py-4">Product Details</th>
                    <th class="px-6 py-4">Category</th>
                    <th class="px-6 py-4 text-right">Price</th>
                    <th class="px-6 py-4 text-center">Stock Level</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-surface-container-low">

                @forelse ($products ?? [] as $product)
                <tr class="hover:bg-surface-container-low transition-colors duration-200">
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-lg bg-surface overflow-hidden shrink-0">
                                @if ($product->image_url)
                                    <img src="{{ $product->image_url }}"
                                         alt="{{ $product->name }}"
                                         class="w-full h-full object-cover"
                                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"/>
                                    <div class="w-full h-full flex items-center justify-center bg-surface-container-high text-[8px] p-1 text-on-surface-variant hidden">
                                        {{ basename($product->image ?? '') }}<br><span class="text-[6px]">broken</span>
                                    </div>
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-surface-container-high text-xs text-on-surface-variant">
                                        <span class="material-symbols-outlined">image</span><br><span class="text-[10px]">No image</span>
                                    </div>
                                @endif
                                @if($product->images->count() > 0)
                                    <div class="text-[8px] text-primary mt-1">+{{ $product->images->count() }} more</div>
                                @endif
                            </div>
                            <div>
                                <p class="text-sm font-bold text-on-surface">{{ $product->name }}</p>
                                <p class="text-[10px] font-medium text-on-surface-variant uppercase tracking-wider">SKU: {{ $product->sku ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-1 rounded">
                            {{ $product->category->name ?? '—' }}
                        </span>
                    </td>
                    <td class="px-6 py-5 text-right font-bold text-sm text-on-surface">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </td>
                    <td class="px-6 py-5">
                        @php
                            $stock = $product->stock ?? 0;
                            $maxStock = 100;
                            $pct = min(100, round(($stock / $maxStock) * 100));
                            $isLow = $stock < 20;
                            $barColor = $isLow ? 'bg-error' : 'bg-primary';
                            $textColor = $isLow ? 'text-error' : 'text-on-surface';
                        @endphp
                        <div class="w-32 mx-auto">
                            <div class="flex justify-between text-[10px] mb-1 font-bold">
                                <span class="{{ $textColor }}">{{ $stock }} units</span>
                                <span class="{{ $isLow ? 'text-error' : 'text-on-surface-variant' }}">{{ $pct }}%</span>
                            </div>
                            <div class="w-full bg-surface-container-high h-1.5 rounded-full overflow-hidden">
                                <div class="{{ $barColor }} h-full" style="width: {{ $pct }}%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        @if ($product->is_published ?? false)
                            <span class="flex items-center gap-2 text-xs font-bold text-green-700">
                                <span class="w-2 h-2 rounded-full bg-green-500"></span>Published
                            </span>
                        @else
                            <span class="flex items-center gap-2 text-xs font-bold text-on-surface-variant">
                                <span class="w-2 h-2 rounded-full bg-surface-dim"></span>Draft
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-5 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.inventory.edit', $product->id) }}"
                               class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-surface-container-high text-on-surface-variant transition-colors" title="Edit">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </a>
                            <form method="POST" action="{{ route('admin.inventory.destroy', $product->id) }}" onsubmit="return confirm('Hapus produk ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-error/10 text-error transition-colors" title="Delete">
                                    <span class="material-symbols-outlined text-lg">delete</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                {{-- Static demo rows when no DB data --}}
                <tr class="hover:bg-surface-container-low transition-colors duration-200">
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-lg bg-surface-container-high flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-primary">spa</span>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-on-surface">Rose Hydrating Serum</p>
                                <p class="text-[10px] font-medium text-on-surface-variant uppercase tracking-wider">SKU: SR-ROS-01</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-1 rounded">Skincare</span>
                    </td>
                    <td class="px-6 py-5 text-right font-bold text-sm text-on-surface">Rp 185.000</td>
                    <td class="px-6 py-5">
                        <div class="w-32 mx-auto">
                            <div class="flex justify-between text-[10px] mb-1 font-bold">
                                <span>45 units</span>
                                <span class="text-on-surface-variant">45%</span>
                            </div>
                            <div class="w-full bg-surface-container-high h-1.5 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-[45%]"></div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <span class="flex items-center gap-2 text-xs font-bold text-green-700">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span>Published
                        </span>
                    </td>
                    <td class="px-6 py-5 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-surface-container-high text-on-surface-variant transition-colors" title="Edit">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-error/10 text-error transition-colors" title="Delete">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-surface-container-low transition-colors duration-200">
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-lg bg-surface-container-high flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-secondary">local_cafe</span>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-on-surface">Glow Herbal Infusion</p>
                                <p class="text-[10px] font-medium text-on-surface-variant uppercase tracking-wider">SKU: SR-TEA-04</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <span class="text-xs font-bold text-secondary bg-secondary/10 px-2 py-1 rounded">Herbal</span>
                    </td>
                    <td class="px-6 py-5 text-right font-bold text-sm text-on-surface">Rp 95.000</td>
                    <td class="px-6 py-5">
                        <div class="w-32 mx-auto">
                            <div class="flex justify-between text-[10px] mb-1 font-bold">
                                <span class="text-error">8 units</span>
                                <span class="text-error">8%</span>
                            </div>
                            <div class="w-full bg-surface-container-high h-1.5 rounded-full overflow-hidden">
                                <div class="bg-error h-full w-[8%]"></div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <span class="flex items-center gap-2 text-xs font-bold text-secondary">
                            <span class="w-2 h-2 rounded-full bg-secondary"></span>Low Stock
                        </span>
                    </td>
                    <td class="px-6 py-5 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-surface-container-high text-on-surface-variant transition-colors" title="Edit">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-error/10 text-error transition-colors" title="Delete">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-surface-container-low transition-colors duration-200">
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-lg bg-surface-container-high flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-tertiary">water_drop</span>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-on-surface">Night Repair Elixir</p>
                                <p class="text-[10px] font-medium text-on-surface-variant uppercase tracking-wider">SKU: SR-OIL-12</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-1 rounded">Skincare</span>
                    </td>
                    <td class="px-6 py-5 text-right font-bold text-sm text-on-surface">Rp 220.000</td>
                    <td class="px-6 py-5">
                        <div class="w-32 mx-auto">
                            <div class="flex justify-between text-[10px] mb-1 font-bold">
                                <span>112 units</span>
                                <span class="text-on-surface-variant">100%</span>
                            </div>
                            <div class="w-full bg-surface-container-high h-1.5 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-full"></div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <span class="flex items-center gap-2 text-xs font-bold text-on-surface-variant">
                            <span class="w-2 h-2 rounded-full bg-surface-dim"></span>Draft
                        </span>
                    </td>
                    <td class="px-6 py-5 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-surface-container-high text-on-surface-variant transition-colors" title="Edit">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-error/10 text-error transition-colors" title="Delete">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="p-6 border-t border-surface-container-low flex items-center justify-between">
        <p class="text-xs font-semibold text-on-surface-variant">
            @if (isset($products) && method_exists($products, 'total'))
                Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} products
            @else
                Showing 1 to 3 of 1,248 products
            @endif
        </p>
        <div class="flex items-center gap-2">
            @if (isset($products) && method_exists($products, 'links'))
                {{ $products->links() }}
            @else
            {{-- Static demo pagination --}}
            <button class="w-8 h-8 flex items-center justify-center rounded-md border border-outline-variant/30 text-on-surface-variant hover:bg-surface-container-low transition-colors">
                <span class="material-symbols-outlined text-sm">chevron_left</span>
            </button>
            <button class="w-8 h-8 flex items-center justify-center rounded-md bg-primary text-white text-xs font-bold">1</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-surface-container-low text-xs font-bold text-on-surface-variant transition-colors">2</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-surface-container-low text-xs font-bold text-on-surface-variant transition-colors">3</button>
            <span class="text-xs text-on-surface-variant">...</span>
            <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-surface-container-low text-xs font-bold text-on-surface-variant transition-colors">42</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-md border border-outline-variant/30 text-on-surface-variant hover:bg-surface-container-low transition-colors">
                <span class="material-symbols-outlined text-sm">chevron_right</span>
            </button>
            @endif
        </div>
    </div>

</div>

@endsection
