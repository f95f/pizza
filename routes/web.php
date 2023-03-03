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
