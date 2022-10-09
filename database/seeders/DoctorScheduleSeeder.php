<?php

namespace Database\Seeders;

use App\Models\DoctorSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DoctorSchedule::create([
            'doctor_id'=>'3',
            'hari'=>'sabtu',
            'jam_masuk'=>'07:00:00',
            'jam_pulang'=>'18:00:00',
            'tanggal'=>'2022-10-08'
        ]);
        DoctorSchedule::create([
            'doctor_id'=>'3',
            'hari'=>'minggu',
            'jam_masuk'=>'07:00:00',
            'jam_pulang'=>'18:00:00',
            'tanggal'=>'2022-10-09'
        ]);
        DoctorSchedule::create([
            'doctor_id'=>'3',
            'hari'=>'senin',
            'jam_masuk'=>'07:00:00',
            'jam_pulang'=>'18:00:00',
            'tanggal'=>'2022-10-10'
        ]);
        DoctorSchedule::create([
            'doctor_id'=>'3',
            'hari'=>'selasa',
            'jam_masuk'=>'07:00:00',
            'jam_pulang'=>'18:00:00',
            'tanggal'=>'2022-10-11'
        ]);
        DoctorSchedule::create([
            'doctor_id'=>'3',
            'hari'=>'rabu',
            'jam_masuk'=>'07:00:00',
            'jam_pulang'=>'18:00:00',
            'tanggal'=>'2022-10-12'
        ]);
        DoctorSchedule::create([
            'doctor_id'=>'3',
            'hari'=>'kamis',
            'jam_masuk'=>'07:00:00',
            'jam_pulang'=>'18:00:00',
            'tanggal'=>'2022-10-13'
        ]);
        DoctorSchedule::create([
            'doctor_id'=>'3',
            'hari'=>'jumat',
            'jam_masuk'=>'07:00:00',
            'jam_pulang'=>'18:00:00',
            'tanggal'=>'2022-10-14'
        ]);
    }
}