@extends('layouts.app')
@section('description', 'Ante la contingencia generada por el Covid-19, en La Familia Perfecta tomamos las medidas necesarias para cuidar la salud de todos')
@section('title', 'Medidas de contingencia ante el Coronavirus')
@section('content')
    <section id="hero-desktop">
        @include('hero.covid')
    </section>
    <section id="hero-mobile">
        @include('hero-mobile.covid')    
    </section>
    <section class="container-gral">
         <div id="container-catalogo" class="margin-10" style="margin-top: 9%;">
            <div class="col-12 bottommargin-lg">
                <div class="text-center mb-5" >
                    <h2 class="font-weight-normal">Nuestras salas de exhibición están abiertas para <br> visitas en persona.</h2>
                    <h4 class="font-weight-normal">Para garantizar su seguridad tomamos las siguientes precauciones:</h4>
                </div>
                <ul class="bullet-color-iesa">
                    <li class="mb-3">Para limitar el número total de visitantes en la sala de exposición, solo celebraremos dos citas a la vez.</li>
                    
                    <li class="mb-3">Se requerirá que todos los visitantes usen una máscara facial. Si no tiene uno, le proporcionaremos una máscara.</li>

                    <li class="mb-3">Entendemos que interactuar con los electrodomésticos es una gran parte de la experiencia y queremos que todos estén seguros. Si desea tocar los electrodomésticos, le pedimos que use guantes, los cuales se le proporcionarán.</li>

                    <li class="mb-3">Se les pide los visitantes que practiquen el distanciamiento social.</li>

                    <li class="mb-3">No estaremos sirviendo comida o bebidas en este momento.</li>

                    <li class="mb-3">Después de cada cita, las pantallas y los electrodomésticos que se tocaron se desinfectarán. </li>

                    <li class="mb-3">En este momento, pedimos que los niños no visiten las salas de exhibición.</li>
                </ul>
              
                <p class="mb-4">Además de las citas en persona, se seguirán ofreciendo nuestras citas virtuales a través de medios digitales. Para hacer una cita, ya sea en persona o virtual, visite nuestro sistema de <a style="color: #01bb9c !important;" href="{{url('/cita')}}">programación en línea</a> o llámenos al <a href="tel:+5215552809648">+52 (1) 55 5280 9648</a>.</p>
                <p><b>De antemano los agradecemos, <br/> <span  style="color: #01bb9c !important;">Grupo IESA</span></b></p>
            </div>   
        </div>
    </section>
@endsection

@section('styles')
@endsection

@section('scripts')
@endsection
