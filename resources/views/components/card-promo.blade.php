<div class="col-md-3">

    <!--Card-->
    <div class="card card-cascade narrower p-2">

        <div class="view view-cascade overlay" style = "box-shadow: none">
            <img src="{{asset('resources/media/sabores/'. $imagem. '.jpg')}}" class="card-img-top" alt="">
        </div>

        <div class="card-body card-body-cascade text-center no-padding">

            <h4 class="card-title">{{$sabor}}</h4>

            <a class="btn py-4 waves-effect waves-light btn-destaque" href = "pedir">
                Pedir!
            </a>

        </div>

    </div>

</div>