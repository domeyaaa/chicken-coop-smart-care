<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\body;

class BodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $body = [
            [
                'volume' => 220.2, 
                'chicken_id' => 'A-1',
                'user_id' => 2,
                'bodytype_id' => 1,
            ],
            [
                'volume' => 200.51, 
                'chicken_id' => 'A-1',
                'user_id' => 2,
                'bodytype_id' => 1,
            ],
            [
                'volume' => 190.4, 
                'chicken_id' => 'A-1',
                'user_id' => 2,
                'bodytype_id' => 1,
            ],
            [
                'volume' => 13, 
                'chicken_id' => 'A-1',
                'user_id' => 2,
                'bodytype_id' => 2,
            ],
            [
                'volume' => 14, 
                'chicken_id' => 'A-1',
                'user_id' => 2,
                'bodytype_id' => 2,
            ],
            [
                'volume' => 15, 
                'chicken_id' => 'A-1',
                'user_id' => 2,
                'bodytype_id' => 2,
            ],
            [
                'volume' => 4.5, 
                'chicken_id' => 'A-1',
                'user_id' => 2,
                'bodytype_id' => 3,
            ],
            [
                'volume' => 4.7, 
                'chicken_id' => 'A-1',
                'user_id' => 2,
                'bodytype_id' => 3,
            ],
            [
                'volume' => 4, 
                'chicken_id' => 'A-1',
                'user_id' => 2,
                'bodytype_id' => 3,
            ],
            
        ];

        foreach ($body as $key => $value) {
            body::create($value);
        }
    }
}
