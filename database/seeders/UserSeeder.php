<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
             'email' => 'teste@exemplo.com',
            'password' => Hash::make('123456') // senha criptografada corretamente
        ]);
    }
}
