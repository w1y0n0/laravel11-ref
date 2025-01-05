<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'password' => bcrypt('123'),
                'level' => 1
                // 'foto' => '/img/user.jpg',
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'username' => 'user',
                'password' => bcrypt('123'),
                'level' => 2
                // 'foto' => '/img/user.jpg',
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email'], 'username' => $user['username']],
                $user
            );
        }, $users);
    }
}
