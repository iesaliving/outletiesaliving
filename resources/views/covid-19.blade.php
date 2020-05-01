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
        <div id="container-catalogo" class="margin-10">
            <div class="col-12 bottommargin-lg">
                <p class="mb-5">En vista del impacto del Coronavirus, en Grupo IESA estamos tomando una serie de previsiones para proteger la seguridad y la salud de todos nuestros clientes, aliados y empleados.</p>
                
                <h2 class="text-uppercase">Visitas al Showroom</h2>
                <p class="mb-4">Estaremos brindando recorridos virtuales por nuestro Showroom y nuestros representantes de ventas seguirán disponibles para atender dudas vía telefónica y whatsapp. Visite la siguiente página para agendar su recorrido virtual <b><a  href="{{ URL::to('/showroom') }}" style="color: #01bb9c !important;" class="text-uppercase">[link]</a></b>.</p>

                <h2 class="text-uppercase">Entregas y otras visitas</h2>
                <p class="mb-4">Por favor, siga las normas de distanciamiento social una vez que entre a nuestras instalaciones e interactúe con nuestro equipo. Si puede ser atendido por teléfono, le invitamos a ser atendido vía telefónica.</p>
                

                <h2 class="text-uppercase">Trabajo desde casa</h2>
                <p class="mb-4">Todo nuestro equipo en posibilidad de trabajar desde sus hogares, lo estarán haciendo, así que estaremos operando con el personal mínimo necesario en nuestras instalaciones. Por favor, tenga en consideración esto si nuestro tiempo de respuesta es más lento que lo habitual.</p>

                <h2 class="text-uppercase">Eventos y viajes</h2>
                <p class="mb-4">Todos los eventos públicos e internos de la compañía y los viajes corporativos están suspendidos hasta el momento en el que sea seguro retomarlos.</p>
                <p class="mb-4">No obstante, seguimos disponibles para ayudar a nuestros clientes y aliados con cualquier duda o requerimiento, por favor contáctenos al [Número telefónico]. Nuestro equipo recibirá su llamada y remitirá sus solicitudes al departamento necesario.</p>
                <p><b>De antemano los agradecemos, <br/> <span  style="color: #01bb9c !important;">Grupo IESA</span></b></p>
            </div>   
        </div>

    </section>
@endsection

@section('styles')
@endsection

@section('scripts')
@endsection
