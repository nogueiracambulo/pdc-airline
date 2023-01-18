<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bilhete;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;

class BilheteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bilhete::insert([
            'id' =>1,
            'estado'=>"ok",
            'referencia'=>"11800064554",
            'tipo'=>"ida e volta",
            'tarifa_id'=>1,
            'passageiro_id'=>1
        ]);

        Bilhete::insert([
            'id' =>2,
            'estado'=>"ok",
            'referencia'=>"11800064555",
            'tipo'=>"ida e volta",
            'tarifa_id'=>1,
            'passageiro_id'=>2
        ]);
       
    
    }
}
