@extends('layouts.app')

@section('title', 'Testimonials - Nugie Skincare & Herbal SR12')

@section('styles')
    <style>
        .botanical-shadow {
            box-shadow: 0 20px 40px rgba(27, 28, 25, 0.05);
        }
        .luxury-gradient {
            background: linear-gradient(135deg, #154212 0%, #2d5a27 100%);
        }
    </style>
@endsection

@section('content')
<div class="pt-12 pb-24 px-8 max-w-7xl mx-auto">
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
                        <img class="w-full h-full object-cover grayscale-[40%]" alt="Before botanical skincare" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqBpi-QUXmscYfocMybxlmNw1VFJ2jh4lVAaemaM2HcgWwI0ZZmyf02bUYKpy5HWXmIyIBZGKT4vNwFvlgQvcaZCZHtX6p0GYKM6unTI-VA2HWg8Pm420uJ0Q6K-xwLWBrKK9RsQe0cr8aVV3-q1reBgx0oWUAB9xDVX1Ywp3HT2V3pmQkxHrgy_HxQeCONSOks_M6B_niKsVGdhzJcio27FdncQxQ4Ulu3a_sOVwnm3OGh2Xdxotl6_a_7gy5KxgXneXydiMIWKU"/>
                        <span class="absolute bottom-2 left-2 bg-surface/80 backdrop-blur px-2 py-1 text-[10px] font-bold rounded">BEFORE</span>
                    </div>
                    <div class="relative">
                        <img class="w-full h-full object-cover" alt="After botanical skincare" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCthkGom5Ptnokj6AYIq8Rz6F3rgSCRPHDWV8YaXNeRc6DV2uEUClhYeU97WaMtPDkMRLTaPjP02D00p-FTEo5K6_oODOH8ZIt0ojqM8dLANMBTCA_WKrHr07iT7juz4JyAF7sD7W2WAZ8HATJcABjEEASniPJdePeDIhK-cfkATcKHOAv3kNbnB1PdLt6swP2dlzUJpCCHgTp1qc6_6Qr4I6R6l1JF6PDafRV0byPkTthFYWAHai5RYTzEU47H1qL4dsl7IHAlngw"/>
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
                    <img class="w-12 h-12 rounded-full object-cover" alt="Siti Rahmawati" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBB0FXqjuGuVbYGPgYtSO6UEyglaktDn00UNf1DmobN9gPy6VBHUh2gAecI3Rz4xwq3fSzJEt2lXdn0wMacJnErJJ-_7vRJz50VJgN8sWJHNgiPilXLA8VA8ioeXvmclVuEV_KgKLmSmwzXTwCHgKQn-tFxSWEHw7F2SRgQw7n-SS5j54oH-5tPz4mVR_vGUniiG-0WlcUqrY2T4JKJAttzaiEx0lNIzttaMwaKPAYg-1mfbP2fPya99Pj5_pL0Sp8fwcSbZpbNNc4"/>
                    <div>
                        <p class="font-bold text-primary">Siti Rahmawati</p>
                        <p class="text-xs text-on-surface-variant font-medium">Verified Customer • Jakarta</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Small Profile Card 1 -->
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

        <!-- Vertical Product Focus -->
        <div class="md:col-span-4 bg-surface-container-lowest rounded-xl overflow-hidden botanical-shadow group">
            <div class="h-64 overflow-hidden relative">
                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Herbal Facial Wash" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnqSw4WzaPANW2b3iMeZOp897qjyyaPdkmrjU5naATPzJteYuzC-6wGhbY3rgrvpDAeJZtHsdVf-W_MpkmppCPoG5Z6BfHxe7mngnapA1CMjw3Dsnf2hq2MgaUy8Sc6rFEqarx51DWEy3MODBVxPlsdh4KFPBZWkoDbgKx1wCMSrKqqoFWdU7uJEPBGq1D2NTpg3lnLknl1DdVEJSC1cxf2-St3zblp9voezBfNBoT42slUhU9j_i1_9KQvzw9zSBNGQXwvf1YHX0"/>
                <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="bg-surface text-primary px-4 py-2 text-xs font-bold rounded-full">VIEW PRODUCT</span>
                </div>
            </div>
            <div class="p-6">
                <h4 class="font-bold text-lg mb-2">Herbal Facial Wash</h4>
                <p class="text-on-surface-variant text-sm mb-4">"It smells like a literal garden and clears away daily pollution without any tightness."</p>
                <div class="flex items-center justify-between border-t border-outline-variant/10 pt-4">
                    <span class="text-xs font-bold text-secondary">Aisyah Putri</span>
                    <div class="flex">
                        <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wide Quote Block -->
        <div class="md:col-span-8 bg-primary rounded-xl p-10 flex flex-col justify-center relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-64 h-64 bg-primary-container rounded-full opacity-20 blur-3xl"></div>
            <div class="relative z-10">
                <span class="material-symbols-outlined text-secondary-fixed text-6xl opacity-30 mb-4">format_quote</span>
                <h2 class="font-headline text-3xl text-white font-medium italic leading-snug mb-8">
                    "The SR12 Lip Care isn't just a balm; it's a treatment. After years of dark, chapped lips, I finally have my natural pink hue back. Truly a miracle from nature."
                </h2>
                <div class="flex items-center gap-4">
                    <div class="w-1px h-12 bg-secondary/50"></div>
                    <div>
                        <p class="text-white font-bold text-lg">Dewi Lestari</p>
                        <p class="text-on-primary-container text-sm">Long-term User since 2021</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video/Interaction Grid Item -->
        <div class="md:col-span-4 bg-secondary-fixed-dim rounded-xl p-8 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-primary">volunteer_activism</span>
                </div>
                <h4 class="font-headline text-xl font-bold mb-3 text-on-secondary-fixed">Share Your Story</h4>
                <p class="text-on-secondary-fixed-variant text-sm mb-6">Join our community of natural beauty enthusiasts. Tag us @NugieSkincare for a chance to be featured!</p>
            </div>
            <button class="w-full bg-primary text-white py-3 rounded-md font-bold text-sm luxury-gradient hover:scale-105 transition-all">Submit Review</button>
        </div>

        <!-- Standard Masonry-style Grid Item -->
        <div class="md:col-span-4 bg-surface-container-low rounded-xl p-6 border border-outline-variant/10">
            <div class="flex items-center gap-4 mb-4">
                <img class="w-12 h-12 rounded-full object-cover" alt="Farah Z." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAexpySm3L-EXiyKBgi-UrhwHFJfSAUHOjcSigxztcrnGW91s5p4UjjS6AksJRLJWG4nX-92WyxA1l4zYUhUKk95LfYrZZ4sp3esxeRkYn7eFkREnOTJ87sfjT-K1eTNEQbCtuFdI_LcMrK_71lCqxM_NYYyllhBI_9Bn2Lv3CEqqEPXY5xCCBOEeQWXPX0dijdRUj4leEsNPKAp-AZWk8nT1RSOrQl0T-TaQRLNlydY28ECj8kI1Voedov1nW3-bLMgcI1s7Q1c2w"/>
                <div>
                    <p class="text-sm font-bold">Farah Z.</p>
                    <p class="text-[10px] text-on-surface-variant font-medium">Verified Buyer</p>
                </div>
            </div>
            <p class="text-sm leading-relaxed text-on-surface-variant italic mb-4">"The Vico Oil is my holy grail for everything. From hair mask to makeup remover, SR12 quality is unmatched by local brands."</p>
            <div class="flex text-secondary">
                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
            </div>
        </div>

        <!-- Standard Masonry-style Grid Item 2 -->
        <div class="md:col-span-4 bg-surface-container-low rounded-xl p-6 border border-outline-variant/10">
            <div class="flex items-center gap-4 mb-4">
                <div class="w-12 h-12 rounded-full bg-stone-300 flex items-center justify-center font-black text-stone-600">RP</div>
                <div>
                    <p class="text-sm font-bold">Rizki P.</p>
                    <p class="text-[10px] text-on-surface-variant font-medium">Verified Buyer</p>
                </div>
            </div>
            <p class="text-sm leading-relaxed text-on-surface-variant italic mb-4">"Started using the Herbal Brightening Cream. It's been 2 weeks and I already see my dark spots fading. Non-sticky and smells like tea!"</p>
            <div class="flex text-secondary">
                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined text-[12px]">star</span>
            </div>
        </div>
    </div>

    <!-- Pagination/Load More -->
    <div class="mt-20 text-center">
        <button class="group inline-flex items-center gap-2 text-primary font-bold border-b-2 border-secondary/30 pb-1 hover:border-secondary transition-all">
            Load More Experiences
            <span class="material-symbols-outlined group-hover:translate-y-1 transition-transform">expand_more</span>
        </button>
    </div>
</div>
@endsection
