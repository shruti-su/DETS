<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // You can use factories to create users or manually create them
        // Example of creating a user with a specific role
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'shruti040112@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('123456789'), // Use a secure password
        ]);
        \App\Models\User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'role' => 'user',
            'password' => bcrypt('12345678'), // Use a secure password
        ]);

    }
}
