<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'surname' => 'admin',
                'email' => 'admin@mail.com',
                'phone' => 'admin',
                'password' => bcrypt('admin'),
                'is_admin' => 1,
            ],

            [
                'name' => 'user',
                'surname' => 'user',
                'email' => 'user@mail.com',
                'phone' => 'user',
                'password' => bcrypt('user'),
                'is_admin' => 0,
            ],
        ]);
    }
}
