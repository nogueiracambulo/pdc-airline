<?php

namespace Database\Seeders;
use App\Models\Passageiro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;

class PassageiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passageiro::insert([
            'id' =>1,
            'nome'=>"Benvindo",
            'sobrenome'=>"Nogueira",
            'genero'=>"masculino",
            'telefone'=>"941000077",
            'email'=>"ben@gmail.com",
            'dataNascimento'=>"2020-10-06"
        ]);

        Passageiro::insert([
            'id' =>2,
            'nome'=>"Francisco",
            'sobrenome'=>"Nogueira",
            'genero'=>"masculino",
            'telefone'=>"941000077",
            'email'=>"ben@gmail.com",
            'dataNascimento'=>"2020-10-09"
        ]);


       
    }
}
