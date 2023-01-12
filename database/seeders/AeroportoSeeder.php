<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Aeroporto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;


class AeroportoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aeroporto::insert([
            'id' =>1,
            'cidade'=>"Luanda", 
            'codigoIATA'=>"LAD",
        ]);

        Aeroporto::insert([
            'id' =>2,
            'cidade'=>"Lisboa", 
            'codigoIATA'=>"LIS",
        ]);

        Aeroporto::insert([
            'id' =>3,
            'cidade'=>"Cabinda", 
            'codigoIATA'=>"CAB",
        ]);

        Aeroporto::insert([
            'id' =>4,
            'cidade'=>"Catumbela", 
            'codigoIATA'=>"CBT",
        ]);
    }
}
