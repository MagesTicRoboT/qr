<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FreshStart extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Rana',
            'last_name' => 'Abdul Rauf',
            'user_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678@admin')
        ]);
    }
}
