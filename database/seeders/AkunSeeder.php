<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
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
                'username' => 'admin',
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => bcrypt('admin'),
            ],
            [
                'username' => 'user',
                'name' => 'User',
                'email' => 'user@gmail.com',
                'level' => 'user',
                'password' => bcrypt('user'),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
