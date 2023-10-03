<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Ekana Technologies',
            'email' => 'admin@mail.com',
            'password' => Hash::make('1234'),
        ]);
        DB::table('users')->insert([
            'name' => 'Demo Consultant',
            'email' => 'consult@mail.com',
            'password' => Hash::make('1234'),
        ]);
    }
}
