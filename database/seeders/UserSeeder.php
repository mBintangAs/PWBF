<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'email'=>'admin@admin.com',
            'password'=> bcrypt('123456'),
            'nama'=> 'shab',
            'level'=> 0,

        ]);
        User::create([
            'email'=>'patient@admin.com',
            'password'=> bcrypt('123456'),
            'nama'=> 'shab',
            'level'=> 2,
        ]);
        User::create([
            'email'=>'dokter@admin.com',
            'password'=> bcrypt('123456'),
            'nama'=> 'shab',
            'level'=> 1,
        ]);

    }
}
