<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            [
                'email' => 'user'.'@gmail.com',
            ],
            [
                'first_name' => 'User',
                'last_name' => 'Userow',
                'password' => Hash::make('password'),
            ]
        );
    }
}
