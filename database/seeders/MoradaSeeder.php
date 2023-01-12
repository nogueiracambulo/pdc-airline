<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Morada;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;

class MoradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Morada::insert([
            'id' =>2,
            'pais'=>"Angola",
            'cidade'=>"Luanda", 
            'user_id'=>2,
        ]);
    }
}
