<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\checkegg;

class CheckEggSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $checkegg = [
            [
                'egg_spawn' => 1,
                'chicken_id' => 'A-12', 
                'user_id' => 2,
            ],
            [
                'egg_spawn' => 1,
                'chicken_id' => 'A-12', 
                'user_id' => 2,
            ],
            [
                'egg_spawn' => 1,
                'chicken_id' => 'A-12', 
                'user_id' => 2,
            ],
            [
                'egg_spawn' => 1,
                'chicken_id' => 'A-12', 
                'user_id' => 2,
            ],
            [
                'egg_spawn' => 1,
                'chicken_id' => 'A-12', 
                'user_id' => 2,
            ],
        ];

        foreach ($checkegg as $key => $value) {
            checkegg::create($value);
        }
    }
}
