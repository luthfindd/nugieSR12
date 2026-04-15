@extends('layouts.admin')

@section('title', 'Dashboard Overview')

@section('content')

{{-- Top Header --}}
<header class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
    <div>
        <h2 class="serif-header text-3xl font-bold text-primary tracking-tight">Dashboard Overview</h2>
        <p class="text-on-surface-variant text-sm mt-1">Welcome back, {{ auth()->user()->name ?? 'Admin' }}. Here's what's happening today.</p>
    </div>
</header>

{{-- Stats Bento Grid --}}
<section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
    {{-- Total Products --}}
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_20px_40px_rgba(27,28,25,0.03)] flex flex-col justify-between">
        <div class="flex items-center justify-between mb-4">
            <span class="text-secondary font-black text-xs uppercase tracking-widest">Total Products</span>
            <div class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary">
                <span class="material-symbols-outlined">inventory</span>
            </div>
        </div>
        <div>
            <p class="text-3xl font-bold serif-header text-on-surface">{{ $stats['total_products'] }}</p>
            <p class="text-xs text-green-600 mt-1 font-bold">+12 this week</p>
        </div>
    </div>

    {{-- Active Stock --}}
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_20px_40px_rgba(27,28,25,0.03)] flex flex-col justify-between">
        <div class="flex items-center justify-between mb-4">
            <span class="text-secondary font-black text-xs uppercase tracking-widest">Active Stock</span>
            <div class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined">check_circle</span>
            </div>
        </div>
        <div>
            <p class="text-3xl font-bold serif-header text-on-surface">{{ $stats['active_stock'] }}</p>
            <p class="text-xs text-on-surface-variant mt-1">In-stock SKUs</p>
        </div>
    </div>

    {{-- Low Stock --}}
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_20px_40px_rgba(27,28,25,0.03)] flex flex-col justify-between">
        <div class="flex items-center justify-between mb-4">
            <span class="text-error font-black text-xs uppercase tracking-widest">Low Stock</span>
            <div class="w-10 h-10 rounded-lg bg-error-container/30 flex items-center justify-center text-error">
                <span class="material-symbols-outlined">warning</span>
            </div>
        </div>
        <div>
            <p class="text-3xl font-bold serif-header text-on-surface">{{ $stats['low_stock'] }}</p>
            <p class="text-xs text-error mt-1 font-bold">Action required</p>
        </div>
    </div>

    {{-- Revenue --}}
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-[0_20px_40px_rgba(27,28,25,0.03)] flex flex-col justify-between">
        <div class="flex items-center justify-between mb-4">
            <span class="text-secondary font-black text-xs uppercase tracking-widest">Revenue</span>
            <div class="w-10 h-10 rounded-lg bg-secondary-container/20 flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined">payments</span>
            </div>
        </div>
        <div>
            <p class="text-3xl font-bold serif-header text-on-surface">{{ $stats['total_revenue'] }}</p>
            <p class="text-xs text-green-600 mt-1 font-bold">↑ 8.4% growth</p>
        </div>
    </div>
</section>

{{-- Recent Activity Placeholder --}}
<div class="bg-surface-container-lowest rounded-xl shadow-[0_20px_40px_rgba(27,28,25,0.05)] p-8">
    <h3 class="serif-header text-xl font-bold text-on-surface mb-6">Recent Activities</h3>
    <div class="space-y-6">
        @for ($i = 0; $i < 4; $i++)
        <div class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-sm text-primary">circle</span>
            </div>
            <div>
                <p class="text-sm font-bold text-on-surface">Order #{{ 1234 + $i }} placed by Customer</p>
                <p class="text-xs text-on-surface-variant">2 hours ago</p>
            </div>
        </div>
        @endfor
    </div>
</div>

@endsection
