<?php

use Illuminate\Database\Seeder;
use App\mensagem;

class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mensagem::create([
            'titulo' => 'Promossaum',
            'texto' => 'Ovos e banana com desconto',
            'autor' => 'Mario Quitanda'
        ]);

        mensagem::create([
            'titulo' => 'Cleber',
            'texto' => 'The incrivel roger',
            'autor' => 'Robson'
        ]);

    }
}
