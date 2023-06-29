@extends('common.base-template')
@section('content')

<div class="container-fluid mx-0 mb-3 px-0">
    
    @component('public-components.banner-pequeno', [
        'imagem' => 'banner-pequeno-img2',
        'texto' => 'Explore nossas receitas!'
    ])
    @endcomponent

    <div class="row py-5 px-0 mx-0 justify-content-center align-items-center" style = "background-color: var(--YELLOWISH)">

        <div class="col-md-6">

            <form class="form-inline my-0">
                <input class="form-control form-control-sm w-100 px-3 py-4" type="text" name = "txtPesquisar" id = "txtPesquisar" placeholder="Pesquisar Sabores"
                aria-label="Search" >
                <!i class="fas fa-search" aria-hidden="true" style = "color: var(--YELLOWISH)"></--i>

                <div class=" row justify-content-center align-items-center">

                </div>
            </form>

            <div class="btn-group btn-group-toggle mt-3 align-text-center" data-toggle="buttons">
                
                    <label class="btn mx-2 active "rounded="true" >
                        <input type="checkbox" checked autocomplete="off"> Tradicionais
                    </label>
                    <label class="btn mx-2 ">
                        <input type="checkbox" autocomplete="off"rounded="true" > Doces
                    </label>
                    <label class="btn mx-2 ">
                        <input type="checkbox" autocomplete="off"rounded="true" > Internacionais
                    </label>
                    
             </div>
        </div>
    </div>

</div>
    
<div class="container">

    <div class="row justify-content-center align-items-center ">

       {{--   
    @foreach ($teste as $item)    

        @component('public-components.item-cardapio', [
            'tipo' => $item -> tipo,
            'sabor' => $item -> sabor,
            'imagem' => $item -> imagem,
            'texto' => $item -> descricao,
            'valor' => $item -> valor
        ])
        @endcomponent

    @endforeach
    --}}
            @component('public-components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Mussarela',
                'imagem' => 'mussarela',
                'texto' => 'Tradicional de queijo mussarela com tomates frescos, azeitonas e orégano.',
                'valor' => '39,99'
            ])
            @endcomponent

            @component('public-components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Calabresa',
                'imagem' => 'calabresa',
                'texto' => 'Fatias de calabresa cozidas com anéis de cebolas, azeitonas e orégano.',
                'valor' => '42,99'
            ])
            @endcomponent

            @component('public-components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Marguerita',
                'imagem' => 'marguerita',
                'texto' => 'Mussarelas especiais, parmesão, manjericão fresco e azeite.',
                'valor' => '42,99'
            ])
            @endcomponent

        </div>

        <div class="row">

            @component('public-components.item-cardapio', [
                'tipo' => 'Doce',
                'imagem' => 'ovomaltine',
                'sabor' => 'Ovomaltine®',
                'texto' => 'Pizza de chocolate com granulado e Ovomaltine®.',
                'valor' => '52,99'
            ])
            @endcomponent

            @component('public-components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Mexicana',
                'imagem' => 'mexicana',
                'texto' => 'Mussarela, bacon, palmito, alhos frescos e anéis de cebola.',
                'valor' => '42,99'
            ])
            @endcomponent

            @component('public-components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Napolitana',
                'imagem' => 'napolitana',
                'texto' => 'Mussarela, parmesão e fatias de tomates frescos.',
                'valor' => '48,59'
            ])
            @endcomponent

        </div>

        <div class="row">

            @component('public-components.item-cardapio', [
                'tipo' => 'Tradicional',
                'sabor' => 'Portuguesa',
                'imagem' => 'portuguesa',
                'texto' => 'Mussarela, ovos, presunto e anéis de cebolas frescas.',
                'valor' => '42,59'
            ])
            @endcomponent

            @component('public-components.item-cardapio', [
                'tipo' => 'Doce',
                'sabor' => 'Torta de Limão',
                'imagem' => 'limão',
                'texto' => 'Pizza doce com mousse de limão e cobertura de raspas de limão.',
                'valor' => '55,99'
            ])
            @endcomponent

            @component('public-components.item-cardapio', [
                'tipo' => 'Doce',
                'sabor' => 'Banana com Canela',
                'imagem' => 'banana',
                'texto' => 'Pizza doce de banana com doce de leite e canela.',
                'valor' => '55,99'
            ])
            @endcomponent

        </div>

    </div>
    <hr>
</div>