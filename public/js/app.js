/**
 * Nugie Skincare & Herbal SR12 - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize components
    console.log('Nugie Skincare application loaded');
    
    // Mobile menu toggle
    const menuToggle = document.querySelector('[data-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    
    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Product filtering
    const filterButtons = document.querySelectorAll('[data-filter]');
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.dataset.filter;
            filterProducts(category);
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && document.querySelector(href)) {
                e.preventDefault();
                document.querySelector(href).scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});

// Filter products by category
function filterProducts(category) {
    const products = document.querySelectorAll('[data-product]');
    products.forEach(product => {
        if (category === 'all' || product.dataset.category === category) {
            product.style.display = 'block';
            product.classList.add('fade-in');
        } else {
            product.style.display = 'none';
        }
    });
}

// Add to cart simulation
function addToCart(productId) {
    const quantity = document.querySelector('[data-quantity]')?.value || 1;
    console.log(`Added ${quantity} of product ${productId} to cart`);
    alert(`Produk ditambahkan ke keranjang (Simulasi)`);
}

// Quantity controls
document.querySelectorAll('[data-qty-decrease]').forEach(btn => {
    btn.addEventListener('click', function() {
        const input = this.parentElement.querySelector('input');
        if (input.value > 1) input.value--;
    });
});

document.querySelectorAll('[data-qty-increase]').forEach(btn => {
    btn.addEventListener('click', function() {
        const input = this.parentElement.querySelector('input');
        input.value++;
    });
});
