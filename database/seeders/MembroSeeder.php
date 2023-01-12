<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Membro;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;

class MembroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membro::insert([
            'id' =>1,
            'numero_membro'=>"PDC-0001", 
            'titulo'=>"Sr",
            'idioma_preferencia'=>"Portugues",
            'milhas'=>2000,
            'user_id'=>2,
            'preferencia_id'=>1
        ]);
    }
}
