<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            'BMW',
            'Audi',
            'Toyota',
            'Nissan',
            'Mercedes-Benz',
            'Kia',
            'Hyundai',
            'Lexus',
            'Mini',
            'Opel',
            'Lada',
        ];
        foreach ($objs as $obj) {
            Brand::create([
                'name' => $obj,
            ]);
        }
    }
}
