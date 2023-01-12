<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Voo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;

class VooSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Voo::insert([
            'id' =>1,
            'numero_voo'=>"PD650",
            'dataPartida'=>"2023/01/10",
            'horaPartida'=>"13:30",
            'horaCheckin'=>"10:30",
            'horaEmbarque'=>"12:30",
            'dataChegada'=>"2023/01/10",
            'horaChegada'=>"15:30",

            'percurso_id'=>1,
            'aeronave_id'=>1,
            'administrativo_id'=>1,

        ]);
    }



    

}
