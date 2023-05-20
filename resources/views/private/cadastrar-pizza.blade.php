@extends('common.base-template-internal')
@section('content')

<div class="container w-100 ">

    <div class="row py-5">

        <div class="col">

            <form method = "post" action = "salvar-produto" class="text-center p-5">
            @csrf
                <div class="form-row mb-4 mt-5">
                    <div class="col">
                        <input type="text" id="txtSabor" name = "txtSabor" class="form-control" placeholder="Nome do sabor">
                    </div>

                    <div class="col">
                        <input type="text" id="txtTipo" name = "txtTipo" class="form-control" placeholder="Tipo">
                    </div>
                </div>

                <input type="text" id="txtImagem" name ="txtImagem" class="form-control mb-4" placeholder="Localizar imagem...">
                <label for="txtMensagem">Descrição</label>
                <textarea type="text" id="txtDesc" name="txtDesc" rows="5" class="form-control md-textarea" placeholder="Descrição..."></textarea>
                <input type="number" id="txtValor" name ="txtValor" class="form-control my-4" placeholder="Preço">


                <hr class = "my-5">

                <button class="btn btn-destaque w-100 my-5 btn-block" type="submit">Cadastrar</button>

            </form>

        </div>

    </div>

</div>