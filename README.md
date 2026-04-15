# Nugie Skincare & Herbal SR12 - Laravel E-Commerce Platform

Platform e-commerce modern untuk Nugie Skincare dan Herbal SR12 yang dibangun dengan Laravel dan MySQL.

## 📋 Fitur Utama

- ✨ Tampilan website responsif dan modern dengan Tailwind CSS
- 🛍️ Katalog produk yang dapat dimintanya
- 📂 Sistem kategorisasi produk
- 🔍 Halaman detail produk dengan rekomendasi terkait
- 📱 Mobile-friendly design
- 🎨 Custom color scheme berkualitas premium
- 💾 Database MySQL terstruktur

## 🛠️ Tech Stack

- **Backend**: Laravel 9
- **Database**: MySQL
- **Frontend**: Blade Templating, Tailwind CSS
- **PHP**: 8.0+

## 📦 Struktur Proyek

```
\Nugie sr12\
├── app/
│   ├── Models/
│   │   ├── Category.php
│   │   ├── Product.php
│   │   └── ProductImage.php
│   └── Http/
│       └── Controllers/
│           ├── HomeController.php
│           └── ProductController.php
├── database/
│   ├── migrations/
│   │   ├── 2024_01_01_000001_create_categories_table.php
│   │   ├── 2024_01_01_000002_create_products_table.php
│   │   └── 2024_01_01_000003_create_product_images_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── ProductSeeder.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── pages/
│       │   └── home.blade.php
│       └── products/
│           ├── index.blade.php
│           ├── show.blade.php
│           └── by_category.blade.php
├── routes/
│   └── web.php
├── public/
├── config/
└── .env
```

## 🚀 Instalasi

### 1. Prerequisites
- PHP 8.0 atau lebih tinggi
- Composer
- MySQL Server
- Node.js (untuk asset compilation)

### 2. Setup Database

1. Buat database MySQL baru:
```sql
CREATE DATABASE nugie_skincare;
```

2. Update file `.env`:
```env
DB_DATABASE=nugie_skincare
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Install Dependencies

```bash
composer install
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Jalankan Migrations dan Seeding

```bash
php artisan migrate
php artisan db:seed
```

Ini akan membuat semua tabel dan mengisi database dengan data sample produk.

### 6. Mulai Server Development

```bash
php artisan serve
```

Akses aplikasi di `http://localhost:8000`

## 📊 Database Schema

### Categories Table
- `id`: Primary Key
- `name`: Nama kategori
- `slug`: URL-friendly identifier
- `description`: Deskripsi kategori
- `timestamps`: Created at & Updated at

### Products Table
- `id`: Primary Key
- `name`: Nama produk
- `slug`: URL-friendly identifier
- `description`: Deskripsi lengkap
- `price`: Harga dalam Rupiah
- `category_id`: Foreign Key ke Categories
- `image`: URL gambar produk utama
- `badge`: Label produk (New Arrival, Best Seller, dll)
- `is_featured`: Boolean untuk produk unggulan
- `timestamps`: Created at & Updated at

### Product Images Table
- `id`: Primary Key
- `product_id`: Foreign Key ke Products
- `image_url`: URL gambar alternatif
- `alt_text`: Text alternatif untuk SEO
- `timestamps`: Created at & Updated at

## 🔗 Routes

| Route | Controller | Deskripsi |
|-------|-----------|-----------|
| `/` | HomeController@index | Halaman beranda |
| `/products` | ProductController@index | Daftar semua produk |
| `/products/{slug}` | ProductController@show | Detail produk |
| `/category/{slug}` | ProductController@by_category | Produk per kategori |

## 🎨 Desain & Styling

Aplikasi menggunakan Material Design 3 color system dengan palet warna custom:
- Primary: `#154212` (Hijau gelap)
- Secondary: `#775a19` (Coklat)
- Tertiary: `#735c00` (Emas)

Semua styling menggunakan Tailwind CSS dengan custom configuration.

## 📱 Fitur Responsif

- Grid layout otomatis menyesuaikan dengan ukuran layar
- Navigation bar yang collapsible di mobile
- Product cards yang responsive
- Footer yang adaptif

## 🔧 Customization

### Menambah Produk Baru

```php
// Di ProductSeeder atau controller
Product::create([
    'name' => 'Nama Produk',
    'slug' => 'nama-produk',
    'description' => 'Deskripsi produk',
    'price' => 99000,
    'category_id' => 1,
    'image' => 'https://...',
    'badge' => 'New Arrival',
    'is_featured' => true,
]);
```

### Menambah Kategori Baru

```php
Category::create([
    'name' => 'Kategori Baru',
    'slug' => 'kategori-baru',
    'description' => 'Deskripsi kategori',
]);
```

## 📝 TODO Features

- ✅ Database structure dan models
- ✅ Controllers dan routes
- ✅ Blade views dengan design
- ⏳ Shopping cart functionality
- ⏳ User authentication & registration
- ⏳ Order management system
- ⏳ Payment gateway integration
- ⏳ Admin dashboard
- ⏳ Product reviews & ratings

## 🐛 Troubleshooting

### Jika database tidak terupdate
```bash
php artisan migrate:refresh --seed
```

### Jika class tidak found
```bash
composer dump-autoload
php artisan clear-compiled
php artisan cache:clear
php artisan config:cache
```

### Jika CSS tidak tampil
Pastikan Tailwind CDN sudah aktif di `resources/views/layouts/app.blade.php`

## 📞 Support

Untuk pertanyaan atau bantuan, silakan hubungi:
- WhatsApp: [Hubungi via WhatsApp](https://wa.me/628123456789)
- Instagram: @nugie.skincare

## 📄 License

Developed for Nugie Skincare & Herbal SR12 © 2024

---

**Happy Coding! 🚀**
