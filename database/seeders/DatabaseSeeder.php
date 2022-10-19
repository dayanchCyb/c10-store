<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BrandSeeder::class,
            ColorSeeder::class,
            YearSeeder::class,
            LocationSeeder::class,
        ]);
        for ($i = 1; $i <= 100; $i++) {
            Car::factory()->count(100)->create();
        }
    }
}
