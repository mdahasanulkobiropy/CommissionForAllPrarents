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
            'name' => 'A',
            'email' => 'a@gmail.com',
            'password' => '1234',
        ]);
        User::create([
            'name' => 'B',
            'email' => 'b@gmail.com',
            'parent_id' => 1,
            'password' => '1234',
        ]);
        User::create([
            'name' => 'C',
            'email' => 'c@gmail.com',
            'parent_id' => 2,
            'password' => '1234',
        ]);
        User::create([
            'name' => 'D',
            'email' => 'd@gmail.com',
            'parent_id' => 3,
            'password' => '1234',
        ]);
        User::create([
            'name' => 'E',
            'email' => 'e@gmail.com',
            'parent_id' => 4,
            'password' => '1234',
        ]);
        
    }
}