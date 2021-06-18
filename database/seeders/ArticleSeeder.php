<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');

        for ($i=0; $i < 20 ; $i++) { 
            DB::table('articles')->insert([
                'title' => $faker->name,
                'content' => $faker->text,
                'publication_date' =>  Carbon::now(),
                'target' => $faker->numberBetween(1,4),
                'theme' => $faker->numberBetween(1,5),
                'key_words' => $faker->text(),
                'association' => null,
                'certified' => $faker->numberBetween(0,1),
                'type' => $faker->numberBetween(0,1),
                'views' => $faker->numberBetween(0,10000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
