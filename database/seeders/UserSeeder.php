<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lincoln Aguiar',
            'email' => 'lincolnalca@gmail.com',
            'password' => 123
        ])->roles()->attach(1);

        User::create([
            'name' => 'Funcionario teste',
            'email' => 'funcionario@gmail.com',
            'password' => 123
        ])->roles()->attach(2);
    }
}
