<?php

use App\Http\Controllers\CardapioController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [PublicController::class, 'index']);
Route::get('/login', [PublicController::class, 'login']);
Route::get('/signup',[PublicController::class,'signUp']);
Route::get('/pedir', [PublicController::class, 'pedir']);
Route::get('/sobre', [PublicController::class, 'sobre']);
Route::get('/contato', [PublicController::class, 'contato']);
Route::get('/trabalhe-conosco', [PublicController::class, 'trabalheConosco']);
Route::get('/autenticar', [PublicController::class, 'autenticarFuncionario']);
Route::get('/cadastrar-produto', [PizzaController::class, 'cadastrarProduto']);

Route::get('/cardapio', [CardapioController::class, 'index']);
Route::post('/salvar-produto', [PizzaController::class, 'salvarProduto']);

Route::get('/painel', [PublicController::class, 'painel']);


/**
 * criar pizzaController, exibição e manipulação de pizzas; -------------------------- DONE
 * criar pedidoController, para criação, consulta e exclusão de pedidos;
 * criar clienteController, para administração de usuários clientes;
 * criar userController, para administra~çaop de usuários funcionários.
 */