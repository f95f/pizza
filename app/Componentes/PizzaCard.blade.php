<?php

namespace App\Componentes;
class PizzaCard{

    function __construct(){

    }

    public function getCard($index){

        $html = '
            <div class="col-md-4 mx-auto my-3">

                <div class="card booking-card">
                    
                    <div class="view overlay">
            
                        <img class="card-img-top" src="" alt="Card imagem {{$sabor}}">
            
                    </div>
            
                    <div class="card-body">
                        
                        <h4 class="card-title font-weight-bold">{{$sabor}}</h4>
                        
                        <hr>
                        <ul class="list-unstyled list-inline rating mb-0">
                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                            <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                            <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                            <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                        </ul>
            
                        <a href="">
                            <h3 class="mb-2" style = "text-decoration: underline ">{{$tipo}}</h3>
                        </a>
                        
                        <p class="card-text">
                            {{$texto}}
                        </p>
            
                        <hr>
            
                        <p class="card-text">
                            Grande, sem borda:    
                            <h4 class = "font-weight-bold" style = "font-size: 2em;">R$ {{$valor}}</h4>
                        </p>
            
                        <a class="btn py-3 px-1 mx-2 waves-effect mx-auto waves-light btn-pedir w-100" href = "pedir">
                            Pedir!
                        </a>
            
                    </div>
            
                </div>
            
            </div>        
        ';

        return $html;
    }

    private function getPizza($index){

        /**
         * Esta função foi pensada para obter um objeto chamado Pizza
         * do banco de dados, por meio de um model(?).
         */

    }

}
