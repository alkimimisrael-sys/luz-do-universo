<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@luzdouniverso.com.br'],
            [
                'name'     => 'Administrador',
                'email'    => 'admin@luzdouniverso.com.br',
                'password' => Hash::make('LuzAdmin@2026'),
            ]
        );
    }
}
