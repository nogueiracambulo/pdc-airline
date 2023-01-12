<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\CssSelector\Parser\Handler\HashHandler;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::insert([
            'id' =>1,
            'name'=>"admin", 
            'apelido'=>"admin",
            'dataNascimento'=>"1996-02-20",
            'genero'=>"masculino",
            'telefone'=>"944676767",
            'email'=>"admin@gmail.com",
            'password'=> Hash::make('secret'),
        ]);
        
        User::insert([
            'id' =>2,
            'name'=>"Cambulo", 
            'apelido'=>"Nogueira",
            'dataNascimento'=>"1980-10-06",
            'genero'=>"masculino",
            'telefone'=>"944676767",
            'email'=>"cambllejunior@gmail.com",
            'password'=> Hash::make('1234567890'),
        ]);
    }
}
