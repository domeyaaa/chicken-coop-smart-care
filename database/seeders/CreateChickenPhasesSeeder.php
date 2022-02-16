<?php

namespace Database\Seeders;

use App\Models\chickenphase;
use Illuminate\Database\Seeder;

class CreateChickenPhasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phase = [
            [
                'phase_name' => 'ไก่เด็ก', 
            ],
            [
                'phase_name' => 'ไก่รุ่น', 
            ],
            [
                'phase_name' => 'ไก่หนุ่ม ไก่สาว', 
            ],
            [
                'phase_name' => 'ไก่ทดแทน', 
            ],
            [
                'phase_name' => 'ไก่พ่อพันธุ์ แม่พันธุ์', 
            ],
        ];

        foreach ($phase as $key => $value) {
            chickenphase::create($value);
        }
    }
}
