<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\UserSeeder;
use Database\Seeders\TargetSeeder;
use Database\Seeders\ThemeSeeder;
use Database\Seeders\ArticleSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AssociationSeeder::class);
        $this->call(ThemeSeeder::class);
        $this->call(TargetSeeder::class);
        $this->call(SupportSeeder::class);
        $this->call(ArticleSeeder::class);
    }
}