<div class="col-md-4 mx-auto my-3">

    <div class="card booking-card">
        
        <div class="view overlay">
            <img class="card-img-top" src="{{asset('resources/media/sabores/'. $imagem. '.jpg')}}" alt="Card image cap">
            <a href="#!">
                <div class="mask rgba-white-slight waves-effect waves-light"></div>
            </a>
        </div>

        <div class="card-body">
        
            <h4 class="card-title font-weight-bold"><a>{{$sabor}}</a></h4>

            <ul class="list-unstyled list-inline rating mb-0">
                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
            </ul>

            <p class="mb-2">{{$tipo}}</p>
            
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            <a class="btn py-4 waves-effect mx-auto waves-light btn-pedir" href = "pedir">
                Pedir!
            </a>
        
        </div>

    </div>

</div>