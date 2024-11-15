<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan ini
use Illuminate\Support\Carbon;

class DriverSeeder extends Seeder
{
    public function run()
    {
        DB::table('drivers')->insert([
            [
                'name' => 'John Doe',
                'experience_years' => 5,
                'average_speed' => 65.5,
                'total_trips' => 120,
                'accidents_count' => 2,
                'rating' => 4.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Jane Smith',
                'experience_years' => 3,
                'average_speed' => 58.3,
                'total_trips' => 80,
                'accidents_count' => 0,
                'rating' => 4.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
