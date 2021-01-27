<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Menu::create(
           [
               'items' => 'Home'
           ]
       );

       Menu::create(
           [
               'items' => 'About'
           ]
       );

        Menu::create(
            [
                'items' => 'Service'
            ]
        );

        Menu::create(
            [
                'items' => 'Portfolio'
            ]
        );

        Menu::create(
            [
                'items' => 'FAQ'
            ]
        );

        Menu::create(
            [
                'items' => 'Contact'
            ],
        );

    }
}
