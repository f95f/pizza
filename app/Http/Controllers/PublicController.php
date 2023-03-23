<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class PublicController extends Controller{

    public function index(){
        
        return view('public.index', ['pageTitle' => 'Página Inicial']);
    }

    public function login(){

        return view('public.login_cliente', ['pageTitle' => 'Entrar']);
    }

    public function signUp(){

        return view('forms.signup_cliente', ['pageTitle' => 'Cadastre-se!']);
    }
    
    public function pedir(){
        
        return view('public.pedir', ['pageTitle' => 'Faça seu pedido!']);
    }

    public function sobre(){
        
        return view('public.sobre', ['pageTitle' => 'Sobre']);
    }

    public function contato(){
        
        return view('public.contato', ['pageTitle' => 'Contato']);
    }

    public function cardapio(){
        
        return view('public.cardapio', ['pageTitle' => 'Cardápio']);
    }
    
    public function save(Request $request){
        
        $data = $request -> input();

        $model = new LoginModel();
        $v = $model -> signUserIn($data); // $v: vetor processado
        
        #print_r($v);
        return view('public.sign_success', ['info' => $v]);

    }

    /*
        - Funções para páginas internas -
    
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

    */
}
    
