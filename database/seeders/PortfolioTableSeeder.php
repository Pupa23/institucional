<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'title' => 'Title n° 1',
            'subtitle' => 'Subtitle N° 1',
            'description' => 'Description n° 1',
            'url_image' => 'portfolio-1.jpg'
        ]);

        Portfolio::create([
            'title' => 'Title n° 2',
            'subtitle' => 'Subtitle N° 2',
            'description' => 'Description n° 2',
            'url_image' => 'portfolio-2.jpg'
        ]);

        Portfolio::create([
            'title' => 'Title n° 3',
            'subtitle' => 'Subtitle N° 3',
            'description' => 'Description n° 3',
            'url_image' => 'portfolio-3.jpg'
        ]);

        Portfolio::create([
            'title' => 'Title n° 4',
            'subtitle' => 'Subtitle N° 4',
            'description' => 'Description n° 4',
            'url_image' => 'portfolio-4.jpg'
        ]);

        Portfolio::create([
            'title' => 'Title n° 5',
            'subtitle' => 'Subtitle N° 5',
            'description' => 'Description n° 5',
            'url_image' => 'portfolio-5.jpg'
        ]);

        Portfolio::create([
            'title' => 'Title n° 6',
            'subtitle' => 'Subtitle N° 6',
            'description' => 'Description n° 6',
            'url_image' => 'portfolio-6.jpg'
        ]);

        Portfolio::create([
            'title' => 'Title n° 7',
            'subtitle' => 'Subtitle N° 7',
            'description' => 'Description n° 7',
            'url_image' => 'portfolio-7.jpg'
        ]);

        Portfolio::create([
            'title' => 'Title n° 8',
            'subtitle' => 'Subtitle N° 8',
            'description' => 'Description n° 8',
            'url_image' => 'portfolio-8.jpg'
        ]);

        Portfolio::create([
            'title' => 'Title n° 9',
            'subtitle' => 'Subtitle N° 9',
            'description' => 'Description n° 9',
            'url_image' => 'portfolio-9.jpg'
        ]);
    }
}
