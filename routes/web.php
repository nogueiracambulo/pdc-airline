<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnoLectivoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\garimpoChatController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\MensagemController;
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
    //ROTAS QUE CARREGAM A PÁGINA  "BIBLIOTECA"
    Route::get('conteudos/inicio', [ConteudoController::class, 'index']);
    Route::get('conteudos/turma/{id}', [ConteudoController::class, 'listarDisciplina']);

    // ROTA PARA GERIR SEMESTRE
    Route::post('/turmas/registo', [TurmaController::class, 'store']);

    // ROTA PARA GERIR DISCIPLINAS
    Route::post('/disciplinas/registo', [DisciplinaController::class, 'store']);
    Route::get('/disciplinas/perfil/{id}', [DisciplinaController::class, 'mostrarPerfil']);

    //ROTAS PARA GERIR CONTEÚDOS
    Route::post('/conteudos/registo', [ConteudoController::class, 'store']);
    Route::get('/conteudos/listar/{id_turma}/{id_disciplina}', [ConteudoController::class, 'listarConteudos']);
    Route::get('/conteudo/visualizar/{id}', [ConteudoController::class, 'verDetalhes']);
    Route::get('/conteudo/baixar/{conteudo}', [ConteudoController::class, 'baixarConteudo']);
    Route::get('/conteudo/eliminarConteudo/{id}', [ConteudoController::class, 'destroy']);


    //ROTAS PARA GERIR ANO LECTIVO
    Route::post('/ano_lectivo/registo', [AnoLectivoController::class, 'store']);
    Route::get('/ano_lectivo/mostrar', [AnoLectivoController::class, 'show']);
    Route::post('/selecionarAno', [AnoLectivoController::class, 'selecionar']);


    // ROTAS PARA GERIR O UTILIZADOR
    route::get('/perfil', [UserController::class,'index']);

    //ROTAS PARA GESTÃO DO MÓDULO GARIMPO
    Route::post('/adicionar_garimpo', [garimpoChatController::class,'store']);
    Route::get('/ver/garimpo', [garimpoChatController::class,'listarGarimpos']);
    Route::get('eliminar/garimpo/{id}', [garimpoChatController::class,'eliminarGarimpo']);
    Route::get('listar/membro/{idGarimpo}/{nomeGarimpo}', [PedidoController::class,'listarMembrosGarimpo']);

    Route::get('ver/chat/{idGarimpo}/{nomeGarimpo}', [MensagemController::class,'mostrarChat']);
    Route::post('enviar_msg/{idGarimpo}', [MensagemController::class,'registarMensagem']);

    Route::get('inscrever/garimpo/{id}', [PedidoController::class,'inscreverPedido']);
    Route::get('pedidos/garimpo', [PedidoController::class,'listarPedido']);
    Route::get('/pedidos/garimpo/{idGarimpo}', [PedidoController::class,'listarPedidoGarimpo']);
    Route::get('eliminar/pedido/{id}', [PedidoController::class,'eliminarPedido']);
    Route::get('aceitar/pedido/{id}/{numInscritos}', [PedidoController::class,'aceitarPedido']);
    // Route::get('garimpos/usuario/', [PedidoController::class,'listarGarimpoUsuario']);
    Route::get('remover/membro/{pedidoId}/{numInscritos}', [PedidoController::class,'removerMembro']);
   //=========================================================================================================


});
