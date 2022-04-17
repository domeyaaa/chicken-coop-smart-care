<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\vaccinate;

class VacinateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vcn = [
            [
                'chicken_id' => 1,
                'vaccine_id' => 1,
                'user_id' => 2,
                'chicken_weight' => 210.5
            ],
            [
                'chicken_id' => 1,
                'vaccine_id' => 1,
                'user_id' => 2,
                'chicken_weight' => 230.2
            ],
            [
                'chicken_id' => 1,
                'vaccine_id' => 1,
                'user_id' => 2,
                'chicken_weight' => 210.4
            ],
        ];

        foreach ($vcn as $key => $value) {
            vaccinate::create($value);
        }
    }
}
