<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom'=> 'SANON',
            'prenom' => 'Monica',
            'email' => 'sanoncente04@gmail.com',
            'password' => Hash::make('11111111'),
            'role_id' => '1'
        ]);
        User::create([
            'nom' => 'KANDO',
            'prenom' => 'Naomie',
            'email' => 'nao@gmail.com',
            'password' => Hash::make('11111111'),
            'role_id' => '2'
        ]);
    }
}
