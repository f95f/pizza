@extends('common.base-template')
@section('content')

<div class="container-flex fundo-form banner-pequeno banner-pequeno-img1">

    <div class="mask rgba-black-strong">

        <div class="container" style = "padding-top: 150px">
            
            <div class = "row">
                
                @include('forms.autenticar_funcionario')
                
            </div>
        </div>
    </div>
</div>

