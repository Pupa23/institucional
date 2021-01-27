<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create(
            [
                'card_title' => 'Card title N° 1',
                'card_description' => 'Card description N° 1'
            ]
        );

        Service::create(
            [
                'card_title' => 'Card title N° 2',
                'card_description' => 'Card description N° 2'
            ]
        );

        Service::create(
            [
                'card_title' => 'Card title N° 3',
                'card_description' => 'Card description N° 3'
            ]
        );

        Service::create(
            [
                'card_title' => 'Card title N° 4',
                'card_description' => 'Card description N° 4'
            ]
        );

    }
}
