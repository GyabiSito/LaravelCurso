<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'jhondoe@gmail.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'ASDASD',
            'email' => 'ASD@gmail.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'zxcvzvcx',
            'email' => 'zxcvzxvc@gmail.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'qwer',
            'email' => 'jhoewqrerwqrndoe@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
