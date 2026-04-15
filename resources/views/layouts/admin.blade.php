<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'Admin Panel') — SR12 Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-container-low": "#f5f4ef",
                        "on-secondary": "#ffffff",
                        "error": "#ba1a1a",
                        "secondary": "#775a19",
                        "on-tertiary-container": "#4f3d00",
                        "on-surface-variant": "#42493e",
                        "primary-fixed": "#bcf0ae",
                        "tertiary-fixed": "#ffe088",
                        "outline": "#72796e",
                        "on-secondary-container": "#785a1a",
                        "tertiary": "#735c00",
                        "on-primary-fixed": "#002201",
                        "on-surface": "#1b1c19",
                        "surface-dim": "#dbdad5",
                        "secondary-container": "#fed488",
                        "surface-container": "#efeee9",
                        "tertiary-fixed-dim": "#e9c349",
                        "surface-container-highest": "#e3e3de",
                        "on-error-container": "#93000a",
                        "inverse-on-surface": "#f2f1ec",
                        "background": "#faf9f4",
                        "on-primary-fixed-variant": "#23501e",
                        "on-tertiary-fixed-variant": "#574500",
                        "outline-variant": "#c2c9bb",
                        "on-primary": "#ffffff",
                        "secondary-fixed": "#ffdea5",
                        "surface-container-lowest": "#ffffff",
                        "primary-container": "#2d5a27",
                        "surface-tint": "#3b6934",
                        "on-background": "#1b1c19",
                        "surface-variant": "#e3e3de",
                        "on-primary-container": "#9dd090",
                        "surface-container-high": "#e9e8e3",
                        "inverse-surface": "#30312e",
                        "primary": "#154212",
                        "tertiary-container": "#cca730",
                        "secondary-fixed-dim": "#e9c176",
                        "on-secondary-fixed": "#261900",
                        "primary-fixed-dim": "#a1d494",
                        "on-tertiary": "#ffffff",
                        "on-error": "#ffffff",
                        "surface-bright": "#faf9f4",
                        "error-container": "#ffdad6",
                        "inverse-primary": "#a1d494",
                        "surface": "#faf9f4",
                        "on-secondary-fixed-variant": "#5d4201",
                        "on-tertiary-fixed": "#241a00"
                    },
                    borderRadius: {
                        DEFAULT: "0.125rem",
                        lg: "0.25rem",
                        xl: "0.5rem",
                        full: "0.75rem"
                    },
                    fontFamily: {
                        headline: ["Noto Serif"],
                        body: ["Manrope"],
                        label: ["Manrope"]
                    }
                },
            },
        }
    </script>

    <style>
        body { font-family: 'Manrope', sans-serif; }
        .serif-header { font-family: 'Noto Serif', serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        /* Sidebar active link indicator */
        .nav-active {
            background-color: #e7e5e4; /* stone-200 */
            color: #154212;
            border-radius: 0.375rem;
        }
        /* Smooth sidebar transitions */
        aside { transition: transform 0.3s ease; }
    </style>

    @yield('styles')
</head>
<body class="bg-surface text-on-surface selection:bg-secondary-container">

<div class="flex min-h-screen">

    {{-- ===== SideNavBar ===== --}}
    <aside id="sidebar" class="hidden md:flex flex-col h-screen w-64 bg-stone-100 py-6 px-4 shrink-0 fixed left-0 top-0 z-40 overflow-y-auto">

        {{-- Brand --}}
        <div class="mb-10 px-4">
            <h1 class="text-xl font-black text-[#154212] tracking-tight">SR12 Admin</h1>
            <p class="text-xs font-semibold text-stone-500 uppercase tracking-widest mt-1">Distributor Portal</p>
        </div>

        {{-- Navigation --}}
        <nav class="flex-1 space-y-1">
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center space-x-3 px-4 py-2 rounded-md transition-all duration-200 font-semibold text-sm
                      {{ request()->routeIs('admin.dashboard') ? 'bg-stone-200 text-[#154212]' : 'text-stone-500 hover:bg-stone-200/60' }}">
                <span class="material-symbols-outlined text-lg">dashboard</span>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.inventory.index') }}"
               class="flex items-center space-x-3 px-4 py-2 rounded-md transition-all duration-200 font-semibold text-sm
                      {{ request()->routeIs('admin.inventory.*') ? 'bg-stone-200 text-[#154212]' : 'text-stone-500 hover:bg-stone-200/60' }}">
                <span class="material-symbols-outlined text-lg">inventory_2</span>
                <span>Inventory</span>
            </a>

            <a href="{{ route('admin.orders') }}"
               class="flex items-center space-x-3 px-4 py-2 rounded-md transition-all duration-200 font-semibold text-sm
                      {{ request()->routeIs('admin.orders') ? 'bg-stone-200 text-[#154212]' : 'text-stone-500 hover:bg-stone-200/60' }}">
                <span class="material-symbols-outlined text-lg">shopping_cart</span>
                <span>Orders</span>
            </a>

            <a href="{{ route('admin.customers') }}"
               class="flex items-center space-x-3 px-4 py-2 rounded-md transition-all duration-200 font-semibold text-sm
                      {{ request()->routeIs('admin.customers') ? 'bg-stone-200 text-[#154212]' : 'text-stone-500 hover:bg-stone-200/60' }}">
                <span class="material-symbols-outlined text-lg">group</span>
                <span>Customers</span>
            </a>

            <a href="#"
               class="flex items-center space-x-3 px-4 py-2 rounded-md transition-all duration-200 font-semibold text-sm text-stone-500 hover:bg-stone-200/60">
                <span class="material-symbols-outlined text-lg">monitoring</span>
                <span>Analytics</span>
            </a>

            <a href="#"
               class="flex items-center space-x-3 px-4 py-2 rounded-md transition-all duration-200 font-semibold text-sm text-stone-500 hover:bg-stone-200/60">
                <span class="material-symbols-outlined text-lg">settings</span>
                <span>Settings</span>
            </a>
        </nav>

        {{-- User Profile & Logout --}}
        <div class="mt-auto border-t border-stone-200/50 pt-6 px-4">
            <div class="flex items-center space-x-3 mb-6">
                <div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-primary" style="font-variation-settings:'FILL' 1">account_circle</span>
                </div>
                <div>
                    <p class="text-sm font-bold text-on-surface">{{ auth()->user()->name ?? 'Admin' }}</p>
                    <p class="text-[10px] text-stone-500 uppercase font-black">Super Admin</p>
                </div>
            </div>

            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit"
                        class="flex items-center space-x-3 text-stone-500 hover:text-error transition-colors duration-300 w-full text-left font-semibold text-sm">
                    <span class="material-symbols-outlined text-lg">logout</span>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </aside>

    {{-- ===== Main Content Area ===== --}}
    <main class="flex-1 md:ml-64 p-8 min-h-screen">
        @yield('content')

        {{-- Footer --}}
        <footer class="mt-12 py-8 border-t border-surface-container-low flex flex-col md:flex-row justify-between items-center text-xs font-semibold text-on-surface-variant gap-4">
            <p>© {{ date('Y') }} Nugie Skincare &amp; Herbal SR12. All rights reserved.</p>
            <div class="flex gap-8">
                <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
                <a class="hover:text-primary transition-colors" href="#">Shipping Info</a>
                <a class="hover:text-primary transition-colors" href="#">Contact Us</a>
            </div>
        </footer>
    </main>
</div>

{{-- WhatsApp Floating Action Button --}}
<button class="fixed bottom-8 right-8 w-14 h-14 bg-primary text-white rounded-full flex items-center justify-center shadow-lg hover:scale-105 transition-transform duration-300 group z-50 overflow-hidden">
    <div class="absolute inset-0 bg-secondary-container/30 opacity-0 group-hover:opacity-100 transition-opacity"></div>
    <span class="material-symbols-outlined text-2xl relative z-10" style="font-variation-settings:'FILL' 1">chat</span>
</button>

@yield('scripts')
</body>
</html>
