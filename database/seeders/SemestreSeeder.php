<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Semestre;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semestre::insert([
            'id' =>1,
            'descricao'=>" I ", 
            'data_inicio'=>"2021-02-23",
            'data_termino'=>"2022-02-13",
            'anoLectivo_id'=>1,
            'criador_id'=>1,
        ]);

    }
}
