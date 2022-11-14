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
        //
        User::create([
            'email'=>'admin@admin.com',
            'password'=> bcrypt('123456'),
            'username'=> 'shab'

        ]);
        // User::create([
        //     'email'=>'patient@admin.com',
        //     'password'=> bcrypt('123456'),
        //     'username'=> 'shab'

        // ]);
        // User::create([
        //     'name'=>'patient',
        //     'email'=>'patient@patient.com',
        //     'password'=> bcrypt('123456'),
        //     'No_Telepon' => '0812345678',
        //     'JK'=>'0',
        //     'tgl_lahir'=>'2022-10-01',
        //     'alamat'=>'jl aja jadian enggak',
        //     'level'=> '0',
        //     'nik'=>'123456789101112',
        //     'no_bpjs'=>'12345678',
        // ]);
        // User::create([
        //     'name'=>'doctor',
        //     'email'=>'doctor@doctor.com',
        //     'password'=> bcrypt('123456'),
        //     'No_Telepon' => '0812345678',
        //     'JK'=>'0',
        //     'tgl_lahir'=>'2022-10-01',
        //     'alamat'=>'jl aja jadian enggak',
        //     'level'=> '2',
        //     'no_str'=>'12345678',
        //     'profesi'=>'Dokter Cinta'
        // ]);
    }
}