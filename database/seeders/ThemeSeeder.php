<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Climat : Biodiversité : Pêche : Pollution plastique : Écoresponsabilité
        DB::table('themes')->insert([
            'name' => 'Climat',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('themes')->insert([
            'name' => 'Biodiversité',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('themes')->insert([
            'name' => 'Pêche',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('themes')->insert([
            'name' => 'Pollution plastique',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('themes')->insert([
            'name' => 'Écoresponsabilité',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
