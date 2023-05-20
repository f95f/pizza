<?php

namespace App\Http\Controllers;

use App\Models\PizzaModel;
use Illuminate\Http\Request;

class PizzaController extends Controller{
    
    public function index(){
        
        return view('private.cadastrar-pizza', ['pageTitle' => 'Cadastrar Produto']);

    }

    public function salvarProduto(Request $request){

        //dd();  
        /*
        $produto = PizzaModel::create([

            'sabor' => $request -> txtSabor,
            'tipo' => $request -> txtTipo,
            'imagem' => $request -> txtImagem,
            'descricao' => $request -> txtDesc,
            'valor' => $request -> txtValor
        ]);

        $produto -> save();*/ //------------------------- um jeito 

        $pizza = new PizzaModel([
            
            'sabor' => $request -> txtSabor,
            'tipo' => $request -> txtTipo,
            'imagem' => $request -> txtImagem,
            'descricao' => $request -> txtDesc,
            'valor' => $request -> txtValor,
            
        ]);
        
        $pizza -> save(); //------------------------- outro jeito 
        
    }  



}