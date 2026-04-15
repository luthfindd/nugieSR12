<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login — SR12 Admin Portal</title>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary":           "#154212",
                        "primary-container": "#2d5a27",
                        "on-primary":        "#ffffff",
                        "secondary":         "#775a19",
                        "secondary-container": "#fed488",
                        "surface":           "#faf9f4",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low":    "#f5f4ef",
                        "surface-container-high":   "#e9e8e3",
                        "on-surface":        "#1b1c19",
                        "on-surface-variant":"#42493e",
                        "outline-variant":   "#c2c9bb",
                        "error":             "#ba1a1a",
                    },
                    fontFamily: {
                        headline: ["Noto Serif"],
                        body:     ["Manrope"],
                    }
                }
            }
        }
    </script>

    <style>
        body { font-family: 'Manrope', sans-serif; }
        .serif { font-family: 'Noto Serif', serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        /* Botanical background pattern */
        .hero-bg {
            background-color: #154212;
            background-image:
                radial-gradient(ellipse at 20% 50%, rgba(188,240,174,0.15) 0%, transparent 60%),
                radial-gradient(ellipse at 80% 20%, rgba(45,90,39,0.4)    0%, transparent 50%),
                radial-gradient(ellipse at 60% 80%, rgba(161,212,148,0.1) 0%, transparent 40%);
        }
        /* Shimmering leaf SVG overlay */
        .leaf-overlay {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cellipse cx='60' cy='60' rx='28' ry='55' fill='none' stroke='rgba(255,255,255,0.04)' stroke-width='1.5'/%3E%3Cellipse cx='60' cy='60' rx='52' ry='28' fill='none' stroke='rgba(255,255,255,0.03)' stroke-width='1'/%3E%3C/svg%3E");
            background-size: 120px 120px;
        }

        /* Input focus ring */
        .field:focus-within .field-icon { color: #154212; }

        /* Floating label animation */
        @keyframes fadeUp {
            from { opacity:0; transform: translateY(6px); }
            to   { opacity:1; transform: translateY(0);   }
        }
        .fade-up { animation: fadeUp 0.5s ease both; }
    </style>
</head>
<body class="min-h-screen bg-surface flex">

    {{-- ===== Left Panel: Branding ===== --}}
    <div class="hidden lg:flex lg:w-1/2 hero-bg leaf-overlay flex-col justify-between p-12 relative overflow-hidden">

        {{-- Decorative circles --}}
        <div class="absolute -top-24 -left-24 w-80 h-80 rounded-full border border-white/5"></div>
        <div class="absolute top-1/3 -right-16 w-64 h-64 rounded-full border border-white/5"></div>
        <div class="absolute -bottom-20 left-1/4 w-96 h-96 rounded-full border border-white/5"></div>

        {{-- Top brand mark --}}
        <div class="relative z-10">
            <div class="inline-flex items-center gap-3 mb-2">
                <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-white text-lg" style="font-variation-settings:'FILL' 1">eco</span>
                </div>
                <span class="text-white font-black text-lg tracking-tight">SR12 Admin</span>
            </div>
            <p class="text-white/50 text-xs font-semibold uppercase tracking-widest">Distributor Portal</p>
        </div>

        {{-- Center hero text --}}
        <div class="relative z-10">
            <p class="text-white/60 text-sm font-semibold uppercase tracking-widest mb-4">Nugie Skincare &amp; Herbal</p>
            <h1 class="serif text-5xl font-bold text-white leading-tight mb-6">
                Nature's Best,<br/>
                <span class="text-[#a1d494]">Managed Together.</span>
            </h1>
            <p class="text-white/60 text-base leading-relaxed max-w-sm">
                Kelola inventori produk botanical skincare dan herbal Anda dari satu dasbor yang elegan dan efisien.
            </p>
        </div>

        {{-- Bottom stats strip --}}
        <div class="relative z-10 grid grid-cols-3 gap-6 border-t border-white/10 pt-8">
            <div>
                <p class="text-2xl font-black text-white serif">1,248</p>
                <p class="text-white/50 text-xs font-semibold uppercase tracking-widest mt-1">Products</p>
            </div>
            <div>
                <p class="text-2xl font-black text-white serif">842</p>
                <p class="text-white/50 text-xs font-semibold uppercase tracking-widest mt-1">In-Stock</p>
            </div>
            <div>
                <p class="text-2xl font-black text-[#a1d494] serif">↑8.4%</p>
                <p class="text-white/50 text-xs font-semibold uppercase tracking-widest mt-1">Growth</p>
            </div>
        </div>
    </div>

    {{-- ===== Right Panel: Login Form ===== --}}
    <div class="flex-1 flex flex-col justify-center items-center px-6 py-12 bg-surface">

        {{-- Mobile brand (shown only on small screens) --}}
        <div class="lg:hidden flex items-center gap-2 mb-10">
            <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center">
                <span class="material-symbols-outlined text-white text-lg" style="font-variation-settings:'FILL' 1">eco</span>
            </div>
            <span class="text-primary font-black text-lg tracking-tight">SR12 Admin</span>
        </div>

        <div class="w-full max-w-md fade-up">

            {{-- Heading --}}
            <div class="mb-8">
                <h2 class="serif text-3xl font-bold text-on-surface tracking-tight">Selamat datang kembali</h2>
                <p class="text-on-surface-variant text-sm mt-2">Masukkan kredensial Anda untuk mengakses panel admin.</p>
            </div>

            {{-- Session Error --}}
            @if (session('error'))
            <div class="mb-6 flex items-start gap-3 bg-red-50 border border-red-200 text-error rounded-xl px-4 py-3 text-sm font-semibold">
                <span class="material-symbols-outlined text-lg shrink-0 mt-0.5">error</span>
                <span>{{ session('error') }}</span>
            </div>
            @endif

            {{-- Validation Errors --}}
            @if ($errors->any())
            <div class="mb-6 flex items-start gap-3 bg-red-50 border border-red-200 text-error rounded-xl px-4 py-3 text-sm font-semibold">
                <span class="material-symbols-outlined text-lg shrink-0 mt-0.5">error</span>
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Login Form --}}
            <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-5">
                @csrf

                {{-- Email --}}
                <div class="field group">
                    <label for="email" class="block text-xs font-black text-on-surface-variant uppercase tracking-widest mb-2">
                        Email
                    </label>
                    <div class="relative">
                        <span class="field-icon material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-lg transition-colors duration-200">
                            alternate_email
                        </span>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            autocomplete="email"
                            required
                            value="{{ old('email') }}"
                            placeholder="admin@sr12.id"
                            class="w-full bg-surface-container-low border border-outline-variant/50 focus:border-primary/50 focus:ring-1 focus:ring-primary/20 rounded-xl py-3.5 pl-12 pr-4 text-sm font-medium text-on-surface placeholder:text-on-surface-variant/50 transition-all duration-200 outline-none"
                        />
                    </div>
                </div>

                {{-- Password --}}
                <div class="field group">
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-xs font-black text-on-surface-variant uppercase tracking-widest">
                            Password
                        </label>
                        <a href="#" class="text-xs font-semibold text-primary hover:underline">Lupa password?</a>
                    </div>
                    <div class="relative">
                        <span class="field-icon material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-lg transition-colors duration-200">
                            lock
                        </span>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            autocomplete="current-password"
                            required
                            placeholder="••••••••"
                            class="w-full bg-surface-container-low border border-outline-variant/50 focus:border-primary/50 focus:ring-1 focus:ring-primary/20 rounded-xl py-3.5 pl-12 pr-12 text-sm font-medium text-on-surface placeholder:text-on-surface-variant/50 transition-all duration-200 outline-none"
                        />
                        <button type="button" id="toggle-password"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-primary transition-colors duration-200"
                                onclick="togglePassword()">
                            <span id="pwd-icon" class="material-symbols-outlined text-lg">visibility_off</span>
                        </button>
                    </div>
                </div>

                {{-- Remember Me --}}
                <div class="flex items-center gap-3">
                    <input
                        id="remember"
                        name="remember"
                        type="checkbox"
                        class="w-4 h-4 rounded border-outline-variant/50 text-primary focus:ring-primary/20"
                    />
                    <label for="remember" class="text-sm font-semibold text-on-surface-variant select-none cursor-pointer">
                        Ingat saya selama 30 hari
                    </label>
                </div>

                {{-- Submit --}}
                <button
                    id="btn-login"
                    type="submit"
                    class="w-full bg-gradient-to-br from-primary to-primary-container text-white font-bold py-3.5 rounded-xl hover:shadow-lg hover:shadow-primary/20 active:scale-[0.98] transition-all duration-300 text-sm tracking-wide flex items-center justify-center gap-2 mt-2">
                    <span class="material-symbols-outlined text-lg" style="font-variation-settings:'FILL' 1">login</span>
                    Masuk ke Dashboard
                </button>
            </form>

            {{-- Divider --}}
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-outline-variant/30"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-surface px-4 text-xs font-semibold text-on-surface-variant uppercase tracking-widest">Admin Only</span>
                </div>
            </div>

            {{-- Help note --}}
            <p class="text-center text-xs text-on-surface-variant">
                Apabila mengalami kendala akses, hubungi
                <a href="mailto:it@sr12.id" class="font-bold text-primary hover:underline">it@sr12.id</a>
            </p>
        </div>

        {{-- Footer --}}
        <p class="mt-12 text-center text-xs font-semibold text-on-surface-variant/60">
            © {{ date('Y') }} Nugie Skincare &amp; Herbal SR12 — All rights reserved.
        </p>
    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const icon  = document.getElementById('pwd-icon');
            if (input.type === 'password') {
                input.type = 'text';
                icon.textContent = 'visibility';
            } else {
                input.type = 'password';
                icon.textContent = 'visibility_off';
            }
        }

        // Button loading state on submit
        document.querySelector('form').addEventListener('submit', function () {
            const btn = document.getElementById('btn-login');
            btn.disabled = true;
            btn.innerHTML = `<span class="material-symbols-outlined text-lg animate-spin">progress_activity</span> Memproses...`;
        });
    </script>
</body>
</html>
