

<?php $__env->startSection('title', $product->name . ' - Nugie Skincare & Herbal SR12'); ?>

<?php $__env->startSection('content'); ?>
<section class="py-16 bg-background">
    <div class="max-w-7xl mx-auto px-8">
        <a href="<?php echo e(route('products.index')); ?>" class="text-secondary hover:text-primary transition-colors mb-8 inline-flex items-center gap-2">
            <span class="material-symbols-outlined text-sm">arrow_back</span>
            Kembali ke Produk
        </a>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
            <!-- Product Image -->
            <div class="flex items-center justify-center bg-surface-container-low rounded-xl overflow-hidden h-[500px]">
                <img class="w-full h-full object-cover" 
                     alt="<?php echo e($product->name); ?>" 
                     src="<?php echo e($product->image); ?>"/>
            </div>

            <!-- Product Details -->
            <div class="space-y-8">
                <div>
                    <span class="text-stone-500 text-xs uppercase tracking-widest font-bold"><?php echo e($product->category->name); ?></span>
                    <h1 class="font-headline text-4xl text-on-surface mt-2"><?php echo e($product->name); ?></h1>
                </div>

                <div class="space-y-2">
                    <p class="text-3xl font-bold text-primary">Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></p>
                    <?php if($product->badge): ?>
                        <span class="inline-block <?php echo e($product->badge == 'New Arrival' ? 'bg-white border border-secondary' : 'bg-secondary text-white'); ?> px-4 py-2 rounded-full text-sm font-semibold">
                            <?php echo e($product->badge); ?>

                        </span>
                    <?php endif; ?>
                </div>

                <p class="text-on-surface-variant leading-relaxed">
                    <?php echo e($product->description); ?>

                </p>

                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <button class="w-12 h-12 flex items-center justify-center border border-outline-variant rounded-lg hover:bg-surface-container transition-colors">
                            -
                        </button>
                        <span class="text-2xl font-semibold w-12 text-center">1</span>
                        <button class="w-12 h-12 flex items-center justify-center border border-outline-variant rounded-lg hover:bg-surface-container transition-colors">
                            +
                        </button>
                    </div>

                    <button class="editorial-gradient text-white w-full py-4 rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                        Tambah ke Keranjang
                    </button>
                    <button class="w-full bg-surface-container text-on-surface py-4 rounded-xl font-semibold hover:bg-surface-container-high transition-colors">
                        Beli Sekarang
                    </button>
                </div>

                <!-- Product Info -->
                <div class="border-t border-outline-variant pt-8 space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-on-surface-variant">SKU:</span>
                        <span class="font-semibold"><?php echo e(str_pad($product->id, 5, '0', STR_PAD_LEFT)); ?></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-on-surface-variant">Stok:</span>
                        <span class="font-semibold text-primary">Tersedia</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <?php if($related_products->count() > 0): ?>
            <section class="border-t border-outline-variant pt-16">
                <div class="space-y-8">
                    <h2 class="font-headline text-3xl text-on-surface">Produk Terkait</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-12">
                        <?php $__currentLoopData = $related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="group cursor-pointer">
                                <a href="<?php echo e(route('products.show', $related->slug)); ?>" class="block">
                                    <div class="relative aspect-[4/5] overflow-hidden rounded-xl bg-surface-container-low mb-6">
                                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                                             alt="<?php echo e($related->name); ?>" 
                                             src="<?php echo e($related->image); ?>"/>
                                        <?php if($related->badge): ?>
                                            <div class="absolute top-4 <?php echo e($related->badge == 'New Arrival' ? 'left-4 bg-white/80' : 'right-4 bg-secondary text-white'); ?> backdrop-blur-sm px-3 py-1 rounded-full text-[10px] font-bold tracking-widest uppercase">
                                                <?php echo e($related->badge); ?>

                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="space-y-2">
                                        <span class="text-stone-500 text-xs uppercase tracking-widest font-bold"><?php echo e($related->category->name); ?></span>
                                        <h3 class="text-lg font-bold text-on-surface"><?php echo e($related->name); ?></h3>
                                        <p class="text-secondary font-semibold">Rp <?php echo e(number_format($related->price, 0, ',', '.')); ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Soutprint.ln\Nugie sr12\resources\views/products/show.blade.php ENDPATH**/ ?>