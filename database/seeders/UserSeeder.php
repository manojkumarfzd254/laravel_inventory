<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('1234'),
            'profile_photo_path' => 'backend/image/profile.jpeg'
        ]);
        $executive = User::create([
            'name' => 'Executive',
            'email' => 'executive@executive.com',
            'password' => Hash::make('1234'),
            'profile_photo_path' => 'backend/image/profile.jpeg'
        ]);
        $user = User::create([
            'name' => 'Manoj Kumar',
            'email' => 'user@user.com',
            'password' => Hash::make('1234'),
            'profile_photo_path' => 'frontend/image/profile.jpeg'
        ]);
        $admin->attachRole(1);
        $executive->attachRole(2);
        $user->attachRole(3);

    }
}
