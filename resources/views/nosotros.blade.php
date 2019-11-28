@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Nosotros')
@section('content')




<!-- <section id="hero-desktop">
<video id="slide-video" poster="{{ URL::asset('img/nosotros/hero.jpg')}}" preload="auto" loop="" autoplay="" muted="" playsinline style="width: 100%; height: 100%;">
  <source src="{{ URL::asset('img/timelab.mp4')}}" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'/>
</video>
</section>
<section id="hero-mobile">
<video id="slide-video" poster="{{ URL::asset('img/nosotros/mobile.jpg')}}" preload="auto" loop="" autoplay="" muted="" playsinline style="width: 100%; height: 100%;">
  <source src="{{ URL::asset('img/timelab-mobile.mp4')}}" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'/>
</video>
</section> -->

<section id="hero-desktop">
        <img src="{{ URL::asset('img/nosotros/hero.jpg')}}">
    </section>

<section id="hero-mobile">
  <img src="{{ URL::asset('img/nosotros/mobile.jpg')}}">
</section>

<section class="container-gral" style="padding-top: 4px" >
    
        <div id="container-catalogo" class="margin-10">

            <div class="col-12 text-center bottommargin-lg">
                <h2>SU FUTURA COCINA EMPIEZA AQUÍ</h2>
                <p>Empiece en uno de nuestros showrooms Sub-Zero, Wolf, Cove y Asko. Aquí lo atenderá un consultor dedicado a ayudarlo durante cada fase de su proyecto - desde el entender esa inspiración inicial hasta el aprovechar al máximo los equipos que seleccione cuidadosamente una vez que estén en su casa. Nosotros proveeremos todo lo que necesita para empezar, asegurando que la experiencia total este amoldada específicamente a usted.</p>

            </div>
            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/nosotros/objetivo.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">NUESTRO OBJETIVO</h2>
                        <p>Un lugar para empezar, experimentar y hacer realidad su visión. <br>Este no es un día de compras normal.</p>
                        <p>Es una experiencia inmersiva para ayudarlo a visualizar las posibilidades de su futura cocina en una ambiente libre de presión donde usted puede descubrir cómo se va a sentir, ver y hasta como va a saber su futura cocina - guiado(a) por un consultor experto cuyo enfoque es amoldar la visita a sus necesidades.</p>
                        
                    </div>

                </div>
            </div>


            <div class="col-12 text-center bottommargin-lg topmargin-lg">
                <h2>¿TE GUSTARÍA FORMAR PARTE DE NUESTRO EQUIPO DE TRABAJO?</h2>
                <p>Piensa en lo emocionante que sería trabajar para una compañía dedicada a vender los mejores enseres de lujo del mundo, mejorando la vida en la cocina para miles de clientes. Somos una empresa impulsada por la innovación y la integridad, que se esfuerza por ser el mejor y brindar el mejor ambiente de trabajo. Si quieres trabajar con un líder, has llegado al lugar correcto.</p>

                <p>Envíanos tu curriculum a: <a style="color: #01bb9c!important" href="cflores@iesa.cc">cflores@iesa.cc</a> adjuntando en el subject el puesto de tu interés.</p>

            </div>
        </div>

        @include('modulos.showrooms')

        @include('modulos.carrousel')


        
</section>
@endsection


@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

@endsection

 

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>

<script type="text/javascript">
$(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                nav: true,
                 navText: ["<i class='fa fa-chevron-left fa-2x'></i>","<i class='fa fa-chevron-right fa-2x'></i>"],
                margin: 20,
                responsive: {
                  0: {
                    items: 2,
                  },
                  600: {
                    items: 3,
                  },
                  900: {
                    items: 4,
                  }
                }
              })
            }) 
</script>
@endsection
