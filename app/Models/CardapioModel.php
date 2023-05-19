<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CardapioModel extends Model{
    
    /** 
     * Método para gerar o conteúdo da página Cardápio. 
     * Retorna as informações de todas as pizzas disponíveis
     * para a venda.
     * 
     * @return array[string][string] Uma matriz com todas as 
     * pizzas e as informações de cada pizza? 
     **/
    public function getPizzas(){

        $sql = "select * from pizza";

        return DB::select($sql);

    }

}
