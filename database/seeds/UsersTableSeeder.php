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
                'password'       => '$2y$10$XH232IuTQCcPEkbswdv4UeGvuvnj26M1HLKkXtN4Dgx5gyI1WCIMi',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
