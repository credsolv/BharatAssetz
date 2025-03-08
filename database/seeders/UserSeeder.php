<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::truncate(); // Clears existing users

        // Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Mumbai Branch Manager
        User::create([
            'name' => 'Mumbai Branch Manager',
            'email' => 'mumbaibranch@example.com',
            'password' => Hash::make('password'),
            'role' => 'branch',
        ]);

        // Mumbai Staff Members
        User::create([
            'name' => 'Mumbai Staff 1',
            'email' => 'mum-staff1@example.com',
            'password' => Hash::make('password'),
            'role' => 'staff',
        ]);

        User::create([
            'name' => 'Mumbai Staff 2',
            'email' => 'mum-staff2@example.com',
            'password' => Hash::make('password'),
            'role' => 'staff',
        ]);

        echo "✅ User accounts created successfully!\n";
    }
}
