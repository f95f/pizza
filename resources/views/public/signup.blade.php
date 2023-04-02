@extends('common.base-template')
@section('content')

<div class="container-flex banner-pequeno banner-pequeno-img2">

    <div class="mask rgba-black-strong">
        
        <div class="container" style = "padding-top: 150px">
            
            <div class = "row">
                
                @include('forms.signup_cliente')
                
            </div>
        </div>
    </div>
</div>