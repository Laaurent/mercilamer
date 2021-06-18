<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');

        DB::table('users')->insert([
            'name' => $faker->firstName,
            'email' =>'test@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
         DB::table('users')->insert([
            'name' => $faker->firstName,
            'email' => 'test2@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
         DB::table('users')->insert([
            'name' => $faker->firstName,
            'email' => 'test3@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}