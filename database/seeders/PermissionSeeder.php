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
        Permission::insert(['id' =>1, 'nome'=>"registar_membro_pdc", 'descricao'=>"Adicionar um papel",]);

        Permission::insert(['id' =>2, 'nome'=>"procurar_voo", 'descricao'=>"Adicionar um papel",]);

        Permission::insert(['id' =>3, 'nome'=>"comprar_bilhete", 'descricao'=>"Adicionar um papel",]);

        Permission::insert(['id' =>4, 'nome'=>"alterar_info_bilhete", 'descricao'=>"Adicionar um papel",]);

        Permission::insert(['id' =>5, 'nome'=>"actualizar_registo_membro", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>6, 'nome'=>"reclamar_milha", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>7, 'nome'=>"pedir_reembolso", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>8, 'nome'=>"definir_frota", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>9, 'nome'=>"definir_voo", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>10, 'nome'=>"definir_regalias", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>11, 'nome'=>"consultar_ocupacao_voo", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>12, 'nome'=>"definir_funcao", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>13, 'nome'=>"atribuir_funcao", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>14, 'nome'=>"registar_pessoal_administrativo", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>15, 'nome'=>"actualizar_pssoal_administrativo", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>16, 'nome'=>"gerir_percurso", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>17, 'nome'=>"actualizar_voo", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>18, 'nome'=>"eliminar_membro", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>19, 'nome'=>"cancelar_voo", 'descricao'=>"Adicionar um papel",]);
        
        Permission::insert(['id' =>20, 'nome'=>"gerir_aeroporto", 'descricao'=>"Adicionar um papel",]);       
    }
}
