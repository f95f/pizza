<div class="col-md-4 mx-auto my-3">

    <div class="card booking-card">
        
        <div class="view overlay">

            <img class="card-img-top" src="{{asset('resources/media/sabores/'. $imagem. '.jpg')}}" alt="Card imagem {{$sabor}}">

        </div>

        <div class="card-body">
        
            <h4 class="card-title font-weight-bold">{{$sabor}}</h4>

            <ul class="list-unstyled list-inline rating mb-0">
                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
            </ul>

            <p class="mb-2">{{$tipo}}</p>
            
            <p class="card-text">
                {{$texto}}
            </p>

            <p class="card-text">
                Grande, sem borda:    
                <h4 class = "font-weight-bold">R$ {{$valor}}</h4>
            </p>

            <a class="btn py-3 px-1 mx-2 waves-effect mx-auto waves-light btn-pedir w-100" href = "pedir">
                Pedir!
            </a>

        </div>

    </div>

</div>