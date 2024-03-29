<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Morada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
        $roles=Role::with('permissions')->get();
        $users=User::with('roles')->get();
        return view('admin.utilizadores', ['users'=>$users, 'roles'=>$roles]);

    }

    public function listar_funcoes(){
       $permissions=Permission::all();
        $roles=Role::with('permissions')->get();
        return view('admin.funcoes',['roles'=>$roles,'permissions'=>$permissions]);

    }

    public function listar_permissoes(){

        $roles=Role::with('permissions')->get();
        $permissions=Permission::with('roles')->get();
    
        return view('admin.permissoes',['roles'=>$roles, 'permissions'=>$permissions]);

    }

    public function registarFuncao(Request $request){
        $funcao = new Role;
        $funcao->nome=$request->nome;
        $funcao->descricao=$request->descricao;

        $funcao->save();
        $permissoes=$request->permissoes;

        //Atribuindo permissões a função
         for($i=0; $i < count($permissoes); $i++){
            if($permissoes[$i]!=null){
                Role::find($funcao->id)->permissions()->attach($permissoes[$i]);
            }
         }

        Alert::success('sucesso', 'Função criada com sucesso');
        return back();
    }


    public function registarPermissao(Request $request){
        $permissao = new Permission;
        $permissao->nome=$request->nome;
        $permissao->descricao=$request->descricao;

        $permissao->save();
      
        Alert::success('sucesso', 'Permissão criada com sucesso');
        return back();
    }


    public function registarUtilizador(Request $request){
        $user=new User();
        $user->name=$request->nome;
        $user->apelido=$request->apelido;
        $user->dataNascimento=$request->dataNascimento;
        $user->genero=$request->genero;
        $user->telefone=$request->telefone;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        //Criar morada e associar ao utilizador criado.
        $morada=new Morada();
        $morada->pais=$request->pais;
        $morada->cidade=$request->cidade;
        $morada->user_id=$user->id;
        $morada->save();

        //Atribuindo Função ao Utilizador
        User::find($user->id)->roles()->attach($request->funcao);
                
        Alert::success('sucesso', 'Utilizador criado com sucesso');
        return back();

    }

    public function editarUtilizador($id){
        $utilizador =User::find($id);
        $roles=Role::all();
       
        return view('admin.utilizadorEditar',['roles'=>$roles, 'utilizador'=>$utilizador]);

    }

    public function actualizarUtilizador(Request $request){
        $utilizador = User::findOrfail($request->id)->update();

        $utilizador->name=$request->name;
        $utilizador->email=$request->email;
        $utilizador->password=Hash::make($request->password);
        $utilizador->save();

        //Atribuindo Função ao Utilizador
        User::find($utilizador->id)->roles()->attach($request->funcao);
                
        Alert::success('sucesso', 'Utilizador criado com sucesso');
        return back();
    }
    
}
