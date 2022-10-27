<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnoLectivoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

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
Route::get('/', function () {
    // return view('welcome');
    return view('visitantes.inicio');
});

Route::get('/sobre', function () {
    return view('visitantes.sobre');
});

Route::get('/contactos', function () {
    return view('visitantes.contactos');
});


// ROTA PARA GERIR SEMESTRE
Route::post('/semestre/registo', [SemestreController::class, 'store']);

// ROTA PARA GERIR DISCIPLINAS
Route::post('/disciplinas/registo', [DisciplinaController::class, 'store']);
Route::get('/disciplinas/perfil/{id}', [DisciplinaController::class, 'mostrarPerfil']);


//ROTAS QUE CARREGAM A PÁGINA  "BIBLIOTECA CC"
Route::get('biblioteca_cc', [ConteudoController::class, 'show']);

//ROTAS PARA GERIR CONTEÚDOS
Route::post('/conteudos/registo', [ConteudoController::class, 'store']);
Route::get('/conteudo/eliminarConteudo/{id}', [ConteudoController::class, 'eliminarConteudo']);
Route::get('/conteudo/visualizar/{id}', [ConteudoController::class, 'visualizarConteudo']);
Route::get('/conteudo/baixar/{conteudo}', [ConteudoController::class, 'baixarConteudo']);

//ROTAS PARA GERIR PUBLICAÇÕES
// Route::post('/publicacoes/resgisto', [PublicacaoController::class,'store']);
// Route::get('/', [PublicacaoController::class, 'mostrarInicio']);


//ROTA PRINCIPAL
Route::middleware([ 
    'auth:sanctum', 
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () { return view('layouts.painel.principal'); })->name('dashboard');
    // Route::get('/index',  [MainController::class, 'index']);

    //ROTAS EXCLUSIVAS PARA O ADMINISTRADOR
    Route::post('/ano_lectivo/registo', [AnoLectivoController::class, 'store']);
    Route::get('/ano_lectivo/mostrar', [AnoLectivoController::class, 'show']);
    Route::post('/ano_lectivo/selecionar', [AnoLectivoController::class, 'selecionar']);

    // Gestão de Controlo de acesso
    Route::get('/admin/listar_administradores', [AdminController::class, 'listar_administradores']);
    Route::get('/admin/listar_utilizadores', [AdminController::class, 'listar_utilizadores']);
    Route::get('/admin/listar_funcoes', [AdminController::class, 'listar_funcoes']);
    Route::get('/admin/listar_permissoes', [AdminController::class, 'listar_permissoes']);
   
});
