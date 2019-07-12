<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\User::truncate();

        \App\User::create([
            'name'      => 'adnan',
            'username'  => 'ao0rt',
            'email'     => 'adnan@gmail.com',
            'password'  => 'secret'
        ]);

        \App\User::create([
            'name'      => 'erfan',
            'username'  => 'erfan',
            'email'     => 'erfan@gmail.com',
            'password'  => 'secret'
        ]);
    }
}
