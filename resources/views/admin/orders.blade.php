@extends('layouts.admin')

@section('title', 'Orders')

@section('content')

<header class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
    <div>
        <h2 class="serif-header text-3xl font-bold text-primary tracking-tight">Manage Orders</h2>
        <p class="text-on-surface-variant text-sm mt-1">View and process customer transactions.</p>
    </div>
</header>

<div class="bg-surface-container-lowest rounded-xl shadow-[0_20px_40px_rgba(27,28,25,0.05)] p-20 flex flex-col items-center justify-center text-center">
    <div class="w-16 h-16 rounded-full bg-surface-container-low flex items-center justify-center text-primary mb-6">
        <span class="material-symbols-outlined text-3xl">shopping_cart</span>
    </div>
    <h3 class="serif-header text-2xl font-bold text-on-surface mb-2">Orders Module Under Development</h3>
    <p class="text-on-surface-variant max-w-md text-sm">We are currently integrating the payment and fulfillment system. Stay tuned for updates!</p>
</div>

@endsection
