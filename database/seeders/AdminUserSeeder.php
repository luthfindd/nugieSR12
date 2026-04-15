<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Buat akun admin default jika belum ada.
     * Jalankan: php artisan db:seed --class=AdminUserSeeder
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@sr12.id'],
            [
                'name'     => 'Nurlaili SR12',
                'password' => bcrypt('sr12admin2024'),
            ]
        );

        $this->command->info('✅ Admin user siap: admin@sr12.id / sr12admin2024');
    }
}
