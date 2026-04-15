<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $__env->yieldContent('title', 'Nugie Skincare & Herbal SR12'); ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .editorial-gradient {
            background: linear-gradient(135deg, #154212 0%, #2d5a27 100%);
        }
        .glass-nav {
            background: rgba(250, 249, 244, 0.8);
            backdrop-filter: blur(12px);
        }
        .ambient-lift {
            box-shadow: 0 20px 40px rgba(27, 28, 25, 0.05);
        }
        .ghost-border {
            outline: 1px solid rgba(194, 201, 187, 0.2);
        }
    </style>

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body class="bg-background text-on-surface font-body selection:bg-secondary-container selection:text-on-secondary-container">
    
    <!-- TopNavBar -->
    <nav class="fixed top-0 w-full z-50 glass-nav shadow-[0_20px_40px_rgba(27,28,25,0.05)]">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-8 py-4">
            <a href="<?php echo e(route('home')); ?>" class="text-2xl font-bold text-[#154212] tracking-tight dark:text-emerald-500 font-headline">
                Nugie Skincare & Herbal SR12
            </a>
            <div class="hidden md:flex items-center space-x-8 font-headline text-lg font-medium">
                <a class="text-[#154212] border-b-2 border-[#775a19] pb-1 hover:scale-105 transition-all duration-300 ease-out" href="<?php echo e(route('home')); ?>">Home</a>
                <a class="text-stone-600 dark:text-stone-400 hover:text-[#154212] hover:scale-105 transition-all duration-300 ease-out" href="<?php echo e(route('products.index')); ?>">Produk</a>
                <a class="text-stone-600 dark:text-stone-400 hover:text-[#154212] hover:scale-105 transition-all duration-300 ease-out" href="#">Tentang Kami</a>
            </div>
            <div class="flex items-center space-x-6 text-[#154212]">
                <button class="hover:scale-105 transition-all duration-300 ease-out">
                    <span class="material-symbols-outlined">shopping_bag</span>
                </button>
                <button class="hover:scale-105 transition-all duration-300 ease-out">
                    <span class="material-symbols-outlined">person</span>
                </button>
            </div>
        </div>
    </nav>

    <main class="mt-20">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="bg-stone-100 dark:bg-stone-950 mt-24">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 px-8 py-12 max-w-7xl mx-auto">
            <div class="space-y-6">
                <div class="text-lg font-bold text-[#154212] font-headline">Nugie Skincare & Herbal SR12</div>
                <p class="text-stone-500 text-sm leading-relaxed">Mitra terpercaya Anda untuk keindahan botani dan solusi kesehatan herbal sejak 2015.</p>
            </div>
            <div class="flex flex-col space-y-4">
                <h4 class="text-on-surface font-bold text-sm uppercase tracking-widest">Belanja</h4>
                <a class="text-stone-500 hover:text-[#154212] transition-colors text-sm" href="#">Skincare</a>
                <a class="text-stone-500 hover:text-[#154212] transition-colors text-sm" href="#">Herbal Supplements</a>
                <a class="text-stone-500 hover:text-[#154212] transition-colors text-sm" href="#">Body & Spa</a>
            </div>
            <div class="flex flex-col space-y-4">
                <h4 class="text-on-surface font-bold text-sm uppercase tracking-widest">Informasi</h4>
                <a class="text-stone-500 hover:text-[#154212] transition-colors text-sm" href="#">Kebijakan Privasi</a>
                <a class="text-stone-500 hover:text-[#154212] transition-colors text-sm" href="#">Syarat & Ketentuan</a>
                <a class="text-stone-500 hover:text-[#154212] transition-colors text-sm" href="#">Hubungi Kami</a>
            </div>
            <div class="space-y-6">
                <h4 class="text-on-surface font-bold text-sm uppercase tracking-widest">Newsletter</h4>
                <div class="relative">
                    <input class="w-full bg-white border-none py-3 px-4 rounded-xl text-sm focus:ring-1 focus:ring-secondary" placeholder="Email Anda" type="email"/>
                    <button class="absolute right-2 top-2 p-1 text-primary">
                        <span class="material-symbols-outlined">east</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="border-t border-stone-200/50 py-8 px-8">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-stone-400">
                <p>© 2024 Nugie Skincare & Herbal SR12. Semua hak dilindungi.</p>
                <div class="flex space-x-6">
                    <a class="hover:text-primary transition-colors" href="#">Instagram</a>
                    <a class="hover:text-primary transition-colors" href="#">TikTok</a>
                    <a class="hover:text-primary transition-colors" href="#">Facebook</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a class="fixed bottom-8 right-8 z-[60] group flex items-center justify-center" href="https://wa.me/628123456789">
        <div class="absolute inset-0 bg-[#fed488]/30 rounded-full scale-125 group-hover:scale-150 transition-transform duration-500"></div>
        <div class="relative w-16 h-16 bg-[#154212] text-white rounded-full flex items-center justify-center shadow-xl hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.438 2.503 1.173 3.463l-.766 2.81 2.873-.754c.916.6 2.007.955 3.178.955 3.18 0 5.765-2.586 5.766-5.766 0-3.18-2.585-5.766-5.765-5.766zm3.376 8.196c-.147.414-.711.758-1.171.805-.459.046-1.012.062-1.607-.128-.35-.112-.792-.27-1.353-.513-2.383-.993-3.929-3.415-4.048-3.573-.119-.158-.968-1.285-.968-2.45 0-1.165.611-1.737.828-1.969.217-.232.474-.29.632-.29.157 0 .315.001.454.007.147.006.345-.056.54.414.2.483.682 1.662.741 1.781.059.119.098.257.019.414-.079.158-.118.257-.236.394-.118.138-.248.307-.355.413-.118.118-.242.247-.104.485.138.237.614 1.011 1.317 1.636.903.803 1.662 1.051 1.899 1.17.237.118.375.099.514-.059.138-.158.592-.691.75-.928.158-.237.316-.198.533-.119.217.079 1.382.651 1.618.769.237.118.394.177.454.276.06.099.06.572-.088.986z"></path>
            </svg>
        </div>
    </a>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH D:\Soutprint.ln\Nugie sr12\resources\views/layouts/app.blade.php ENDPATH**/ ?>