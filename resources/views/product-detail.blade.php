@extends('layouts.app')

@section('title', $product ? $product->name . ' - Detail' : 'Product Detail')

@section('content')
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
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
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "fontFamily": {
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
        .editorial-shadow {
            box-shadow: 0 20px 40px rgba(27, 28, 25, 0.05);
        }
        .glass-nav {
            backdrop-filter: blur(12px);
        }
        .hero-gradient {
            background: linear-gradient(135deg, #154212 0%, #2d5a27 100%);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body selection:bg-secondary-container">
<!-- Top Navigation Bar -->
<nav class="fixed top-0 w-full z-50 bg-[#faf9f4]/80 dark:bg-stone-900/80 backdrop-blur-md shadow-[0_20px_40px_rgba(27,28,25,0.05)] transition-all duration-300 ease-out">
<div class="flex justify-between items-center max-w-7xl mx-auto px-8 py-4">
<div class="text-2xl font-bold text-[#154212] tracking-tight dark:text-emerald-500 font-headline">
                Nugie Skincare & Herbal SR12
            </div>
<div class="hidden md:flex items-center space-x-8 font-['Noto_Serif'] text-lg font-medium">
<a class="text-stone-600 dark:text-stone-400 hover:text-[#154212] transition-all duration-300 ease-out hover:scale-105" href="#">Home</a>
<a class="text-[#154212] border-b-2 border-[#775a19] pb-1 transition-all duration-300 ease-out hover:scale-105" href="#">Skincare</a>
<a class="text-stone-600 dark:text-stone-400 hover:text-[#154212] transition-all duration-300 ease-out hover:scale-105" href="#">Herbal</a>
<a class="text-stone-600 dark:text-stone-400 hover:text-[#154212] transition-all duration-300 ease-out hover:scale-105" href="#">Best Sellers</a>
<a class="text-stone-600 dark:text-stone-400 hover:text-[#154212] transition-all duration-300 ease-out hover:scale-105" href="#">About Us</a>
</div>
<div class="flex items-center space-x-6">
<span class="material-symbols-outlined text-stone-600 cursor-pointer hover:text-primary">shopping_bag</span>
<span class="material-symbols-outlined text-stone-600 cursor-pointer hover:text-primary">person</span>
</div>
</div>
</nav>
<main class="pt-28 pb-20 px-4 md:px-8 max-w-7xl mx-auto">
<!-- Product Detail Section -->
<section class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-start">
<!-- Left: Product Image & Gallery -->
<div class="lg:col-span-7 sticky top-32">
<div class="relative overflow-hidden rounded-xl aspect-[4/5] bg-surface-container-low group">
<img alt="{{ $product->name ?? 'SR12 Revitalizing Serum' }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ $product->image ?? 'https://lh3.googleusercontent.com/aida-public/AB6AXuAkqqe375Zu_JlRBsl6K0Kcx-GSDGsf5p1PuwpweUPpCOgL18iui2HWNBVR7CEVPTBEWspPI7ZBGs9roOKNR5rVBhGkf1yJDrkH1h765DApUU5WqKz1ZvQWAtjSmAb0XS0tZsyC6IvupxIT5P6m87F-c994v1V85Rn3nfGrPopqKn8cdedCb1WGyPYQgWggig6A_5MR7PgIrp69gP2l50UJZj2n1wc7ocC2u4r5WikqDSS1QH3bf10yL9qPecRQ3s5-nCKafTWv0Jc' }}">
<div class="absolute top-6 left-6">
<span class="bg-secondary text-on-secondary px-3 py-1 text-[0.6875rem] uppercase tracking-widest font-bold rounded-sm">Premium Selection</span>
</div>
</div>
<div class="grid grid-cols-4 gap-4 mt-6">
<div class="aspect-square rounded-lg overflow-hidden bg-surface-container-high cursor-pointer hover:opacity-80 transition-opacity">
<img alt="Texture shot" class="w-full h-full object-cover" data-alt="Extreme close up of clear skincare serum droplets with tiny bubbles on a reflective surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrkcPGcx_xs4ayWZ6V09uYEJ6d8DicTzKFB3KWIMRQ8lc7O0M3cKhQjQLYZkIHq7mrqfMrop3jDZmBWkKsoy-BDtx62tXkgVCBueJbrbvwn3shXopX1YRtWeKXXAvLk386Pw2gho0GeuWbJ3J5QKDSdOhHSimcc8o4SWG-yJduOpTTcKIMKElOJCu6L3J6fhRRdQm_dED0aOu3tdILYwlprwtTPPDK4UNsRoKKz_9hBSX9uPOmeErajFmY7I8cOYqLTKTj8wPPdGE"/>
</div>
<div class="aspect-square rounded-lg overflow-hidden bg-surface-container-high cursor-pointer hover:opacity-80 transition-opacity">
<img alt="Ingredient highlight" class="w-full h-full object-cover" data-alt="Fresh botanical leaves and herbs arranged artistically on a warm stone surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD75rWuh5DcJoatx-oH53gjgLmMGMM7YLheVRrgL2Xk03V4UihzAWpjqpCL66ZEtoP8xgs9fZZJ5dPgt_2YGYWobxcqVxfyryMSvSihjFDMuuNkNfpCsiFAl3WsLLiMgNCjheK0v1lA8BQi0SYLVhaqwbzoK1QfDaAntaR_Lez7OVfoIUihjfsLP_B3ZKawxpfaCerNx4vlQEIYQvuAJPqeqWHIIr4aVzFpB_QaRlGhuIYJ-IvRAUH9kZSBoEf6RuW2vd5E09dhVuc"/>
</div>
<div class="aspect-square rounded-lg overflow-hidden bg-surface-container-high cursor-pointer hover:opacity-80 transition-opacity">
<img alt="Lifestyle shot" class="w-full h-full object-cover" data-alt="Minimalist wooden shelf with skincare bottles and a small green plant in a ceramic pot" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBh_i9wtfT6aq-KAN8UHa-duKyIduz-Sf_afHZi0nAxnBD7F2oxP5za_e_UVpp7bMKRMeZNW7wQ9k8kKJDfq6hHdEFfrSb5fwVqFetPWIX7jevUf3DDmtOUh6J52GrXsWbrk50774YQzn9kBk5pLotYxwg1nLJocTwD9sC5aOG6nz6ZaQHMGu8WglxLYMAw8lvGPnPNG7xtUhrW3Yp9cQQH8DOMR1Zu7E3HwHWb2_Yc9IP3j7lFPE-NTRucj1djBkxKKuh7IO5_mLU"/>
</div>
<div class="aspect-square rounded-lg overflow-hidden bg-surface-container-high cursor-pointer hover:opacity-80 transition-opacity">
<img alt="Packaging" class="w-full h-full object-cover" data-alt="Elegant white and gold product packaging box standing on a cream surface with soft shadows" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWqa3Omu2y3xiN_yUJHc8Nff-6W8wUh5lA2Y-LUlV6emP9TWnP7Xc3UEjXI5CYFKxExPludiDfzWCQJ-mnnGFyieSfM4nDFyxEUwN_cVyXSlEyaGpqHrWNwScH8A4PRo_U0foxew1NGy-0IYg733e7PK24DXEPpZD9c8HR07KiDQd6yr8u_7P6YlI7Amu0apWRNK8u8oHgIoA6UlvgD8_clD7G2_cukwoolmlu9TehWlzNMYYr2ug4G3n_v1dYvo1Ff4iRL1VJMV4"/>
</div>
</div>
</div>
<!-- Right: Product Content -->
<div class="lg:col-span-5 flex flex-col space-y-8">
<div>
<h2 class="text-[0.6875rem] font-bold tracking-[0.1em] text-secondary uppercase mb-3">{{ $product->category->name ?? 'Herbal Skincare Solution' }}</h2>
<h1 class="text-4xl md:text-5xl font-headline font-bold text-on-surface leading-tight tracking-tight mb-4">{{ $product->name ?? 'Revitalizing Glow Serum Gold SR12' }}</h1>
<p class="text-2xl font-headline text-primary font-medium">Rp {{ number_format($product->price ?? 165000, 0, ',', '.') }}</p>
</div>
<div class="space-y-4">
<h3 class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Description</h3>
<p class="text-body text-on-surface-variant leading-relaxed">
                        Formulated with a blend of pure herbal extracts and 24K gold particles, this serum is designed to penetrate deep into the skin layers to provide intense hydration, brighten dark spots, and reduce the appearance of fine lines. Experience the modern apothecary approach to timeless beauty.
                    </p>
</div>
<div class="bg-surface-container-low p-6 rounded-xl space-y-3">
<h3 class="text-sm font-bold text-on-surface-variant uppercase tracking-wider flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-lg">eco</span>
                        Key Ingredients
                    </h3>
<ul class="grid grid-cols-2 gap-y-2 text-sm text-on-surface-variant">
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> 24K Nano Gold</li>
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Vitamin C &amp; E</li>
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Collagen</li>
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Witch Hazel</li>
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Hyaluronic Acid</li>
<li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Aloe Vera Extract</li>
</ul>
</div>
<!-- Call to Action Buttons -->
<div class="flex flex-col gap-4 pt-4">
<a class="hero-gradient text-on-primary py-4 px-8 rounded-md flex items-center justify-center gap-3 font-bold text-sm tracking-wide transition-all hover:opacity-90 editorial-shadow" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">chat</span>
                        Order via WhatsApp
                    </a>
<div class="grid grid-cols-2 gap-4">
<a class="bg-white border-2 border-secondary/10 text-on-surface py-3 px-4 rounded-md flex items-center justify-center gap-2 text-xs font-bold transition-all hover:bg-surface-container-low" href="#">
<span class="material-symbols-outlined text-secondary">shopping_cart</span>
                            Buy on Shopee
                        </a>
<a class="bg-white border-2 border-secondary/10 text-on-surface py-3 px-4 rounded-md flex items-center justify-center gap-2 text-xs font-bold transition-all hover:bg-surface-container-low" href="#">
<span class="material-symbols-outlined text-secondary">local_mall</span>
                            Buy on Tokopedia
                        </a>
</div>
</div>
<!-- Extra Info -->
<div class="pt-8 border-t border-outline-variant/20 flex flex-wrap gap-8">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">verified</span>
<span class="text-xs font-bold uppercase tracking-tighter">BPOM Certified</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">potted_plant</span>
<span class="text-xs font-bold uppercase tracking-tighter">100% Herbal</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">local_shipping</span>
<span class="text-xs font-bold uppercase tracking-tighter">Fast Shipping</span>
</div>
</div>
</div>
</section>
<!-- Related Products Section -->
<section class="mt-32">
<div class="flex justify-between items-end mb-12">
<div>
<h2 class="text-sm font-bold text-secondary uppercase tracking-[0.2em] mb-2">Curated For You</h2>
<h3 class="text-3xl font-headline font-bold">Related Essentials</h3>
</div>
<a class="text-sm font-bold text-on-surface flex items-center gap-2 group" href="#">
                    View Entire Collection 
                    <span class="material-symbols-outlined text-secondary group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
<!-- Related Product 1 -->
<div class="group cursor-pointer">
<div class="aspect-[4/5] rounded-xl overflow-hidden bg-surface-container-lowest mb-6 transition-all duration-300 group-hover:editorial-shadow">
<img alt="Deodorant Spray" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Product shot of a sleek white spray bottle on a minimalist stone surface with soft green shadows" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKLWt2JAdT9MCph7e_HUpcMMTucfI2QBjDeE_t31hbBWnDuzllNBXwNcGeN2UT1Av5EMSXmLHxibvs4xpFsE9inyacOqbwm7tdIw_QnXPWNpTDC2Ae4kYbciqF_xVZd17YJo3HQxwYNO6LloZueMLdz2eHlaqB-NODDDkfjzqOfgebKlzUvHGCO6P_hHXic6bc5yf5vlzrYGZ-QbYkYjhpRWl1Avr0CkV0fpYr8dSRii_tRQ3qgycc4RyNDX3ok-K_B_xopyCg66I"/>
</div>
<p class="text-[0.6875rem] font-bold text-secondary uppercase tracking-widest mb-1">Body Care</p>
<h4 class="text-lg font-headline font-bold text-on-surface mb-1">Deodorant Spray Premium</h4>
<p class="text-sm font-medium text-stone-500">Rp 45.000</p>
</div>
<!-- Related Product 2 -->
<div class="group cursor-pointer">
<div class="aspect-[4/5] rounded-xl overflow-hidden bg-surface-container-lowest mb-6 transition-all duration-300 group-hover:editorial-shadow">
<img alt="Face Toner" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Skincare toner bottle in a lifestyle setting with fresh cucumber slices and water droplets" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8KtUxBVwJpWDC_BYXqsFkosnOZAaCBxI2vbgUo3EadSdSIrccN0mtxSdvWmlDRWFYZLW0ms7ZeomChsxEhuN_Gf66r_MPp267ro5nkck7JJxLr-XSrraJN-rUY8gIXokJgbnQQHDYs5mr_GAz-z-3o3EzU4VlR27s1ZHJTZ33oCi3YjkyA-H1VX75S_ESakJdKufJWi5w7MhHY5GTnU2hKKqpYm9phzRLeLiQFyaecO-QvtniXEI0fnzFOdSaWVAwUvxn21ih31A"/>
</div>
<p class="text-[0.6875rem] font-bold text-secondary uppercase tracking-widest mb-1">Face Care</p>
<h4 class="text-lg font-headline font-bold text-on-surface mb-1">Milk Cleanser Herbal</h4>
<p class="text-sm font-medium text-stone-500">Rp 65.000</p>
</div>
<!-- Related Product 3 -->
<div class="group cursor-pointer">
<div class="aspect-[4/5] rounded-xl overflow-hidden bg-surface-container-lowest mb-6 transition-all duration-300 group-hover:editorial-shadow">
<img alt="Night Cream" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Luxury cosmetic jar with silver lid on a dark velvet surface with dramatic lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrRDWbppmctLoRswAdfBYtp-_LNRhyB_OIom3DbUhKRbUNsymsD-i8GHHF_JlszyDU534F1eT3rS2YWjBBNmEsBFjN9G3OA7V2Scl1CmIVj3ws5pqa4f2C_A7iboXMtDxYmLyPhAN0wyMZ0W-qQ7rtycZJjANbD8xdKal9Y9VzXeiNOB9cmHWssdt4PiGQ2_GHvIW6HRRmMuNDqIT4NmS8qmIcGaRoKAEBsuU95jTDasRmq7-_f02Vrjx1GXg5P8dsEHqBRvVL7HQ"/>
</div>
<p class="text-[0.6875rem] font-bold text-secondary uppercase tracking-widest mb-1">Night Routine</p>
<h4 class="text-lg font-headline font-bold text-on-surface mb-1">Spot Essence Day &amp; Night</h4>
<p class="text-sm font-medium text-stone-500">Rp 120.000</p>
</div>
<!-- Related Product 4 -->
<div class="group cursor-pointer">
<div class="aspect-[4/5] rounded-xl overflow-hidden bg-surface-container-lowest mb-6 transition-all duration-300 group-hover:editorial-shadow">
<img alt="Honey Soap" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Artisanal bar soap with honeycomb texture resting on a rustic wooden soap dish" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGcmEvWwx6QuhifWl1pkDbhE-BiVH-ojF2tUihhybugwiD4_u-B9ayZmGFxKthqqVGPAt6K_0Y7S0EzWkOFpuBBByMKRCPGlNgw4Qht8Ygv0RZGzYp1G-fL-lHKN14_VgFT5p3ANnvo8Eq4k4u_1zH4PO4KlFs5b9tIVszegFFt_c2wRQZkCXz5btei7uUKN-LPl8AiVYpnxw4QNDpb3NJo1wdpd8vDWdVW9-YvjvcjGPsdLoJnymIhFGqVU62wIBV0yq6aSWFt4U"/>
</div>
<p class="text-[0.6875rem] font-bold text-secondary uppercase tracking-widest mb-1">Cleansing</p>
<h4 class="text-lg font-headline font-bold text-on-surface mb-1">Madu Honey Facial Soap</h4>
<p class="text-sm font-medium text-stone-500">Rp 35.000</p>
</div>
</div>
</section>
</main>
<!-- WhatsApp Floating Button -->
<a class="fixed bottom-8 right-8 w-14 h-14 bg-[#154212] text-white rounded-full flex items-center justify-center editorial-shadow hover:scale-110 transition-all duration-300 z-50 group" href="#">
<div class="absolute inset-0 rounded-full bg-secondary-container opacity-30 scale-125 group-hover:scale-150 transition-transform duration-500"></div>
<span class="material-symbols-outlined relative z-10" style="font-variation-settings: 'FILL' 1;">chat</span>
</a>
<!-- Footer -->
<footer class="bg-stone-100 dark:bg-stone-950 w-full border-t-0 mt-20">
<div class="grid grid-cols-1 md:grid-cols-4 gap-8 px-8 py-12 max-w-7xl mx-auto font-['Manrope'] text-sm">
<div class="space-y-6">
<div class="text-lg font-bold text-[#154212]">Nugie Skincare &amp; Herbal SR12</div>
<p class="text-stone-500 leading-relaxed">Your trusted partner for authentic SR12 products. Bringing nature's best to your daily beauty and health routine.</p>
<div class="flex space-x-4">
<span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">public</span>
<span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">share</span>
<span class="material-symbols-outlined text-primary cursor-pointer hover:scale-110 transition-transform">thumb_up</span>
</div>
</div>
<div class="space-y-4">
<h4 class="text-[#154212] font-bold">Quick Links</h4>
<nav class="flex flex-col space-y-2">
<a class="text-stone-500 hover:text-[#154212] transition-colors" href="#">Home</a>
<a class="text-stone-500 hover:text-[#154212] transition-colors" href="#">Skincare</a>
<a class="text-stone-500 hover:text-[#154212] transition-colors" href="#">Herbal</a>
<a class="text-stone-500 hover:text-[#154212] transition-colors" href="#">Best Sellers</a>
</nav>
</div>
<div class="space-y-4">
<h4 class="text-[#154212] font-bold">Legal &amp; Info</h4>
<nav class="flex flex-col space-y-2">
<a class="text-stone-500 hover:text-[#154212] transition-colors" href="#">Privacy Policy</a>
<a class="text-stone-500 hover:text-[#154212] transition-colors" href="#">Terms of Service</a>
<a class="text-stone-500 hover:text-[#154212] transition-colors" href="#">Shipping Info</a>
<a class="text-stone-500 hover:text-[#154212] transition-colors" href="#">Contact Us</a>
</nav>
</div>
<div class="space-y-4">
<h4 class="text-[#154212] font-bold">Newsletter</h4>
<p class="text-stone-500">Subscribe for exclusive offers and herbal beauty tips.</p>
<div class="flex bg-white rounded-md p-1 border border-outline-variant/20">
<input class="bg-transparent border-none focus:ring-0 text-xs w-full px-2" placeholder="Your email" type="email"/>
<button class="bg-primary text-on-primary px-4 py-2 rounded text-xs font-bold">Join</button>
</div>
</div>
</div>
<div class="max-w-7xl mx-auto px-8 py-6 border-t border-outline-variant/10 text-center text-stone-500 text-xs">
            © 2023 Nugie Skincare &amp; Herbal SR12. All rights reserved.
        </div>
</footer>
</body></html>

convert halaman detail produk ini ke blade
</feedback>Environment details:

# VSCode Visible Files
resources/views/product-detail.blade.php

# VSCode Open Tabs
TODO.md
app/Http/Kernel.php
resources/views/pages/testimonials.blade.php
resources/views/testimonials.blade.php
routes/web.php
resources/views/layouts/app.blade.php
resources/views/testimonials-full.blade.php
resources/views/product-detail.blade.php
.gitignore
