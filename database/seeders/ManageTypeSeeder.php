<?php

namespace Database\Seeders;

use App\Models\managetype;
use Illuminate\Database\Seeder;

class ManageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageType = [
            [
                'manage_type_name' => 'เพิ่มไก่', 
            ],
            [
                'manage_type_name' => 'ให้อาหาร', 
            ],
            [
                'manage_type_name' => 'ฉีดวัคซีน', 
            ],
            [
                'manage_type_name' => 'บันทึกน้ำหนัก', 
            ],
            [
                'manage_type_name' => 'บันทึกขนาดตัว', 
            ],
            [
                'manage_type_name' => 'คัดเลือกไก้พันธุ์', 
            ],
            [
                'manage_type_name' => 'จับคู่ผสมพันธุ์', 
            ],
            [
                'manage_type_name' => 'บันทึกการให้ไข่', 
            ],
            [
                'manage_type_name' => 'บันทึกการผสมติด', 
            ],
        ];

        foreach ($manageType as $key => $value) {
            managetype::create($value);
        }
    }
}
