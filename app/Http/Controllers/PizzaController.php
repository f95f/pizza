<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller{
    
    public function index(){
        
        return view('private.cadastrar-pizza', ['pageTitle' => 'Cadastrar Produto']);

    }

    public function salvarProduto(Request $request){
        

        dd($request);   

    }   


}
