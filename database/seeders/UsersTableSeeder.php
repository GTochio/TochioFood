<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Gabriel Fernando Tochio',
            'email'=> 'gabriel.tochio@delossolucoes.com.br',
            'password'=> bcrypt('17654328'),
        ]);
    }
}
