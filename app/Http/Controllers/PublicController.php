<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        
        return view('public.index');
    }

    public function login(){

        return view('public.login');
    }

    public function pedir(){
        
        return view('public.pedir');
    }

    public function sobre(){
        
        return view('public.sobre');
    }

    public function contato(){
        
        return view('public.contato');
    }

    public function cardapio(){
        
        return view('public.cardapio');
    }
    
    public function painel(){
    
        return view('private.painel');
    }

    public function autenticar(){
    
        return view('private.autenticar');
    }
    
    public function editar_item(){
    
        return view('private.editar-item');
    }

    public function cadastrar_item(){
    
        return view('private.cadastrar-item');
    }

    public function editar_acessos(){
    
        return view('private.editar-acessos');
    }
}

?>