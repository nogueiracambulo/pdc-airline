<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ano_lectivo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AnoLectivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ano_lectivo::insert([
        'id' =>1,
        'descricao'=>"2021-2022", 
        'data_inicio'=>"2021-02-23",
        'data_termino'=>"2022-02-13",
        'user_id'=>1,
        'selecionado'=>1,
        
        ]);
    }
}
