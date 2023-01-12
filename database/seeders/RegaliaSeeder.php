<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Regalia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;

class RegaliaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Regalia::insert([
            'id' =>1,
            'descricao'=>"Direito a refeição",
        ]);

        Regalia::insert([
            'id' =>2,
            'descricao'=>"Direito a reembolso",
        ]);

        Regalia::insert([
            'id' =>3,
            'descricao'=>"Alteração da data sem custos",
        ]);

        Regalia::insert([
            'id' =>4,
            'descricao'=>"Acesso ao Lounge",
        ]);
    }
}
