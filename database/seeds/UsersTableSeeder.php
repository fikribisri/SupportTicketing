<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2a$12$M31PIIco4ZQO1/D3R90dJeZm49aNrndRjdLuPXGhuezbYDz3AwrBm', //password is admin123
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Agent 1',
                'email'          => 'agent1@agent1.com',
                'password'       => '$2a$12$px1vcMbZ0lsPbshtVuwAne1d/twLjRFK.TWdyK0.zf5yfjDzx9K52', //password is agent1
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Agent 2',
                'email'          => 'agent2@agent2.com',
                'password'       => '$2a$12$ddqK5YOA5b2NMgUNohG8Dee2wCrM7JPLwN3.UxySgLXvSPlcsC02m', //password is agent2
                'remember_token' => null,
            ],
            [
                'id'             => 4,
                'name'           => 'Agent 3',
                'email'          => 'agent3@agent3.com',
                'password'       => '$2a$12$19Uv27PG82N7myx3cWhzc.1.gXME6BjKtOS5YloTUBcbb/9faIp7.', //password is agent3
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
