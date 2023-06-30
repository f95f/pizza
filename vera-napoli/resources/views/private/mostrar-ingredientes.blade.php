@extends('common.base-template-internal')
@section('content')

<div id="show-container" class="col-md-6 offset-md-3">
    <h1>Ingredientes:</h1>
    <table id = "ingredientes-table">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Unidade</th>
        </tr>
        @foreach($ingredientes as $item)

        <tr>
            <td>{{$item -> id}}</td>
            <td>{{$item -> nome}}</td>
            <td>{{$item -> valor}}</td>
            <td>{{$item -> medida}}</td>
        </tr>

        @endforeach
    </table>
    <a href="dashboard" class="btn btn-primary">Voltar</a>
</div>