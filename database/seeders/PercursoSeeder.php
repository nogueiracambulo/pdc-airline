<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Percurso;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;
use Illuminate\Database\Seeder;

class PercursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Percurso::insert([
            'id' =>1,
        ]);

        Percurso::insert([
            'id' =>2,
        ]);
    }
}
