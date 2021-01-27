<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AboutTableSeeder::class,
            ContactTableSeeder::class,
            FaqTableSeeder::class,
            MainTableSeeder::class,
            MenuTableSeeder::class,
            ServiceTableSeeder::class,
            PortfolioTableSeeder::class
        ]);
    }
}
