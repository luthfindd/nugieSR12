# PANDUAN SETUP CEPAT - Nugie Skincare & Herbal SR12

## Langkah-langkah Instalasi:

### 1. Setup Database MySQL
```sql
CREATE DATABASE nugie_skincare;
```

### 2. Clone/Download Proyek
Proyek sudah siap di folder ini.

### 3. Update .env File
```bash
# Ubah nilai DB sesuai dengan konfigurasi MySQL Anda
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nugie_skincare
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Install Dependencies PHP
```bash
composer install
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Migrasi Database
```bash
php artisan migrate
```

### 7. Seed Database (Data Sample)
```bash
php artisan db:seed
```

### 8. Jalankan Server
```bash
php artisan serve
```

Server akan berjalan di: **http://localhost:8000**

---

## File-File Penting:

| File | Fungsi |
|------|--------|
| `.env` | Konfigurasi database dan aplikasi |
| `app/Models/` | Model Eloquent (Product, Category, ProductImage) |
| `app/Http/Controllers/` | Controller untuk logika aplikasi |
| `database/migrations/` | Schema database |
| `database/seeders/` | Data sample |
| `resources/views/` | Blade templates |
| `routes/web.php` | Route aplikasi |

---

## Command Berguna:

```bash
# Buat model baru
php artisan make:model Product -m

# Buat controller baru
php artisan make:controller ProductController

# Reset database
php artisan migrate:refresh

# Reset database + seed
php artisan migrate:refresh --seed

# Clear cache
php artisan cache:clear
php artisan config:cache

# Maintenance mode
php artisan down
php artisan up
```

---

## Struktur Database:

### categories
- id
- name
- slug
- description
- timestamps

### products
- id
- name
- slug
- description
- price
- category_id
- image
- badge
- is_featured
- timestamps

### product_images
- id
- product_id
- image_url
- alt_text
- timestamps

---

## Halaman Utama:

| URL | Halaman |
|-----|---------|
| `/` | Beranda |
| `/products` | Daftar Produk |
| `/products/{slug}` | Detail Produk |
| `/category/{slug}` | Produk per Kategori |

---

## Customization:

### Mengubah Warna Brand:
Edit di `resources/views/layouts/app.blade.php` dalam tag `<script id="tailwind-config">`

### Mengubah Logo/Judul:
Ubah teks di navbar di file yang sama

### Menambah Rute Baru:
Edit file `routes/web.php`

### Menambah Halaman Baru:
1. Buat blade file di `resources/views/`
2. Buat controller method di `app/Http/Controllers/`
3. Tambahkan route di `routes/web.php`

---

## Troubleshooting:

**Error: SQLSTATE[HY000]**
- Pastikan MySQL server sudah running
- Cek konfigurasi DB di .env

**Error: Class not found**
```bash
composer dump-autoload
```

**CSS tidak muncul**
- Tailwind CDN sudah terintegrasi di app.blade.php
- Jika offline, install Tailwind CLI

---

## Next Steps:

Fitur yang bisa ditambahkan:
- [ ] Shopping Cart
- [ ] User Authentication
- [ ] Order System
- [ ] Admin Dashboard
- [ ] Payment Gateway
- [ ] Reviews & Ratings
- [ ] Search Functionality

---

**Happy Building! 🎉**
