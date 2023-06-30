<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingrediente;

class IngredienteController extends Controller{

    public function index(){
        
        $ingredientes = Ingrediente::all();
        return view('private.mostrar-ingredientes', ['ingredientes' => $ingredientes]);
    
    }
    
    public function create(){
        
        return view('private.criar-ingrediente');

    }

    public function store(Request $request){

        $ingrediente = new Ingrediente();

        $ingrediente -> nome = $request -> txtNome; 
        $ingrediente -> valor = $request -> txtValor; 
        $ingrediente -> medida = $request -> txtMedida;
        
        $ingrediente -> save();
        return redirect('dashboard') -> with('status', 'Ingrediente adicionado com sucesso.');
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
    public function edit(string $id){
        


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
