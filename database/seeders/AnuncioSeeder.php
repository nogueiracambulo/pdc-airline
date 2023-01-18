<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Anuncio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;


class AnuncioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anuncio::insert([
            'id' =>1,
            'titulo'=>"VOE COM SEGURANÇA", 
            'descricao'=>"VOE COM SEGURANÇA E CONFORTO E DESCUBRA O MUNDO CONNOSCO",
            'tipo'=>"1",
            'imagem'=>"aviao-1.png",
            'user_id'=>1,
        ]);

        Anuncio::insert([
            'id' =>2,
            'titulo'=>"DESCUBRA O MUNDO ", 
            'descricao'=>"VOE CONNOSCO E DESCUBRA AS BELEZAS DO MUNDO",
            'tipo'=>"1",
            'imagem'=>"aviao-2.png",
            'user_id'=>1,
        ]);

        
        Anuncio::insert([
            'id' =>3,
            'titulo'=>"JÁ SONHOU DEMAIS!!!", 
            'descricao'=>"EXPERIMENTE REALIZAR OS TEUS SONHOS COM A PDC-AIRLINES",
            'tipo'=>"1",
            'imagem'=>"aviao-3.png",
            'user_id'=>1,
        ]);

        //DESTINOS
        Anuncio::insert([
            'id' =>4,
            'titulo'=>"CABINDA", 
            'descricao'=>"18.000KZ",
            'tipo'=>"2",
            'imagem'=>"cidade-cabinda.png",
            'user_id'=>1,
        ]);
        Anuncio::insert([
            'id' =>5,
            'titulo'=>"LUBANGO", 
            'descricao'=>"50.000KZ",
            'tipo'=>"2",
            'imagem'=>"cidade-lubango.png",
            'user_id'=>1,
        ]);

        Anuncio::insert([
            'id' =>6,
            'titulo'=>"CATUMBELA", 
            'descricao'=>"50.000KZ",
            'tipo'=>"2",
            'imagem'=>"cidade-catumbela.png",
            'user_id'=>1,
        ]);

        Anuncio::insert([
            'id' =>7,
            'titulo'=>"LISBOA", 
            'descricao'=>"300.000KZ",
            'tipo'=>"2",
            'imagem'=>"cidade-lisboa.jpg",
            'user_id'=>1,
        ]);

        Anuncio::insert([
            'id' =>8,
            'titulo'=>"MADRID", 
            'descricao'=>"250.000KZ",
            'tipo'=>"2",
            'imagem'=>"cidade-espanha.jpg",
            'user_id'=>1,
        ]);
        Anuncio::insert([
            'id' =>9,
            'titulo'=>"GUARULHOS", 
            'descricao'=>"400.000KZ",
            'tipo'=>"2",
            'imagem'=>"cidade-guarulhos.jfif",
            'user_id'=>1,
        ]);
    }
}
