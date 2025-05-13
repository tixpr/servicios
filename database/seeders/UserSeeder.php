<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        for ($i = 1; $i <=1000; $i++) {
            User::create([
                'dni' =>  strval(10000000 + $i),
                'paternal' => Str::random(10),
                'maternal' => Str::random(10),
                'names' => Str::random(7),
                'password'=> Hash::make('secreto'),
                'email' => 'email' . $i . '@sistemas.edu.pe',
            ]);
        }
        */
        User::factory(2000)->create();
    }
}
