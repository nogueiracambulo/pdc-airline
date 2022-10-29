<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Disciplina;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disciplina::insert([
            'id' =>1,
            'nome'=>"Lógica de Programação", 
            'sigla'=>"LP", 
            'nome_professor'=>"João Costa",
            'turma_id'=>1,
            'criador_id'=>1,
        ]);

    }
}
