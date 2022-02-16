<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\chicken;

class CreateChickensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chiken = [
            [
                'id' => 'A-1',
                'chickenspecies_id' => '1',
                'chicken_phase_id' => '4',
                'father_id' => '-',
                'mother_id' => '-',
                'expect_sex' => 'ผู้',
                'sex' => 'ผู้',
                'temp_born' => '35',
                'birthday' => '2021-12-23',

            ],
            [
                'id' => 'A-2',
                'chickenspecies_id' => '2',
                'chicken_phase_id' => '4',
                'father_id' => '-',
                'mother_id' => '-',
                'expect_sex' => 'ผู้',
                'sex' => 'เมีย',
                'temp_born' => '35',
                'birthday' => '2021-12-23',
                'first_egg_date' => '2022-2-1',
                'first_egg_weight' => '53',
                'first_egg_age' => '20',
                'weight_first_egg' => '1.34',
            ],
            [
                'id' => 'A-3',
                'chickenspecies_id' => '1',
                'chicken_phase_id' => '5',
                'father_id' => 'A-1',
                'mother_id' => 'A-2',
                'expect_sex' => 'เมีย',
                'temp_born' => '34',
                'birthday' => '2021-12-23',
                'first_egg_date' => '2022-2-3',
                'first_egg_weight' => '64',
                'first_egg_age' => '18',
                'weight_first_egg' => '1.23',
            ],

        ];

        foreach ($chiken as $key => $value) {
            Chicken::create($value);
        }
    }
}
