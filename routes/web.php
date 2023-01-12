<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VisitanteController;
use App\Http\Controllers\AeroportoController;
use App\Http\Controllers\PercursoController;
use App\Http\Controllers\TarifaController;
use App\Http\Controllers\AeronaveController;
use App\Http\Controllers\VooController;
use App\Http\Controllers\MembroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ROTAS  PARA UTILIZADORES VISITANTES
Route::get('/', [VisitanteController::class, 'index']);

Route::get('/sobre', function () {
    return view('visitantes.sobre');
});

Route::get('/contactos', function () {
    return view('visitantes.contactos');
});


//ROTA PRINCIPAL
Route::middleware([ 
    'auth:sanctum', 
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    // Route::get('/index',  [MainController::class, 'index']);

    // Gestão de Controlo de acesso - ROTAS EXCLUSIVAS PARA O ADMINISTRADOR
    Route::get('/admin/listar_administradores', [AdminController::class, 'listar_administradores']);
    Route::get('/admin/listar_utilizadores', [AdminController::class, 'listar_utilizadores']);
    Route::get('/admin/listar_funcoes', [AdminController::class, 'listar_funcoes']);
    Route::get('/admin/listar_permissoes', [AdminController::class, 'listar_permissoes']);
    Route::post('/registar_funcao', [AdminController::class, 'registarFuncao']);
    Route::post('/registar_permissao', [AdminController::class, 'registarPermissao']);
    Route::post('/registar_utilizador', [AdminController::class, 'registarUtilizador']);
    Route::get('/editar_utilizador/{id}', [AdminController::class, 'editarUtilizador']);
    Route::PUT('/actualizar_utilizador/{id}', [AdminController::class, 'actualizarUtilizador']);
    //=========================================================================================================================================   

    //ROTAS PARA GERIR AEROPORTO
    Route::get('/aeroportos/listar', [AeroportoController::class, 'listarAeroportos']);
    Route::post('/aeroporto/registar', [AeroportoController::class, 'registarAeroporto']);

    //ROTAS PARA GERIR PERCURSOS
    Route::get('/percursos/listar', [PercursoController::class, 'listarPercurso']);
    Route::post('/percurso/registar', [PercursoController::class, 'registarPercurso']);

    //ROTAS PARA GERIR REGALIAS
    Route::get('/regalias/listar', [TarifaController::class, 'listarRegalias']);
    Route::post('/regalia/registar', [TarifaController::class, 'registarRegalia']);

    //ROTAS PARA GERIR TARIFAS
    Route::get('/tarifas/listar', [TarifaController::class, 'listarTarifas']);
    Route::post('/tarifa/registar', [TarifaController::class, 'registarTarifa']);

    //ROTAS PARA GERIR FROTA
    Route::get('/frota/listar', [AeronaveController::class, 'listarFrota']);
    Route::post('/frota/registar', [AeronaveController::class, 'registarAeronave']);
    Route::post('/cabine/registar', [AeronaveController::class, 'registarCabine']);
    
    //ROTAS PARA GERIR VOOS
    Route::get('/voos/listar', [VooController::class, 'listarVoos']);
    Route::post('/voo/registar', [VooController::class, 'registarVoo']);
    Route::get('/voo/listarDetalhes/{id}', [VooController::class, 'listarDetalhesVoo']);

    // ROTAS PARA GERIR O UTILIZADOR
    route::get('/perfil', [UserController::class,'index']);
    route::get('/perfil/editar', [UserController::class,'editarPerfil']);
    Route::get('/user/eliminar{id}', [UserController::class, 'eliminar']);


});

 //ROTAS PARA GERIR MEMBROS PDC-AIRLINES
 Route::get('/membros/listar', [MembroController::class, 'listarMembros']);
 Route::get('/membros/listarDetalhes/{id}', [MembroController::class, 'listarDetalhesMembro']);
 Route::get('/membros/registo', [MembroController::class, 'apresentarFormRegisto']);
 Route::post('/membro/registar', [MembroController::class, 'registarMembro']);
