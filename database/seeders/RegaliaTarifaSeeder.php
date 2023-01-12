<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tarifa;
use App\Models\Regalia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;

class RegaliaTarifaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Adicionar regalias 1,2 e 4 à tarifa 1.
       Tarifa::find(1)->regalias()->attach([1,2,4]);

       //Adicionar regalias 1 e 2 à tarifa 2.
       Tarifa::find(2)->regalias()->attach([1,2]);

    }
}
