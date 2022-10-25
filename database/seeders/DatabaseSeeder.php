<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DoctorSchedule;
use App\Models\RekamMedis;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            DiagnosisSeeder::class,
            UserSeeder::class,
            DoctorScheduleSeeder::class
        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $DoctorSchedules = DoctorSchedule::all();

        User::all()->each(function ($user) use ($DoctorSchedules){
            $user->DoctorScheduls()->attach(
                $DoctorSchedules->random(rand(1, 7))->pluck('id')->toArray()
            );
        });
    }
}
