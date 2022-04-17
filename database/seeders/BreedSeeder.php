<?php

namespace Database\Seeders;

use App\Models\breed;
use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $breed = [
            [
                'chicken_id' => 'A-1',
                'chicken_hen_id' => 'A-20',
                'egg_total' => 2,
                'egg_infected_total' => 211
            ],

            [
                'chicken_id' => 'A-1',
                'chicken_hen_id' => 'A-22',
                'egg_total' => 2,
                'egg_infected_total' => 21
            ],

            [
                'chicken_id' => 'A-1',
                'chicken_hen_id' => 'A-12',
                'egg_total' => 2,
                'egg_infected_total' => 21
            ],

            [
                'chicken_id' => 'A-1',
                'chicken_hen_id' => 'A-14',
                'egg_total' => 2,
                'egg_infected_total' => 21
            ],

        ];

        foreach ($breed as $key => $value) {
            breed::create($value);
        }
    }
}
