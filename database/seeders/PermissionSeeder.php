<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            'id' =>1,
            'nome'=>"add_role", 
            'descricao'=>"Adicionar um papel",
        ]);

        Permission::insert([
            'id' =>2,
            'nome'=>"show_role", 
            'descricao'=>"Ver papeis",
        ]);
    }
}
