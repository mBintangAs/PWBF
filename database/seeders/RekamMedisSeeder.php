<?php

namespace Database\Seeders;

use App\Models\RekamMedis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class RekamMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RekamMedis::Create([
            'sistol'=> 90,
            'diastol'=> 60,
            'TB' => 150,
            'BB' => 50,
            'Denyut_nadi'=>80,
            'Respirasi' => 19,
            'suhu' => 35
        ]);
        RekamMedis::Create([
            'sistol'=> 95,
            'diastol'=> 63,
            'TB' => 150,
            'BB' => 50,
            'Denyut_nadi'=>80,
            'Respirasi' => 24,
            'suhu' => 35
        ]);

        RekamMedis::Create([
            'sistol'=> 100,
            'diastol'=> 70,
            'TB' => 180,
            'BB' => 70,
            'Denyut_nadi'=>100,
            'Respirasi' => 12,
            'suhu' => 34
        ]);

        RekamMedis::Create([
            'sistol'=> 130,
            'diastol'=> 80,
            'TB' => 170,
            'BB' => 60,
            'Denyut_nadi'=>100,
            'Respirasi' => 20,
            'suhu' => 34
        ]);

        RekamMedis::Create([
            'sistol'=> 125,
            'diastol'=> 70,
            'TB' => 165,
            'BB' => 55,
            'Denyut_nadi'=>95,
            'Respirasi' => 22,
            'suhu' => 33
        ]);

    }
}

