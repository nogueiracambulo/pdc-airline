<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tarifa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;

class TarifaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarifa::insert([
            'id' =>1,
            'nome'=>"Classe Executiva",
            'codigo'=>"C",
        ]);

        Tarifa::insert([
            'id' =>2,
            'nome'=>"Classe Económica",
            'codigo'=>"Y",
        ]);
    }
}
