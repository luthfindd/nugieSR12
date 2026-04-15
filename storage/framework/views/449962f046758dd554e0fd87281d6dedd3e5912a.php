

<?php $__env->startSection('title', $category->name . ' - Nugie Skincare & Herbal SR12'); ?>

<?php $__env->startSection('content'); ?>
<section class="py-16 bg-background">
    <div class="max-w-7xl mx-auto px-8">
        <div class="flex flex-col md:flex-row justify-between items-start mb-12 gap-8">
            <div class="space-y-2">
                <a href="<?php echo e(route('products.index')); ?>" class="text-secondary hover:text-primary transition-colors inline-flex items-center gap-2 text-sm">
                    <span class="material-symbols-outlined text-sm">arrow_back</span>
                    Semua Kategori
                </a>
                <h1 class="font-headline text-4xl text-on-surface"><?php echo e($category->name); ?></h1>
                <?php if($category->description): ?>
                    <p class="text-on-surface-variant max-w-2xl"><?php echo e($category->description); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-16">
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="group cursor-pointer">
                    <a href="<?php echo e(route('products.show', $product->slug)); ?>" class="block">
                        <div class="relative aspect-[4/5] overflow-hidden rounded-xl bg-surface-container-low mb-6">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                                 alt="<?php echo e($product->name); ?>" 
                                 src="<?php echo e($product->image); ?>"/>
                            <?php if($product->badge): ?>
                                <div class="absolute top-4 <?php echo e($product->badge == 'New Arrival' ? 'left-4 bg-white/80' : 'right-4 bg-secondary text-white'); ?> backdrop-blur-sm px-3 py-1 rounded-full text-[10px] font-bold tracking-widest uppercase">
                                    <?php echo e($product->badge); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="space-y-2">
                            <span class="text-stone-500 text-xs uppercase tracking-widest font-bold"><?php echo e($product->category->name); ?></span>
                            <h3 class="text-lg font-bold text-on-surface"><?php echo e($product->name); ?></h3>
                            <p class="text-secondary font-semibold">Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="col-span-full text-center text-stone-500 py-12">Tidak ada produk di kategori ini</p>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-16">
            <?php echo e($products->links()); ?>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Soutprint.ln\Nugie sr12\resources\views/products/by_category.blade.php ENDPATH**/ ?>