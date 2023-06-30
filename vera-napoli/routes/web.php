<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\FuncionarioController;

Route::get('/', function () {
     return view('public.index', ["pageTitle" => "Página Inicial"]);
});
Route::get('pedir', function () {
     return view('public.pedir', ["pageTitle" => "Peça Agora!"]);
});
Route::get('sobre', function () {
     return view('public.sobre', ["pageTitle" => "Sobre"]);
});
Route::get('contato', function () {
     return view('public.contato', ["pageTitle" => "Contato"]);
});
Route::get('trabalhe-conosco', function () {
     return view('public.trabalhe-conosco', ["pageTitle" => "Trabalhe Conosco"]);
});

Route::get('/cardapio', [CardapioController::class, 'index']);

Route::get('/ingredientes', [IngredienteController::class, 'index']) -> middleware('auth');
Route::get('/ingredientes/novo', [IngredienteController::class, 'create']) -> middleware('auth');
Route::post('/ingrediente/guardar', [IngredienteController::class, 'store']) -> middleware('auth');

Route::get('/pizzas/novo', [PizzaController::class, 'create']) -> middleware('auth');
Route::get('/pedidos/novo', [pedidoController::class, 'create']) -> middleware('auth');
Route::get('/funcionarios/novo', [FuncionarioController::class, 'create']) -> middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
