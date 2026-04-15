@extends('layouts.admin')

@section('title', 'Customers')

@section('content')

<header class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
    <div>
        <h2 class="serif-header text-3xl font-bold text-primary tracking-tight">Customer Database</h2>
        <p class="text-on-surface-variant text-sm mt-1">Manage your relationship with your loyal customers.</p>
    </div>
</header>

<div class="bg-surface-container-lowest rounded-xl shadow-[0_20px_40px_rgba(27,28,25,0.05)] p-20 flex flex-col items-center justify-center text-center">
    <div class="w-16 h-16 rounded-full bg-surface-container-low flex items-center justify-center text-primary mb-6">
        <span class="material-symbols-outlined text-3xl">group</span>
    </div>
    <h3 class="serif-header text-2xl font-bold text-on-surface mb-2">Customers Module Under Development</h3>
    <p class="text-on-surface-variant max-w-md text-sm">Customer analytics and CRM features are being prepared for your botanical skincare empire.</p>
</div>

@endsection
