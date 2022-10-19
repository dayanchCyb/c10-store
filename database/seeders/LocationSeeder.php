<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            'Aşgabat',
            'Ahal',
            'Balkan',
            'Daşoguz',
            'Lebap',
            'Mary',
        ];
        foreach ($objs as $obj) {
            Location::create([
                'name' => $obj,
            ]);
        }
    }
}
