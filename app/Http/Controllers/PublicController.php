<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class PublicController extends Controller{

    public function index(){
        
        return view('public.index', ['pageTitle' => 'Página Inicial']);
    }

    public function login(){

        return view('public.login', ['pageTitle' => 'Entrar']);
    }

    public function signUp(){

        return view('public.signup', ['pageTitle' => 'Cadastre-se!']);
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
    
    public function trabalheConosco(){
        
        return view('public.trabalhe-conosco', ['pageTitle' => 'Junte-se a nós!']);
    }

    public function autenticarFuncionario(){
        
        return view('private.autenticar', ['pageTitle' => 'Identifique-se!']);
    }

    public function save(Request $request){
        
        $data = $request -> input();

        $model = new LoginModel();
        $v = $model -> signUserIn($data); // $v: vetor processado
        
        return view('public.sign_success', ['info' => $v]);

    }

}
    
