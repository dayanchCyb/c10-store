<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            'Ak',
            'Gara',
            'Sary',
            'Gök',
            'Ýaşyl',
            'Kümüşsow',
            'Altynsow',
            'Çal',
            'Gyzyl',
        ];
        foreach ($objs as $obj) {
            Color::create([
                'name' => $obj,
            ]);
        }
    }
}
