<?php

namespace Database\Seeders;
use App\Models\Reserva;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;


class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reserva::insert([
            'id' =>1,
            'quantidade_passageiro'=>2,
            'dataIda'=>"2023-01-20",
            'dataRegresso'=>"2023-02-10",
            'origem_id'=>1,
            'destino_id'=>2,
        ]);

        
       
    }
}
