<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RekamMedis;
class RekamMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RekamMedis::create([
            'user_id'=>'1',
            'sistol'=>'23',
            'diastol'=>'24',
            'TB'=>'155',
            'BB'=>'45',
            'Denyut_nadi'=>'120',
            'Respirasi'=>'77',
            
            'Lingkar_perut'=>'56'
            
        ]);
    }
}

