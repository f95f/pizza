<?php

namespace App\Http\Controllers;

use App\Models\CardapioModel;
use Illuminate\Http\Request;

class CardapioController extends Controller{
    
    public function index(){

        $model = new CardapioModel();
        $teste = $model -> getPizzas();

        dd($teste);

        return view('public.cardapio', ['pageTitle' => 'Cardápio']); //retornar view cardápio com os dados obtidos do db como argumentos?
    
    }
}
