<?php

namespace Database\Seeders;

use App\Models\Diagnosis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiagnosisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diagnosis::Create([
            'Diagnosis'=> 'Demam',
            'Tipe'=> 'Flu'
        ]);

        Diagnosis::Create([
            'Diagnosis'=> 'Kalazoid',
            'Tipe'=> 'Ringan',
            'Keterangan' => 'Benjolan pada kelopak mata kanan'
        ]);

        Diagnosis::Create([
            'Diagnosis'=> 'Gerd',
            'Tipe'=> 'Ringan',
            'Keterangan' => 'disertai luka pada lambung'
        ]);

        Diagnosis::Create([
            'Diagnosis'=> 'Infeksi Usus',
            'Tipe'=> 'Ringan'
        ]);

        Diagnosis::Create([
            'Diagnosis'=> 'Radang tenggorokan',
            'Tipe'=> 'Berat',
            'Keterangan' => 'disertai batuk darah'
        ]);
    }
}
