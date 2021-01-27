<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $abouts = \Migration::ABOUT;
//
//        foreach ($abouts as $about) {
//            About::create($about);
//        }

        About::create(['body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, pariatur1.']);
        About::create(['body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, pariatur2.']);
        About::create(['body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, pariatur3.']);
        About::create(['body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, pariatur4.']);
        About::create(['body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, pariatur5.']);
        About::create(['body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, pariatur6.']);
    }
}
