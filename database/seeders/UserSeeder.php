<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usuario #1
        $Aero = new User();
        $Aero->username = 'aero';
        $Aero->name = 'Eleazar';
        $Aero->last_name = 'Amaya';
        $Aero->email = 'aero@gmail.com';
        $Aero->phone_number = '';
        $Aero->password = Hash::make('1234');
        $Aero->gender = 'M';
        $Aero->type = 'user';
        $Aero->save();

        // Usuario #2
        $vini = new User();
        $vini->username = 'vinic';
        $vini->name = 'Víctor';
        $vini->last_name = 'Cornejo';
        $vini->email = 'vini@gmail.com';
        $vini->phone_number = '';
        $vini->password = Hash::make('1234');
        $vini->gender = 'M';
        $vini->type = 'user';
        $vini->save();

        // Usuario #3
        $flupa = new User();
        $flupa->username = 'flupa';
        $flupa->name = 'Marcelo';
        $flupa->last_name = 'Cruz';
        $flupa->email = 'flupa@gmail.com';
        $flupa->phone_number = '';
        $flupa->password = Hash::make('1234');
        $flupa->gender = 'M';
        $flupa->type = 'user';
        $flupa->save();

        // Usuario #4
        $johny = new User();
        $johny->username = 'johny';
        $johny->name = 'Jonathan';
        $johny->last_name = 'Hernández';
        $johny->email = 'johny@gmail.com';
        $johny->phone_number = '';
        $johny->password = Hash::make('1234');
        $johny->gender = 'M';
        $johny->type = 'user';
        $johny->save();
    }
}
