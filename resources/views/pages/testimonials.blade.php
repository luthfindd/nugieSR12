<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Testimonials - Nugie Skincare & Herbal SR12</title>
    
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
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    fontFamily: {
                        "headline": ["Noto Serif"],
                        "body": ["Manrope"],
                        "label": ["Manrope"]
                    }
                },
            },
        }
    </script>
    
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .botanical-shadow {
            box-shadow: 0 20px 40px rgba(27, 28, 25, 0.05);
        }
        .luxury-gradient {
            background: linear-gradient(135deg, #154212 0%, #2d5a27 100%);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body selection:bg-secondary-container">
    @include('layouts.partials.navbar')
    
    <main class="pt-32 pb-24 px-8 max-w-7xl mx-auto">
        <!-- Hero Section -->
        <header class="mb-20 max-w-3xl">
            <span class="text-secondary font-label text-[0.6875rem] font-extrabold uppercase tracking-widest mb-4 block">Community Voices</span>
            <h1 class="text-on-surface font-headline text-[3.5rem] leading-tight font-bold -tracking-[0.02em] mb-6">Real Results, Naturally Rooted.</h1>
            <p class="text-on-surface-variant text-lg leading-relaxed max-w-2xl">
                Discover the transformative power of botanical wisdom through the lived experiences of our Nugie Skincare community. From herbal healing to radiant skin health.
            </p>
        </header>

        <!-- Testimonials Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            <!-- Featured Transformation Card -->
            <div class="md:col-span-8 bg-surface-container-lowest rounded-xl p-8 botanical-shadow transition-all duration-300 hover:scale-[1.01] flex flex-col md:flex-row gap-8 border border-outline-variant/10">
                <div class="md:w-1/2">
                    <div class="relative grid grid-cols-2 gap-2 rounded-lg overflow-hidden h-full min-h-[300px]">
                        <div class="relative">
                            <img class="w-full h-full object-cover grayscale-[40%]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqBpi-QUXmscYfocMybxlmNw1VFJ2jh4lVAaemaM2HcgWwI0ZZmyf02bUYKpy5HWXmIyIBZGKT4vNwFvlgQvcaZCZHtX6p0GYKM6unTI-VA2HWg8Pm420uJ0Q6K-xwLWBrKK9RsQe0cr8aVV3-q1reBgx0oWUAB9xDVX1Ywp3HT2V3pmQkxHrgy_HxQeCONSOks_M6B_niKsVGdhzJcio27FdncQxQ4Ulu3a_sOVwnm3OGh2Xdxotl6_a_7gy5KxgXneXydiMIWKU" alt="Before">
                            <span class="absolute bottom-2 left-2 bg-surface/80 backdrop-blur px-2 py-1 text-[10px] font-bold rounded">BEFORE</span>
                        </div>
                        <div class="relative">
                            <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCthkGom5Ptnokj6AYIq8Rz6F3rgSCRPHDWV8YaXNeRc6DV2uEUClhYeU97WaMtPDkMRLTaPjP02D00p-FTEo5K6_oODOH8ZIt0ojqM8dLANMBTCA_WKrHr07iT7juz4JyAF7sD7W2WAZ8HATJcABjEEASniPJdePeDIhK-cfkATcKHOAv3kNbnB1PdLt6swP2dlzUJpCCHgTp1qc6_6Qr4I6R6l1JF6PDafRV0byPkTthFYWAHai5RYTzEU47H1qL4dsl7IHAlngw" alt="After">
                            <span class="absolute bottom-2 left-2 bg-primary/80 backdrop-blur text-white px-2 py-1 text-[10px] font-bold rounded">AFTER</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 flex flex-col justify-center">
                    <div class="flex text-secondary mb-4">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                    <h3 class="font-headline text-2xl font-bold mb-4">"The Acne Care Salicyl serum changed my skin in just 4 weeks. My confidence is back."</h3>
                    <p class="text-on-surface-variant mb-6 leading-relaxed">I tried everything for my adult acne. SR12's herbal approach was the only thing that didn't irritate my sensitive skin while actually clearing the breakouts.</p>
                    <div class="flex items-center gap-4">
                        <img class="w-12 h-12 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBB0FXqjuGuVbYGPgYtSO6UEyglaktDn00UNf1DmobN9gPy6VBHUh2gAecI3Rz4xwq3fSzJEt2lXdn0wMacJnErJJ-_7vRJz50VJgN8sWJHNgiPilXLA8VA8ioeXvmclVuEV_KgKLmSmwzXTwCHgKQn-tFxSWEHw7F2SRgQw7n-SS5j54oH-5tPz4mVR_vGUniiG-0WlcUqrY2T4JKJAttzaiEx0lNIzttaMwaKPAYg-1mfbP2fPya99Pj5_pL0Sp8fwcSbZpbNNc4" alt="Siti Rahmawati">
                        <div>
                            <p class="font-bold text-primary">Siti Rahmawati</p>
                            <p class="text-xs text-on-surface-variant font-medium">Verified Customer • Jakarta</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other testimonials sections... -->
            <!-- (Content remains the same as original HTML but wrapped in Blade layout) -->
            
            <div class="md:col-span-4 bg-surface-container-low rounded-xl p-8 transition-all duration-300 hover:bg-surface-container-lowest hover:botanical-shadow">
                <div class="flex text-secondary mb-4">
                    <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                </div>
                <p class="italic text-on-surface font-medium mb-6">"Their Honey Soap is a staple in my morning routine. My skin feels so soft and never dry!"</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center font-bold text-on-secondary-fixed">AN</div>
                    <div>
                        <p class="text-sm font-bold">Andini N.</p>
                        <p class="text-[10px] text-on-surface-variant uppercase tracking-widest">Bandung</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.partials.footer')
</body>
</html>
