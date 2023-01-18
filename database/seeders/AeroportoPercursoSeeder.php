<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Aeroporto;
use App\Models\Percurso;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;

class AeroportoPercursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Adicionar aeroportos 1 e 2 ao percurso 1.
        Percurso::find(1)->aeroportos()->attach([1,2]);

        //Adicionar aeroportos 1,2 e 3 ao percurso 2.
        Percurso::find(2)->aeroportos()->attach([1,2,3]);

        //Adicionar aeroportos 2 e 1 ao percurso 3.
        Percurso::find(3)->aeroportos()->attach([2,1]);
    }
}
