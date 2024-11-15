<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil RoleSeeder
        $this->call(RoleSeeder::class);

        // Memanggil seeder lain seperti Users dan lainnya
        $this->seedUsers();
        $this->callSeeders();
    }

    private function seedUsers(): void
{
    // Gunakan `firstOrCreate` untuk membuat pengguna jika belum ada
    $user = User::firstOrCreate(
        ['email' => 'superadmin@admin.com'], // Kondisi pencarian
        [
            'name' => 'Super Admin',
            'password' => bcrypt('password'),
        ] // Data untuk diisi jika tidak ditemukan
    );

    // Menetapkan peran 'super_admin' jika pengguna baru dibuat atau belum memiliki peran
    if ($user->wasRecentlyCreated || !$user->hasRole('super_admin')) {
        $user->assignRole('super_admin');
    }
}


    private function callSeeders(): void
    {
        $this->call([
            DriverSeeder::class,
        ]);
    }
}