<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'path'=> 'assets/img/portfolio/a1.jpg',
            'excerpt'=>'Self-diagnosis adalah asumsi yang menyatakan bahwa seseorang terkena suatu penyakit berdasarkan pengetahuannya sendiri. Self-diagnosis sangat membahayakan kesehatan seseorang apabila.......',
            'body'=>'Self-diagnosis adalah asumsi yang menyatakan bahwa seseorang terkena suatu penyakit berdasarkan pengetahuannya sendiri. Self-diagnosis sangat membahayakan kesehatan seseorang apabila.......',
        ]);
        Artikel::create([
            'title'=>'5 Perilaku Hidup Bersih dan Sehat yang Mudah Dilakukan',
            'path'=> 'assets/img/portfolio/a2.jpg',
            'excerpt'=>'Dalam keseharian, kita mungkin belum menerapkan sepenuhnya perilaku hidup bersih dan sehat. Padahal praktiknya cukup sederhana dan dapat menjadi kebiasaan jika dilakukan terus-menerus. Setiap orang perlu menyadari perilaku ini sangat penting untuk menciptakan lingkungan yang sehat. Perilaku hidup bersih dan sehat (PHBS) adalah.......',
            'body'=>'Dalam keseharian, kita mungkin belum menerapkan sepenuhnya perilaku hidup bersih dan sehat. Padahal praktiknya cukup sederhana dan dapat menjadi kebiasaan jika dilakukan terus-menerus. Setiap orang perlu menyadari perilaku ini sangat penting untuk menciptakan lingkungan yang sehat. Perilaku hidup bersih dan sehat (PHBS) adalah.......',
        ]);
        Artikel::create([
            'title'=>'Vaksinasi di Bulan Ramdhan? Batalkah Puasa?',
            'path'=> 'assets/img/portfolio/a3.jpg',
            'excerpt'=>'Pemerintah telah memberi lampu hijau untuk kita semua yang ingin melaksanakan Hari Raya Idul Fitri 2022 bersama keluarga di kampung halaman. Tetapi, ada syarat yang harus kita lakukan, agar mudik sebelum kita mudik, yaitu  melaksanakan vaksinasi Covid-19 dosis booster. Lalu jika ingin melakukan vaksinasi ditengah bulan ramadhan apakah diperbolehkan? Apakah melakukan vaksinasi ditengah bulan puasa akan membatalkan puasa kita juga? Mari simak penjelasan dibawah ini...',
            'body'=>'Pemerintah telah memberi lampu hijau untuk kita semua yang ingin melaksanakan Hari Raya Idul Fitri 2022 bersama keluarga di kampung halaman. Tetapi, ada syarat yang harus kita lakukan, agar mudik sebelum kita mudik, yaitu  melaksanakan vaksinasi Covid-19 dosis booster. Lalu jika ingin melakukan vaksinasi ditengah bulan ramadhan apakah diperbolehkan? Apakah melakukan vaksinasi ditengah bulan puasa akan membatalkan puasa kita juga? Mari simak penjelasan dibawah ini....',
        ]);
        Artikel::create([
            'title'=>'Ibu, Ini Penyebab Umum Muntaber pada Anak',
            'path'=> 'assets/img/portfolio/a4.jpg',
            'excerpt'=>'Ibu, sebaiknya pastikan anak selalu mengonsumsi makanan dan minuman yang bersih. Ada berbagai penyakit yang dapat menular dari asupan makanan yang terpapar virus, bakteri, atau kuman, salah satunya muntaber. Jika tidak diatasi dengan baik, muntaber pada anak dapat menyebabkan anak mengalami.....',
            'body'=>'Ibu, sebaiknya pastikan anak selalu mengonsumsi makanan dan minuman yang bersih. Ada berbagai penyakit yang dapat menular dari asupan makanan yang terpapar virus, bakteri, atau kuman, salah satunya muntaber. Jika tidak diatasi dengan baik, muntaber pada anak dapat menyebabkan anak mengalami.....',
        ]);
        Artikel::create([
            'title'=>'Lebih Baik Makan Sebelum Olahraga atau Sesudah?',
            'path'=> 'assets/img/portfolio/a5.jpg',
            'excerpt'=>'Nutrisi dan olahraga adalah dua hal yang saling berkaitan. Namun, masih banyak orang yang bingung, mana yang tepat: makan sebelum olahraga atau sesudah? Dilema mengenai hal ini umum terjadi, tapi yang paling penting diperhitungkan adalah....',
            'body'=>'Nutrisi dan olahraga adalah dua hal yang saling berkaitan. Namun, masih banyak orang yang bingung, mana yang tepat: makan sebelum olahraga atau sesudah? Dilema mengenai hal ini umum terjadi, tapi yang paling penting diperhitungkan adalah....',
        ]);
        Artikel::create([
            'title'=>'17 Makanan untuk Radang Tenggorokan yang Direkomendasikan',
            'path'=> 'assets/img/portfolio/a6.jpg',
            'excerpt'=>'Meski gejala radang tenggorokan dapat sembuh sendiri, kondisi ini sering kali membuat penderitanya kesulitan menelan sehingga tidak nafsu makan. Namun, ada beberapa jenis makanan untuk radang tenggorokan yang bisa dikonsumsi dengan nyaman.....',
            'body'=>'Meski gejala radang tenggorokan dapat sembuh sendiri, kondisi ini sering kali membuat penderitanya kesulitan menelan sehingga tidak nafsu makan. Namun, ada beberapa jenis makanan untuk radang tenggorokan yang bisa dikonsumsi dengan nyaman.....',
        ]);
    }
}