<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            'id' =>1,
            'nome'=>'admin', 
            'descricao'=>"Administrador",
        ]);

        Role::insert([
            'id' =>2,
            'nome'=>'membro_pdc_airline', 
            'descricao'=>"Passageiro frequente pdc-airline",
        ]);

        Role::insert([
            'id' =>3,
            'nome'=>'pessoal_administrativo', 
            'descricao'=>"Colaborador pdc-airline",
        ]);

    }
}
