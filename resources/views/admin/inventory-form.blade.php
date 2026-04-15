@extends('layouts.admin')

@php
    $isEdit = isset($product);
    $title = $isEdit ? 'Edit Product' : 'Add New Product';
    $action = $isEdit ? route('admin.inventory.update', $product->id) : route('admin.inventory.store');
@endphp

@section('title', $title)

@section('content')

<div class="max-w-4xl">
    {{-- Header --}}
    <div class="mb-10">
        <a href="{{ route('admin.inventory.index') }}" class="flex items-center gap-2 text-primary font-bold text-sm mb-4 hover:underline">
            <span class="material-symbols-outlined text-sm">arrow_back</span>
            Back to Inventory
        </a>
        <h2 class="serif-header text-3xl font-bold text-primary tracking-tight">{{ $title }}</h2>
        <p class="text-on-surface-variant text-sm mt-1">Fill in the details for your botanical product.</p>
    </div>

    {{-- Form Card --}}
    <div class="bg-surface-container-lowest rounded-xl shadow-[0_20px_40px_rgba(27,28,25,0.05)] p-8">
        <form method="POST" action="{{ $action }}" enctype="multipart/form-data">
            @csrf
            @if($isEdit) @method('PUT') @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Product Image --}}
                <div class="col-span-2">
                    <label for="image" class="block text-xs font-black text-on-surface-variant uppercase tracking-widest mb-2">Product Photo</label>
                    <div class="flex items-center gap-6">
                        @if($isEdit && $product->image)
                        <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0">
                            <img src="{{ Str::startsWith($product->image, ['http://', 'https://']) ? $product->image : Storage::url($product->image) }}" class="w-full h-full object-cover">
                        </div>
                        @endif
                        <input type="file" name="image" id="image" accept="image/*"
                               class="flex-1 text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-primary file:text-white hover:file:bg-primary-container transition-all">
                    </div>
                    <p class="text-[10px] text-on-surface-variant mt-2">Recommended size: 800x800px. JPG, PNG or WEBP.</p>
                    @error('image') <p class="text-error text-[10px] mt-1">{{ $message }}</p> @enderror
                </div>

                {{-- Product Name --}}
                <div class="col-span-2">
                    <label for="name" class="block text-xs font-black text-on-surface-variant uppercase tracking-widest mb-2">Product Name</label>
                    <input type="text" name="name" id="name" required
                           value="{{ old('name', $product->name ?? '') }}"
                           placeholder="e.g. Rose Hydrating Serum"
                           class="w-full bg-surface-container-high border-none focus:ring-1 focus:ring-primary/20 rounded-md py-3 px-4 text-sm font-medium">
                    @error('name') <p class="text-error text-[10px] mt-1">{{ $message }}</p> @enderror
                </div>

                {{-- Category --}}
                <div>
                    <label for="category_id" class="block text-xs font-black text-on-surface-variant uppercase tracking-widest mb-2">Category</label>
                    <select name="category_id" id="category_id" required
                            class="w-full bg-surface-container-high border-none focus:ring-1 focus:ring-primary/20 rounded-md py-3 px-4 text-sm font-medium">
                        <option value="">Select Category</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id', $product->category_id ?? '') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id') <p class="text-error text-[10px] mt-1">{{ $message }}</p> @enderror
                </div>

                {{-- Price --}}
                <div>
                    <label for="price" class="block text-xs font-black text-on-surface-variant uppercase tracking-widest mb-2">Price (IDR)</label>
                    <input type="number" name="price" id="price" required min="0"
                           value="{{ old('price', $product->price ?? '') }}"
                           placeholder="0"
                           class="w-full bg-surface-container-high border-none focus:ring-1 focus:ring-primary/20 rounded-md py-3 px-4 text-sm font-medium">
                    @error('price') <p class="text-error text-[10px] mt-1">{{ $message }}</p> @enderror
                </div>

                {{-- Stock --}}
                <div>
                    <label for="stock" class="block text-xs font-black text-on-surface-variant uppercase tracking-widest mb-2">Stock Level</label>
                    <input type="number" name="stock" id="stock" required min="0"
                           value="{{ old('stock', $product->stock ?? '') }}"
                           placeholder="0"
                           class="w-full bg-surface-container-high border-none focus:ring-1 focus:ring-primary/20 rounded-md py-3 px-4 text-sm font-medium">
                    @error('stock') <p class="text-error text-[10px] mt-1">{{ $message }}</p> @enderror
                </div>

                {{-- Description --}}
                <div class="col-span-2">
                    <label for="description" class="block text-xs font-black text-on-surface-variant uppercase tracking-widest mb-2">Description</label>
                    <textarea name="description" id="description" rows="4"
                              placeholder="Describe the product benefits and ingredients..."
                              class="w-full bg-surface-container-high border-none focus:ring-1 focus:ring-primary/20 rounded-md py-3 px-4 text-sm font-medium">{{ old('description', $product->description ?? '') }}</textarea>
                    @error('description') <p class="text-error text-[10px] mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="mt-10 flex gap-4">
                <button type="submit"
                        class="bg-gradient-to-br from-primary to-primary-container text-white px-8 py-3 rounded-lg font-bold text-sm shadow-md hover:shadow-lg transition-all active:scale-95">
                    {{ $isEdit ? 'Save Changes' : 'Create Product' }}
                </button>
                <a href="{{ route('admin.inventory.index') }}"
                   class="bg-surface-container-high text-on-surface-variant px-8 py-3 rounded-lg font-bold text-sm hover:bg-surface-container-highest transition-all">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>

@endsection
