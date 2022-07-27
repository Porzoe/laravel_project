<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\vegetable;

class VegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        vegetable::create([
            'name' => 'cabbage',
            'color' => 'green',
            'price' => 100
        ]);

        vegetable::create([
            'name' => 'cucumber',
            'color' => 'green',
            'price' => 100
        ]);

        vegetable::create([
            'name' => 'burdock',
            'color' => 'red',
            'price' => 100
        ]);        

    }
}
