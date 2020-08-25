@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')


<section id="hero-desktop">
    <div class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="4000">

    <div class="carousel-inner">
        <div class="carousel-item active">
            @include('hero.triband')
        </div>
        <div class="carousel-item">
            @include('hero.subzero')
        </div>
        <div class="carousel-item">
             @include('hero.wolf')
        </div>
        <div class="carousel-item">
            @include('hero.exteriores')
        </div>
        <div class="carousel-item">
            @include('hero.cove')
        </div>
        <div class="carousel-item">
            @include('hero.asko')
        </div>
        <div class="carousel-item">
            @include('hero.dexa')
        </div>
        <div class="carousel-item">
            @include('hero.scotsman')
        </div>
      </div>
    </div>
</section>

<section id="hero-mobile">   
    <div class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="4000">

      <div class="carousel-inner">
        <div class="carousel-item active">
            @include('hero-mobile.triband')
        </div>
        <div class="carousel-item">
            @include('hero-mobile.subzero')
        </div>
        <div class="carousel-item">
            @include('hero-mobile.wolf')
        </div>
        <div class="carousel-item">
            @include('hero-mobile.exteriores')
        </div>
        <div class="carousel-item">
            @include('hero-mobile.cove')
        </div>
        <div class="carousel-item">
            @include('hero-mobile.asko')
        </div>
        <div class="carousel-item">
            @include('hero-mobile.dexa')
        </div>
        <div class="carousel-item">
            @include('hero-mobile.scotsman')
        </div>
      </div>
    </div>
</section>

<section style="margin: 5% 30px">

    <div class="owl-carousel owl-theme col-md-12">

            <div class="item">
                <a href="{{ URL::to('/sub-zero') }}"><img src="{{ URL::asset('img/subzero/logo.png')}}" alt="logo subzero"></a>
            </div>

            <div class="item">
                <a href="{{ URL::to('/wolf') }}"><img src="{{ URL::asset('img/wolf/logo.png')}}" alt="wolf logo"></a>
            </div>

            <div class="item">
                <a href="{{ URL::to('/cove') }}"><img src="{{ URL::asset('img/cove/logo.png')}}" alt="logo cove"></a>
            </div>

            <div class="item">
                <a href="{{ URL::to('/asko') }}"><img src="{{ URL::asset('img/asko/logo.png')}}" alt="asko logo"></a>
            </div>

            <div class="item">
                <a href="{{ URL::to('/dexa') }}"><img src="{{ URL::asset('img/dexa/logo.png')}}" alt="dexa logo"></a>
            </div>

            <div class="item">
                <a href="{{ URL::to('/scotsman') }}"><img src="{{ URL::asset('img/scotsman/logo.png')}}" alt="scotsman logo"></a>
            </div>

        </div>
    </div>
</section>

<section class="container-gral">

        <div id="container-catalogo" class="margin-10">
            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 d-flex col-padding-sm">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ URL::asset('img/Wolf_SubZero_Cove-home.jpg')}}" alt="wolf subzero cove home">
                    </div>
                </div>
                <div class="col-xl-5  col-lg-6 container-descripcion d-flex"  style="">
                    <div class="justify-content-center align-self-center">

                        <div class="row nomargin">
                            <div class="col-12 col-lg-11 row" style="display: block;">
                                   
                                   <a href="{{ URL::to('/sub-zero') }}"><img style="width: 35%" src="{{ URL::asset('img/cintillos/SubZero.png')}}" alt="subzero cintillos"></a>
                               
                                    <a href="{{ URL::to('/wolf') }}"><img style="width: 26%;margin-left: 12px" src="{{ URL::asset('img/cintillos/Wolf.png')}}" alt="wolf cintillos"></a>
                         
                          
                                    <a href="{{ URL::to('/cove') }}"><img style="width: 28%;margin-left: 12px" src="{{ URL::asset('img/cintillos/Cove.png')}}" alt="cintillos cove"></a>
                            </div>
                        </div>
                        <div class="row nomargin topmargin-sm container-icon right">
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Cafetera.png')   }}" alt="cafetera icono">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Campana.png')   }}" alt="campana icono">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Estufa.png')   }}" alt="estufa icono">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Horno.png')   }}" alt="horno icon">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Nevera.png')   }}" alt="nevera icon">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Lavaplatos.png')   }}" alt="lavaplatos icon">
                            </div>
                        </div>

                        <div class="topmargin-sm">
                            <h2>
                                DESCUBRA NUESTROS LEGENDARIOS PRODUCTOS
                            </h2>
                            <p>
                                Desde 1945, Sub-Zero ha sido el pionero en la ciencia de la refrigeración doméstica al mismo tiempo que transformaba el diseño de equipos integrados y empotrados. Wolf tiene una tradición de innovación aún mayor, con ingeniería que proviene de más de 80 años de experiencia de equipos de cocción comercial. Junto con la tecnología de lavavajillas de Cove, Sub-Zero y Wolf están dedicados a ayudarlo a crear la cocina funcional y flexible de sus sueños.
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-5 col-8 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/sub-zero') }}"><img src="{{ URL::asset('img/icono-btn/descubra.png')   }}" alt="descubra icono"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-lg-7 col-10 bottommargin-sm noPaddingLeftMobile">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Sub-Zero_Wolf_Cove_Home_Download.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="catalogo icono"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-xl-5 offset-xl-1 col-lg-6 container-descripcion d-flex order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">
                        <div class="col-12 col-lg-10 row nopadding" style="display: block;margin-right: 0;
                        margin-left: auto;">
                            <div class="text-lg-right text-left">
                                <a href="{{ URL::to('/sub-zero') }}"><img style="width: 35%" src="{{ URL::asset('img/cintillos/SubZero.png')}}" alt="subzero cintillos"></a>

                                <a href="{{ URL::to('/wolf') }}"><img style="width: 26%;margin-left: 15px" src="{{ URL::asset('img/cintillos/Wolf.png')}}" alt="wolf cintillos"></a>
                         
                            </div>
                           
                        </div>
                        <div class="row  topmargin-sm container-icon left">
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Parrilla.png')   }}" alt="parrilla icono">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Nevera.png')   }}" alt="nevera icono">
                            </div>
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <h2>
                                COCINA EXTERIOR
                            </h2>
                            <p>
                                Todo sabe mejor al aire libre. Sin embargo, el control del calor en la mayoría de los asadores puede convertir el cocinar en exteriores en una tarea imprecisa. Los asadores Wolf cambiar todo eso. Le dan el mismo tipo de control de precisión y facilidad de uso que sus contrapartes de interiores, las estufas, hornos y parrillas Wolf. Imagínese las jugosas posibilidades.
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-5 col-8 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/cocina-exterior') }}"><img src="{{ URL::asset('img/icono-btn/descubra.png')   }}" alt="descubra icono"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-lg-7 col-10 bottommargin-sm noPaddingLeftMobile">
                                 <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Cocina_Exterior_Download.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="catalogo icon"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex col-padding-sm order-lg-2 order-1">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ URL::asset('img/Cocina-exterior-home.jpg')}}" alt="cocina exterior home">
                    </div>
                </div>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 d-flex col-padding-sm">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ URL::asset('img/Asko-home.jpg')}}" alt="asko home">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-0 col-lg-6 d-flex">
                    <div class="align-self-center justify-content-center">

                        <div class="row nomargin text-lg-right text-left col-12 nopadding">
                            <div class="col-lg-4 col-xl-3 col-4 nopadding topmargin-sm" style="padding-left: 0">
                               <a href="{{ URL::to('/asko') }}"> <img class="" src="{{ URL::asset('img/cintillos/Asko.png')}}" style="" alt="asko cintillos"></a>
                            </div>
                        </div>
                        <div class="row nomargin topmargin-sm container-icon right">
                            <div>
                                <img  src="{{ URL::asset('img/icono/Cafetera.png')   }}" alt="cafetera icono">
                            </div>
                            <div>
                                <img  src="{{ URL::asset('img/icono/Campana.png')   }}" alt="campana icono">
                            </div>
                            <div>
                                <img  src="{{ URL::asset('img/icono/Horno.png')   }}" alt="horno icono">
                            </div>
                            <div>
                                <img  src="{{ URL::asset('img/icono/Estufa.png')   }}" alt="icono estufa">
                            </div>
                            <div>
                                <img  src="{{ URL::asset('img/icono/Nevera.png')   }}" alt="icono nevera">
                            </div>
                            <div>
                                <img  src="{{ URL::asset('img/icono/Lavaplatos.png')   }}" alt="icono lavaplatos">
                            </div>
                        </div>

                        <div class="topmargin-sm col-12 nopadding text-left">
                            <h2>
                                ENSERES DE LUJO INSPIRADOS <br> EN ESCANDINAVIA
                            </h2>
                            <p>
                                Electrodomésticos escandinavos ASKO; productos durables y de máxima calidad con soluciones innovadoras respetuosas con el medio ambiente y el uso económico de los recursos como agua y energía.
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-5 col-8 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/asko') }}"><img src="{{ URL::asset('img/icono-btn/descubra.png')   }}" alt="descubra icono"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-md-7 col-10 noPaddingLeftMobile nopaddingright bottommargin-sm">
                               <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Asko_Download.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="icono catalogo"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-xl-5 offset-xl-1 col-lg-6 container-descripcion d-flex  order-lg-2 order-1"  style="">
                    <div class="justify-content-center align-self-center">
                        <div class="row nomargin">
                            <div class="col-xl-1 offset-xl-11 col-lg-2 offset-lg-10 col-2  nopadding">
                                <a href="{{ URL::to('/dexa') }}"><img src="{{ URL::asset('img/cintillos/Dexa.png')   }}" alt="cintillos dexa"></a>
                            </div>
                        </div>
                        <div class="row  topmargin-sm container-icon left">
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Estufa.png')   }}" alt="icono estufa">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Horno.png')   }}" alt="icono horno">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Nevera.png')   }}" alt="icon nevera">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Lavaplatos.png')   }}" alt="icon lavaplatos">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Vajillas.png')   }}" alt="icono vajillas">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Fregadero.png')   }}" alt="icono fregadero">
                            </div>
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <h2>
                                Diseños y elementos que expresan una Personalidad diferente
                            </h2>
                            <p>
                                Diseños espectaculares y funcionalidad sin igual, son los atributos de los productos de DEXA.  Nuestra línea está pensada para integrarse al diseño de tu cocina ideal, pues con su variedad en estufas, parrillas, hornos, tarjas, campanas y llaves, le darás esa personalidad que tu cocina necesita.
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-5 col-8 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/dexa') }}"><img src="{{ URL::asset('img/icono-btn/descubra.png')   }}" alt="icono descubra"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-md-7 col-10 noPaddingLeftMobile nopaddingright bottommargin-sm">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Dexa_Download.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="icon catalogo"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex col-padding-sm  order-lg-2 order-1">
                    <div class="justify-content-center align-self-center">
                         <img src="{{ URL::asset('img/dexa.jpg')}}" alt="dexa">
                    </div>
                </div>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 d-flex col-padding-sm">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ URL::asset('img/Scotsman-home.jpg')}}" alt="scotsman home">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 d-flex">
                    <div class="align-self-center justify-content-center">
                        <div class="row nomargin text-lg-right text-left col-12 nopadding">
                            <div class="col-4 nopadding" style="padding-left: 0">
                                <a href="{{ URL::to('/scotsman') }}"><img class="" src="{{ URL::asset('img/cintillos/Scotsman.png')}}" alt="cintillos scotsman"></a>
                            </div>
                        </div>
                        <div class="row nomargin topmargin-sm container-icon right">
                            <div>
                                <img  src="{{ URL::asset('img/icono/Hielo.png')   }}" alt="icono hielo">
                            </div>
                        </div>

                        <div class="topmargin-sm col-12 nopadding text-left">
                            <h2>
                                EL HIELO IDEAL <br>EL LUJO DEFINITIVO
                            </h2>
                            <p>
                                Cuando se trata de lujo, los detalles marcan la diferencia. Tu bebida favorita no es la excepción. La adición de un detalle, el hielo ideal, hace que una bebida se mantenga más fría y el sabor dure más tiempo. No importa qué bebida prefiera, una cosa puede mejorarla: el hielo Scotsman, el ingrediente ideal.
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-5 col-8 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/scotsman') }}"><img src="{{ URL::asset('img/icono-btn/descubra.png')   }}" alt="icon descubra"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-lg-7 col-10 bottommargin-sm noPaddingLeftMobile">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Scotsman_Download.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="icono catalogo"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>


            




        </div>

        <div id="testimoniales"  class="bg-gray">
            <div class="col-12 text-center bottommargin-sm  ">
                <h2>TESTIMONIOS</h2>

            </div>

            <div id="carouselExampleControls" class="carousel slide margin-carrousel" data-ride="carousel">
              <div class="carousel-inner style">
                <div class="carousel-item active">
                  <div class="col-md-10 offset-md-1 col-10 offset-1 row">
                    <div class="col-lg-2  offset-md-0 col-md-3 offset-md-0 col-6 offset-3  bottommargin-sm">
                        <img src="{{ URL::asset('img/persona1.png')   }}" alt="persona1">
                    </div>
                    <div class="col-md-9 col-12">
                        <p class="light">“Visitar su showroom es una experiencia increíble, todos te atienden con mucha calidez desde que se abren las puertas del elevador, un excelente servicio al cliente, resuelven tus dudas y siempre están dispuestos a ayudar.
                            <br>
                            100% recomendado, las marcas se dan a relucir tienen los mejores estándares de calidad”
                        </p>
                        <p class="nopadding"><b>Ilse Ocampo </b></p>
                    </div>

                  </div>
                </div>
                <div class="carousel-item ">
                  <div class="col-md-10 offset-md-1 col-10 offset-1 row">
                    <div class="col-lg-2  offset-md-0 col-md-3 offset-md-0 col-6 offset-3  bottommargin-sm">
                        <img src="{{ URL::asset('img/persona2.png')   }}" alt="persona2">
                    </div>
                    <div class="col-xl-10 col-md-9 col-12">
                        <p class="light">“Llevo más de 10 años  en contacto con IESA y sus trabajadores, me  encuentro totalmente satisfecho con el trato que he recibido por parte de ellos, facilitan siempre la solución a cualquier problema que se presente y siempre lo hacen con una sonrisa y profesionalismo.   Los recomiendo ampliamente, es una empresa en la que se puede confiar.  Esto hablando de  la empresa, si tocamos el de tema de las marcas que representan, no tengo más que decir  que son las mejores a nivel mundial.”</p>
                        <p class="nopadding"><b>Fernando Pacheco - Boa Lab</b></p>
                    </div>

                  </div>
                </div>
                
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <i class="fa fa-chevron-left fa-2x"></i>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="fa fa-chevron-right fa-2x"></i>
              </a>
            </div>


        </div>



        @include('modulos.showrooms')


</section>
@endsection


@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

<style type="text/css">


.carousel-fade .carousel-item {
 opacity: 0;
 transition-duration: .6s;
 transition-property: opacity;
}

.carousel-fade  .carousel-item.active,
.carousel-fade  .carousel-item-next.carousel-item-left,
.carousel-fade  .carousel-item-prev.carousel-item-right {
  opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade  .active.carousel-item-right {
 opacity: 0;
}

.carousel-fade  .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade  .active.carousel-item-prev {
 transform: translateX(0);
 transform: translate3d(0, 0, 0);
}



</style>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
<script type="text/javascript">
$(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                dots:false,
                autoplay:true,

                navText: ["<i class='fa fa-chevron-left fa-2x'></i>","<i class='fa fa-chevron-right fa-2x'></i>"],
                margin: 25,
                responsive: {
                  0: {
                    items: 2,
                  },
                  600: {
                    items: 2,
                  },
                  900: {
                    items: 4,
                  },
                  1200: {
                    items: 6,
                  },
                  1500: {
                    items: 6,
                  }
                }
              })
            })
</script>
@endsection
