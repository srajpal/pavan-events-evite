<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Admin',
            'password' => Hash::make('admin'),
            'email' => 'admin@gmail.com',
            'role' => User::USER_ROLE_ADMIN,
        ]);

        User::factory()->create([
            'name' => 'Client',
            'password' => Hash::make('client'),
            'email' => 'client@gmail.com',
            'role' => User::USER_ROLE_CLIENT,
        ]);

        User::factory()->create([
            'name' => 'Guest',
            'password' => Hash::make('guest'),
            'email' => 'guest@gmail.com',
            'role' => User::USER_ROLE_GUEST,
        ]);
    }
}
