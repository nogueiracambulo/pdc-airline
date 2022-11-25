<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VisitanteController;
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
    Route::get('/admin/anosLectivos', [AnoLectivoController::class, 'listar_anosLectivos']);
    Route::post('/registar_funcao', [AdminController::class, 'registarFuncao']);
    Route::post('/registar_permissao', [AdminController::class, 'registarPermissao']);
    Route::post('/registar_utilizador', [AdminController::class, 'registarUtilizador']);
    Route::get('/editar_utilizador/{id}', [AdminController::class, 'editarUtilizador']);
    Route::PUT('/actualizar_utilizador/{id}', [AdminController::class, 'actualizarUtilizador']);
    //=================================================MÓDULO BIBLIOTECA==================================================================================   

    //ROTAS PARA GERIR ANO LECTIVO
    Route::post('/ano_lectivo/registo', [AnoLectivoController::class, 'store']);
    Route::get('/ano_lectivo/mostrar', [AnoLectivoController::class, 'show']);
    Route::post('/selecionarAno', [AnoLectivoController::class, 'selecionar']);


    // ROTAS PARA GERIR O UTILIZADOR
    route::get('/perfil', [UserController::class,'index']);
    route::get('/perfil/editar', [UserController::class,'editarPerfil']);
    Route::get('/user/eliminar{id}', [UserController::class, 'eliminar']);


});
