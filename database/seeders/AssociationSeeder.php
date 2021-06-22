<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class AssociationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('associations')->insert([
            'name' => 'Main à la pâte',
            'url' => 'https://www.fondation-lamap.org/fr',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('associations')->insert([
            'name' => 'Fondation Maud Fontenoy',
            'url' => 'https://maudfontenoyfondation.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('associations')->insert([
            'name' => 'Oceanopolis',
            'url' => 'https://www.oceanopolis.com/nous-soutenir',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('associations')->insert([
            'name' => 'Espion des grands fonds',
            'url' => 'https://www.deepseaspy.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('associations')->insert([
            'name' => 'IFREMER',
            'url' => 'https://wwz.ifremer.fr',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('associations')->insert([
            'name' => 'Nausicaa',
            'url' => 'https://www.nausicaa.fr/faire-un-don/',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('associations')->insert([
            'name' => 'Surfrider',
            'url' => 'https://www.initiativesoceanes.org/fr/',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('associations')->insert([
            'name' => 'CNES',
            'url' => 'https://enseignants-mediateurs.cnes.fr',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('associations')->insert([
            'name' => 'Ocean School',
            'url' => 'https://oceanschool-xp.nfb.ca',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
