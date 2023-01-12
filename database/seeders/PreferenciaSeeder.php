<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Preferencia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;

class PreferenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Preferencia::insert([
            'id' =>1,
            'refeicao'=>"carne",
            'tipo_lugar'=>"Janela"
        ]);
        Preferencia::insert([
            'id' =>2,
            'refeicao'=>"Peixe",
            'tipo_lugar'=>"Corredor"
        ]);
    }
    

}
