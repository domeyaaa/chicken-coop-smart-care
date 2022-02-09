<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'titlename' => 'Admin',
                'email' => 'admin@admin.com',
                'titlename' => 'Admin',
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'password' => bcrypt('12345678'),
                'active' => 1,
                'role' => 1,
            ],
            [
                'titlename' => 'User',
                'email' => 'user@user.com',
                'titlename' => 'User',
                'firstname' => 'User',
                'lastname' => 'User',
                'password' => bcrypt('12345678'),
                'std_id' => '176485940-4',
                'active' => 1,
                'role' => 0,
            ],
            [
                'titlename' => 'User',
                'email' => 'user1@user.com',
                'titlename' => 'นาย',
                'firstname' => 'User1',
                'lastname' => 'User1',
                'password' => bcrypt('12345678'),
                'std_id' => '236578940-9',
            ],
            [
                'titlename' => 'User',
                'email' => 'user2@user.com',
                'titlename' => 'นาย',
                'firstname' => 'User2',
                'lastname' => 'User2',
                'password' => bcrypt('12345678'),

            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
