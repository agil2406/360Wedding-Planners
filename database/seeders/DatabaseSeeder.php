<?php

namespace Database\Seeders;

use App\Models\Rating;
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
            'name' => 'Kadek Chintya',
            'email' => 'dekcin@gmail.com',
            'level' => 'superAdmin',
            'password' => Hash::make('12345678'),
            'email_verified_at' => Carbon::now()
        ]);
        Rating::create([
            'wo_id' => '1',
            'user_id' => '1',
            'rating' => '4'
        ]);
        Rating::create([
            'wo_id' => '2',
            'user_id' => '1',
            'rating' => '4'

        ]);
        Rating::create([
            'wo_id' => '3',
            'user_id' => '1',
            'rating' => '4'

        ]);
        Rating::create([
            'wo_id' => '4',
            'user_id' => '1',
            'rating' => '4'
        ]);
        Rating::create([
            'wo_id' => '5',
            'user_id' => '1',
            'rating' => '4'
        ]);
    }
}
