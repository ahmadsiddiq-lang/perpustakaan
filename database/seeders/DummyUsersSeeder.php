<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin User',
                'email' => 'admin@mail.com',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'ahmad saja',
                'email' => 'ahmad@mail.com',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'anas saja',
                'email' => 'anas@mail.com',
                'password' => bcrypt('123456'),
                'role' => 'user',
            ],
            [
                'name' => 'adam',
                'email' => 'adam@mail.com',
                'password' => bcrypt('123456'),
                'role' => 'user',
            ],
        ];

        foreach ($userData as $data){
            User::create($data);
        }
    }
}
