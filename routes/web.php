<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

# Route::get('/pagina', [PublicController::class, 'pagina']);

Route::get('/index', [PublicController::class, 'index']);
Route::get('/login', [PublicController::class, 'login']);
Route::get('/pedir', [PublicController::class, 'pedir']);
Route::get('/sobre', [PublicController::class, 'sobre']);
Route::get('/contato', [PublicController::class, 'contato']);
Route::get('/cardapio', [PublicController::class, 'cardapio']);

/*
    - Páginas internas -

Route::get('/painel', [PublicController::class, 'painel']);
Route::get('/autenticar', [PublicController::class, 'autenticar']);
Route::get('/editar-item', [PublicController::class, 'editar-item']);
Route::get('/cadastrar-item', [PublicController::class, 'cadastrar-item']);
Route::get('/editar-acessos', [PublicController::class, 'editar-acessos']);

*/

Route::get('/', function () {
    return view('home');
});

Route::get('/cardapio', function () {
    #echo 'o cardápio';
    return view('cardapio');
});

// Route::get('/template', function () {
//     #echo 'o cardápio';
//     return view('common.base-template');
// });

Route::get('/home', function () {
    #echo 'o cardápio';
    return view('home');
});

Route::get('/login', function () {
    #echo 'o login';
    return view('public.login');
});

Route::get('/landing', function () {

    return view('public.landing');

});

Route::get('/palette', function () {

    return view('private.palette');

});
