<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;



use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //UTILIZADOR  COM PAPEL DE ADMINISTRADOR
        User::find(1)->roles()->attach(1);

        //UTILIZADOR COM PAPEL DE ESTUDANTE
        User::find(2)->roles()->attach(2);
    }
}
