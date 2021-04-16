<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Pedro',
            'email' => 'admin@tkambio.com',
            'rol' => 'admin',
            'password' => Hash::make('123456')
        ]);
        User::create([
            'name' => 'Juan',
            'email' => 'juan@tkambio.com',
            'rol' => 'operador',
            'password' => Hash::make('123456')
        ]);
    }
}
