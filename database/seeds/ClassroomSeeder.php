<?php

use Illuminate\Database\Seeder;
use App\Classroom;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classroom::truncate();

        $video1 = Classroom::create([
            'nome' => 'Aparecido',
            'description' => 'Atrapalhador de Pedreiro',
            'url' => 'https://www.youtube.com/embed/jen3L8HwkMM',
        ]);
        
        $video2 = Classroom::create([
            'nome' => 'Placa',
            'description' => 'Toda placa de aviso tem uma história',
            'url' => 'https://www.youtube.com/embed/LCHweYeGy6c',
        ]);

        $video3 = Classroom::create([
            'nome' => 'Dança',
            'description' => 'Dançando na praça',
            'url' => 'https://www.youtube.com/embed/r41PPEGDEcg',
        ]);
    }
}
