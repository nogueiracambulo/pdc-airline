<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Conteudo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ConteudoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conteudo::insert([
            'id' =>1,
            'titulo'=>"Introdução a Lógica", 
            'descricao'=>"Primeira aula teorica", 
            'ficheiro'=>"/template_admin_lte/dist/img/graduation.png",
            'disciplina_id'=>1,
            'criador_id'=>1,
        ]);
    }
}
