@extends('common.base-template')
@section('content')

<div class="container">

    <div class="row mb-5">

        <div class="col">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title">Panel title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Panel subtitle</h6>
                    <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                    <a href="#!" class="card-link">Card link</a>
                    <a href="#!" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="card-title">Panel title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Panel subtitle</h6>
                        <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                        <a href="#!" class="card-link">Card link</a>
                        <a href="#!" class="card-link">Another link</a>
                    </div>
                </div>
        </div>
        <div class="col">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title">Panel title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Panel subtitle</h6>
                    <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                    <a href="#!" class="card-link">Card link</a>
                    <a href="#!" class="card-link">Another link</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-5">
        <div class="col-4 mx-auto">

            <form class="text-center border border-light px-5" action="#!">

                <p class="h4 mb-4 my-5 indigo-text">Identifique-se!</p>

                <input type="email" id="email" name = "email" class="form-control mb-4" placeholder="E-mail">

                <input type="password" id="senha" name = "senha" class="form-control mb-4" placeholder="Senha">

                <button class="btn btn-indigo btn-block my-5" type="submit">Entrar</button>

            </form>

        </div>
    </div>

</div>