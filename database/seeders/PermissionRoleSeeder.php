<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ADMIN - ADICIONAR PAPEL E VISUALIZAR PAPEIS (add_role e show_roles)
        Role::find(1)->permissions()->attach([1,2]);

        //ESTUDANTE - VISUALIZAR PAPEIS (show_roles)
        Role::find(2)->permissions()->attach(2);
    }
}
