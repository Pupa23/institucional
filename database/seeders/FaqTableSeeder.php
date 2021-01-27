<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create(
            [
                'question' => '¿Como puedo contactarme con ustedes?',
                'response' => 'Podes llamarnos al 231231 o bien contactarnos por la seccion de Contacto al fina de la pagina'
            ]

        );

        Faq::create(
            [
                'question' => '¿Pregunta n° 2?',
                'response' => 'PRespueste n°2 de la pagina'
            ]
        );
    }
}
