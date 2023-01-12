<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cabine;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;


class CabineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cabine::insert([
            'id' =>1,
            'capacidade'=>12, 
            'aeronave_id'=>1,
            'tarifa_id'=>1
        ]);

        Cabine::insert([
            'id' =>2,
            'capacidade'=>108, 
            'aeronave_id'=>1,
            'tarifa_id'=>2
        ]);
 
    }
}
