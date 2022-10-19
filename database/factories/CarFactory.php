<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $brand = DB::table('brands')->inRandomOrder()->first();
        $color = DB::table('colors')->inRandomOrder()->first();
        $year = DB::table('years')->inRandomOrder()->first();
        $location = DB::table('locations')->inRandomOrder()->first();
        return [
            'brand_id' => $brand->id,
            'color_id' => $color->id,
            'year_id' => $year->id,
            'location_id' => $location->id,
            'credit' => fake()->boolean(30),
            'swap' => fake()->boolean(30),
            'phone' => rand(60000000, 65999999),
            'price' => rand(50, 500),
        ];
    }
}
