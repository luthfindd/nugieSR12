<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Categories
        $skincare = Category::create([
            'name' => 'Face Care',
            'slug' => 'face-care',
            'description' => 'Produk perawatan wajah premium dengan bahan-bahan alami',
        ]);

        $herbal = Category::create([
            'name' => 'Herbal Tea',
            'slug' => 'herbal-tea',
            'description' => 'Teh herbal tradisional untuk kesehatan dan wellness',
        ]);

        $body = Category::create([
            'name' => 'Body Care',
            'slug' => 'body-care',
            'description' => 'Produk perawatan tubuh dengan formula alami',
        ]);

        $exfoliant = Category::create([
            'name' => 'Exfoliant',
            'slug' => 'exfoliant',
            'description' => 'Produk pengelupasan kulit untuk hasil maksimal',
        ]);

        // Create Products
        Product::create([
            'name' => 'Rose Hip Facial Glow',
            'slug' => 'rose-hip-facial-glow',
            'description' => 'Serum wajah premium dengan ekstrak rosehip organik. Memberikan kilau alami dan menutrisi kulit secara mendalam.',
            'price' => 125000,
            'category_id' => $skincare->id,
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBhwy-8rcMsU3aIJW6yvyVNE2_UtC_0L3MTw0sAVaVRwoEaLMF5KUQdXMrOvGTqzMQaeTVMxXEPLf6RQ8CgbABxp9fKyaG3BwZMfkx7mTCKz81tBZ_vbcYqRg4FxhbZN3MJpeBI-jxiwxErkmkn_aH9gOQzUGWf2GxRt3N2BRm-Huwn5fGhpZFCePrZ7MSVXqJvj3xNGcLdpS7ia-4ISd9oWfd-nTx4iw6pcB-x_9XzzEF0LHEPQFEYddzKrye334KQyhyAKhsOcqg',
            'badge' => 'New Arrival',
            'is_featured' => true,
        ]);

        Product::create([
            'name' => 'Detox Slimming Herbal',
            'slug' => 'detox-slimming-herbal',
            'description' => 'Minuman herbal tradisional untuk detoksifikasi tubuh dan mendukung program penurunan berat badan yang sehat.',
            'price' => 85000,
            'category_id' => $herbal->id,
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDd97uK_WHhOye_6H4eIhChT0ADmttTLF7wF68V1rdCcFx8dVnthSVBpItJnadvr-jdUZbJof3C2iAdpHmtScvMxTHhwQPrKwlO6a65uvUOUxsYIHEYsgS85elYFvzl9Z6LP4UmM7Arhw-5aPr5hgbvIFlQZ4v-waRzomSoJwEdCczm0l36v4WHyCuM-YbJ2p9TKvm6A21VTn9QB_7VWUgrvPHMHaPbVHvbtDxoeF_wHP--nkCxgDTLtVjaiJzo6F7ERWSmakwmVH0',
            'badge' => 'Best Seller',
            'is_featured' => true,
        ]);

        Product::create([
            'name' => 'Madu Herbal Soap',
            'slug' => 'madu-herbal-soap',
            'description' => 'Sabun tradisional buatan tangan dengan madu alami dan ekstrak herbal pilihan untuk kulit yang lembut dan terawat.',
            'price' => 45000,
            'category_id' => $body->id,
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDwdre0Al377G0mKOMHWpnH6sh_PhEO_R6P-HVQgEuw92o4utYBOgFu8Kq2UvupzeDliirQmTQOGjaaZcwEGcJoSUa8tbXfTcYhfI51GAIX69-4hSbA1eLMfXfVY1XxGfiFwKiyccjxEEdwW4AByysU2V_onXu3G7Yw-YdWPg6x-vccxj2dlM4ymp8Wgp3a9mLK2GrWWlzE0hqyMXXLx5nXHiCF_OZenT3semz3Zjipk7r5eZgEUWAjD6YHWj8j47ptq2c5H8x_kJw',
            'is_featured' => true,
        ]);

        Product::create([
            'name' => 'Coffee Herbal Scrub',
            'slug' => 'coffee-herbal-scrub',
            'description' => 'Scrub tubuh dengan butiran kopi alami dan bahan herbal untuk mengelupas kulit mati dan merevitalisasi kulit.',
            'price' => 95000,
            'category_id' => $exfoliant->id,
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAXgUZrNQAOVzUn4Yq_djKQPmekA2PWFiDcU9gP61QOUnXPL7zFnoFs9x94BRoIsI965Vqj_PQFJvbe2al_bRflSY8CUb0JPS4lpvxEu_tcZniq8-65CAhRxr53CYjfE8vZWM1EaGJuntW8pklJbExF7pU7M1Cc-MzhqtJXYd_OaPPcTx7n5nLNZSsj-RuTkWJwZDj9toJZLKeNO_l3-Z0sCEtIaFoS6sH280M4vlLi1u9VVEW83fSmEhUj02oMCi3YJV9aDxxvXYM',
            'is_featured' => true,
        ]);

        // Add more sample products
        Product::create([
            'name' => 'Glow Essence Mask',
            'slug' => 'glow-essence-mask',
            'description' => 'Masker wajah sheet dengan essence kaya nutrisi untuk kulit bercahaya dan segar.',
            'price' => 35000,
            'category_id' => $skincare->id,
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBhwy-8rcMsU3aIJW6yvyVNE2_UtC_0L3MTw0sAVaVRwoEaLMF5KUQdXMrOvGTqzMQaeTVMxXEPLf6RQ8CgbABxp9fKyaG3BwZMfkx7mTCKz81tBZ_vbcYqRg4FxhbZN3MJpeBI-jxiwxErkmkn_aH9gOQzUGWf2GxRt3N2BRm-Huwn5fGhpZFCePrZ7MSVXqJvj3xNGcLdpS7ia-4ISd9oWfd-nTx4iw6pcB-x_9XzzEF0LHEPQFEYddzKrye334KQyhyAKhsOcqg',
        ]);

        Product::create([
            'name' => 'Turmeric Brightening Serum',
            'slug' => 'turmeric-brightening-serum',
            'description' => 'Serum dengan kunyit alami untuk mencerahkan dan meratakan warna kulit.',
            'price' => 155000,
            'category_id' => $skincare->id,
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBhwy-8rcMsU3aIJW6yvyVNE2_UtC_0L3MTw0sAVaVRwoEaLMF5KUQdXMrOvGTqzMQaeTVMxXEPLf6RQ8CgbABxp9fKyaG3BwZMfkx7mTCKz81tBZ_vbcYqRg4FxhbZN3MJpeBI-jxiwxErkmkn_aH9gOQzUGWf2GxRt3N2BRm-Huwn5fGhpZFCePrZ7MSVXqJvj3xNGcLdpS7ia-4ISd9oWfd-nTx4iw6pcB-x_9XzzEF0LHEPQFEYddzKrye334KQyhyAKhsOcqg',
        ]);

        Product::create([
            'name' => 'Herbal Sleep Tea',
            'slug' => 'herbal-sleep-tea',
            'description' => 'Teh herbal khusus untuk kualitas tidur yang lebih baik dengan chamomile dan lavender organik.',
            'price' => 65000,
            'category_id' => $herbal->id,
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDd97uK_WHhOye_6H4eIhChT0ADmttTLF7wF68V1rdCcFx8dVnthSVBpItJnadvr-jdUZbJof3C2iAdpHmtScvMxTHhwQPrKwlO6a65uvUOUxsYIHEYsgS85elYFvzl9Z6LP4UmM7Arhw-5aPr5hgbvIFlQZ4v-waRzomSoJwEdCczm0l36v4WHyCuM-YbJ2p9TKvm6A21VTn9QB_7VWUgrvPHMHaPbVHvbtDxoeF_wHP--nkCxgDTLtVjaiJzo6F7ERWSmakwmVH0',
        ]);

        Product::create([
            'name' => 'Luxury Body Lotion',
            'slug' => 'luxury-body-lotion',
            'description' => 'Losion tubuh premium dengan tekstur ringan dan aroma herbal yang menenangkan.',
            'price' => 85000,
            'category_id' => $body->id,
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDwdre0Al377G0mKOMHWpnH6sh_PhEO_R6P-HVQgEuw92o4utYBOgFu8Kq2UvupzeDliirQmTQOGjaaZcwEGcJoSUa8tbXfTcYhfI51GAIX69-4hSbA1eLMfXfVY1XxGfiFwKiyccjxEEdwW4AByysU2V_onXu3G7Yw-YdWPg6x-vccxj2dlM4ymp8Wgp3a9mLK2GrWWlzE0hqyMXXLx5nXHiCF_OZenT3semz3Zjipk7r5eZgEUWAjD6YHWj8j47ptq2c5H8x_kJw',
        ]);

        Product::create([
            'name' => 'Gentle Facial Scrub',
            'slug' => 'gentle-facial-scrub',
            'description' => 'Scrub wajah lembut dengan butiran alami untuk penggunaan sehari-hari tanpa mengiritasi.',
            'price' => 72000,
            'category_id' => $exfoliant->id,
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAXgUZrNQAOVzUn4Yq_djKQPmekA2PWFiDcU9gP61QOUnXPL7zFnoFs9x94BRoIsI965Vqj_PQFJvbe2al_bRflSY8CUb0JPS4lpvxEu_tcZniq8-65CAhRxr53CYjfE8vZWM1EaGJuntW8pklJbExF7pU7M1Cc-MzhqtJXYd_OaPPcTx7n5nLNZSsj-RuTkWJwZDj9toJZLKeNO_l3-Z0sCEtIaFoS6sH280M4vlLi1u9VVEW83fSmEhUj02oMCi3YJV9aDxxvXYM',
        ]);
    }
}
