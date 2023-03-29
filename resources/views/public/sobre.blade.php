@extends('common.base-template')
@section('content')

<div class="container-fluid mx-0 px-0">

    <div id = "banner-contato">

        <div class="mask rgba-orange-light">

            <div class="row justify-content-center align-items-center mb-5 pb-4 mx-0 px-0 " style="padding-top:150px">

                <h2 class="font-weight-bold text-center h1 my-5 sombra" style = "color: var(--CLEAR)">Bem-vindo à Vera Napoli</h2>

            </div>
        </div>

    </div>

    <div class="container">

        <section class="section wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-iteration-count: 1; animation-delay: 0.3s; color: var(--WHITE)">
        
            <div class="row">
                <h4>Nossa História</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero tempore accusamus vitae, laboriosam possimus magni cumque suscipit ex sequi, sit deserunt ad totam in quasi, ut minus consequuntur veniam incidunt!
                </p>
            </div>

            
            @component('components.social-row')
            @endcomponent
            
            
            <div class="row">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero tempore accusamus vitae, laboriosam possimus magni cumque suscipit ex sequi, sit deserunt ad totam in quasi, ut minus consequuntur veniam incidunt!
                </p>
            </div>
            
        </section>
    </div>
</div>
