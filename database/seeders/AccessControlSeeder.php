<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AccessControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'consultant']);
        Role::create(['name' => 'user']);
        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('consultant');
    }
}
