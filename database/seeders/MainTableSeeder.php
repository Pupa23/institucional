<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mains')->insert([
            'title' => 'Title of section main',
            'subtitle' => 'Sub-title of section main lorem20',
            'description_about' => 'Description del about Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi enim, eum expedita hic mollitia natus nemo nesciunt nihil perferendis, quaerat quas repellat velit veritatis voluptatem.',
            'description_service' => 'Description of section Services Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet blanditiis commodi corporis deleniti dolorem, ex exercitationem molestiae nemo placeat, porro, reprehenderit voluptatum.',
            'description_cta' => 'Description of Call To Action Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid facilis maiores temporibus!',
            'url_image' => 'carousel.jpg'
        ]);

    }
}
