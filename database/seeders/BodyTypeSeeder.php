<?php

namespace Database\Seeders;

use App\Models\bodytype;
use Illuminate\Database\Seeder;

class BodyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bodyType = [
            [
                'id' => 1,
                'name' => 'น้ำหนัก', 
            ],
            [
                'id' => 2,
                'name' => 'ความยาวแข้ง', 
            ],
            [
                'id' => 3,
                'name' => 'รอบอก', 
            ],
        ];

        foreach ($bodyType as $key => $value) {
            bodytype::create($value);
        }
    }
}
