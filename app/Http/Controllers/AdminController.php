<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function listar_administradores(){

        $users=User::with('roles')->get();
        return view('admin.administradores', ['users'=>$users]);

    }

    //Retorna todos os utilizadores registados no sistema e associa-os a tabela roles(funções ou papeis)
    public function listar_utilizadores(){
        $users=User::with('roles')->get();
        return view('admin.utilizadores', ['users'=>$users]);

    }

    public function listar_funcoes(){

        $roles=Role::with('permissions')->get();
        return view('admin.funcoes',['roles'=>$roles]);

    }

    public function listar_permissoes(){

        $roles=Role::with('permissions')->get();
        $permissions=Permission::with('roles')->get();
    
        return view('admin.permissoes',['roles'=>$roles, 'permissions'=>$permissions]);

    }
}
