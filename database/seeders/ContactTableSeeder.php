<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'street' => 'Av. Mitre',
            'number' => 132456,
            'city' => 'San Rafael',
            'province' => 'Mendoza',
            'country' => 'Argentina',
            'email' => 'contact@contact.com',
            'phone' => 12314
        ]);
    }
}
