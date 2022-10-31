<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::create([
            'title'=>'Dampak Self-Diagnose Terhadap Kesehatan Mental',
            'lokasi_img'=>'assets\img\portfolio\a1.jpg',
            'body'=>'Self-diagnosis adalah asumsi yang menyatakan bahwa seseorang terkena suatu penyakit berdasarkan pengetahuannya sendiri. Self-diagnosis sangat membahayakan kesehatan seseorang apabila',
            'excerpt'=>'Self-diagnosis adalah asumsi yang menyatakan bahwa seseorang terkena suatu penyakit berdasarkan pengetahuannya sendiri. Self-diagnosis sangat membahayakan kesehatan seseorang apabila',
            'published_at'=>'2022-07-25'
        ]);
        Artikel::create([
            'title'=>'5 Perilaku Hidup Bersih dan Sehat yang Mudah Dilakukan',
            'lokasi_img'=>'assets\img\portfolio\a2.jpg',
            'body'=>'5 Perilaku Hidup Bersih dan Sehat yang Mudah Dilakukan',
            'excerpt'=>'Dalam keseharian, kita mungkin belum menerapkan sepenuhnya perilaku hidup bersih dan sehat.',
            'published_at'=>'2022-07-25'
        ]);
        Artikel::create([
            'title'=>'Vaksinasi di Bulan Ramadhan? Batalkah Puasa?',
            'lokasi_img'=>'assets\img\portfolio\a3.jpg',
            'body'=>'Vaksinasi di Bulan Ramadhan? Batalkah Puasa?',
            'excerpt'=>'Pemerintah telah memberi lampu hijau untuk kita semua yang ingin melaksanakan Hari Raya Idul Fitri 2022 bersama keluarga di kampung halaman.',
            'published_at'=>'2022-07-25'
        ]);
    }
}
