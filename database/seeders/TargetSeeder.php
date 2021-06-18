<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class TargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('targets')->insert([
            'name' => 'tous',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('targets')->insert([
            'name' => 'college',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('targets')->insert([
            'name' => 'primaire',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('targets')->insert([
            'name' => 'lycee',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
