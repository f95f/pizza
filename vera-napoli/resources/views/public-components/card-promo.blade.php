<div class="col-md-4">

    <div class="card card-cascade narrower p-2">

        <div class="view view-cascade overlay" style = "box-shadow: none">
            <img src="{{asset('media/sabores/'. $imagem. '.png')}}" class="card-img-top" alt="">
        </div>

        <div class="card-body card-body-cascade text-center no-padding">

            <h4 class="card-title">{{$sabor}}</h4>

            <h3 class="mb-3 grey-text">{{$tipo}}</h6>

            <a class="btn py-4 waves-effect waves-light btn-pedir" href = "pedir">
                Pedir!
            </a>

        </div>

    </div>

</div>