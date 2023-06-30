@extends('common.base-template-internal')
@section('content')

<div id="create-container" class="col-md-6 offset-md-3">

    <h1>Adicionar Ingrediente</h1>
    <hr>
    <form action="/ingrediente/guardar" method = "post" enctype = "multipart/form-data">
    @csrf

        <div class="form-group">
            <label for="txtNome">Nome:</label>
            <input type="text" class="form-control" name = "txtNome" id = "txtNomeIngrediente" placeholder="Nome do Ingrediente">
        </div>

        <div class="form-group">
            <label for="txtValor">Preço:</label>
            <input type="number" class="form-control" name = "txtValor" id = "txtValorIngrediente" placeholder=0>
        </div>

        <div class="form-group">
            <label for="txtMedida">Unidade de medida:</label>
            <select class="form-control" name = "txtMedida" id = "txtMedida">
                <option value="mg">Miligrama (mg)</option>
                <option value="g">Grama (g)</option>
                <option value="Kg">Quilograma (Kg)</option>
                <option value="l">Litro (l)</option>
            </select>
        </div>

        <input type="submit" id = "btnNovoIngrediente" class="btn btn-primary" value = "Cadastrar">
    </form>
    <a href="/dashboard" class="btn btn-primary">Voltar</a>

</div>

