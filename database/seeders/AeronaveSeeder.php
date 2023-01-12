<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Aeronave;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;

class AeronaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aeronave::insert([
            'id' =>1,
            'nome'=>"Cunene", 
            'matricula'=>"D2-PDC001",
            'marca'=>"Boeng",
            'modelo'=>"B-737",
            'foto'=>"aviaoModelo.png",
        ]);
    }
}
