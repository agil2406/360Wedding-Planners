<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WO;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Agil trieanto',
            'email' => 'agil@gmail.com',
            'password' => Hash::make('12345678'),
            'wo_id' => 1,
            'email_verified_at' => Carbon::now(),
        ]);
        WO::create([
            'nama_wo' => 'Janur Kuning',
            'deskripsi' => 'Janur kuning hadir untuk mewujudkan impian pernikahan yang sakral dan menjadi momen
            yang membahagiakan bersama keluarga dan sahabat terdekat dalam hidup anda. Dengan
            memadukan konsep yang baru dan menginspirasi merupakan salah satu keunggulan kami
            seingga hari bersejarah dalam hidup anda akan menjadi kenangan terindah untuk selalu
            dikenang. Izinkan kami, Janur Kuning Wedding Organizer menjadi bagian dari dalam sejarah
            hidup anda. Mendesain dan merencanakan pernikahan impian anda secara detail sehingga menjadi ladang amal dan kebaikan bagi kita semua',
            'image' => 'frontend/assets/img/janurkuning.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        WO::create([
            'nama_wo' => 'KaQtus Wedding Organizer',
            'deskripsi' => '',
            'image' => 'frontend/assets/img/kaqtus.jfif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        WO::create([
            'nama_wo' => 'Ayodya Wedding Organizer',
            'deskripsi' => 'Pernikahan merupakan sesuatu yang sakral, dilakukan satu kali seumur hidup sehingga harus
            direncanakan secara matang dan terkonsep. Menjadi raja dan ratu pada hari pernikahan merupakan impian
            yang teramat indah. Namun, dalam mewujudkan ini, calon pengantin membutuhkan pihak profesional
            yang dapat membantu menyelenggarakannya. Hal ini agar pengantin dapat menikmati pesta yang
            diimpikan.
            Untuk itulah Ayodya Wedding Organizer hadir membantu para calon pengantin mempersiapkan dan
            mewujudkan pernikahan yang diimpikan. Ayodya Wedding Organizer merupakan pilihan tepat untuk
            calon pengantin yang mencari pengatur acara pernikahan dengan vendor terbaik dan terpercaya',
            'image' => 'frontend/assets/img/ayodya.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
