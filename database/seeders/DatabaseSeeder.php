<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DoctorSchedule;
use App\Models\RekamMedis;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\DiagnosisSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RekamMedisSeeder::class,
            DiagnosesSeeder::class,
            UserSeeder::class,
            ArtikelSeeder::class,
            DoctorScheduleSeeder::class
        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



    }
}
