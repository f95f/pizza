<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardapioController extends Controller{

    public function index(){
        /*
        $model = new CardapioModel();
        $teste = $model -> getPizzas();

        //dd($teste);

        return view('public.cardapio', ['pageTitle' => 'Cardápio'], ['teste' => $teste]); //retornar view cardápio com os dados obtidos do db como argumentos?
    */
        return view('public.cardapio', ['pageTitle' => 'Cardápio']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
