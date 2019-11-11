@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')


<section>   
    <div class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="4000">

      <div class="carousel-inner">
        <div class="carousel-item active">
            @include('hero.asko')
        </div>
        <div class="carousel-item">
            @include('hero.subzero')
        </div>
        <div class="carousel-item">
            @include('hero.wolf')
        </div>
        <div class="carousel-item">
            @include('hero.cove')
        </div>
        <div class="carousel-item">
            @include('hero.dexa')
        </div>
        <div class="carousel-item">
            @include('hero.exteriores')
        </div>
      </div>
    </div>
</section>

<section style="margin: 5% 30px">
  
    <div class="owl-carousel owl-theme col-md-12">
        
            <div class="item"> 
                <a href="{{ URL::to('/sub-zero') }}"><img src="{{ URL::asset('img/subzero/logo.png')}}"></a>
            </div>

            <div class="item"> 
                <a href="{{ URL::to('/wolf') }}"><img src="{{ URL::asset('img/wolf/logo.png')}}"></a>
            </div>

            <div class="item"> 
                <a href="{{ URL::to('/cove') }}"><img src="{{ URL::asset('img/cove/logo.png')}}"></a>
            </div>

            <div class="item"> 
                <a href="{{ URL::to('/asko') }}"><img src="{{ URL::asset('img/asko/logo.png')}}"></a>
            </div>

            <div class="item"> 
                <a href="{{ URL::to('/dexa') }}"><img src="{{ URL::asset('img/dexa/logo.png')}}"></a>
            </div>

            <div class="item"> 
                <a href="{{ URL::to('/scotsman') }}"><img src="{{ URL::asset('img/scotsman/logo.png')}}"></a>
            </div>
                
        </div>
    </div>
</section>

<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">
            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 img-left">
                  <img src="{{ URL::asset('img/Wolf_SubZero_Cove-home.jpg')}}">
                </div>
                <div class="col-md-6 container-descripcion d-flex"  style="">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="row nomargin">
                            <div class="col-10 nopadding">
                                <img src="{{ URL::asset('img/Marca_Wolf_SubZero_Cove.png')   }}">
                            </div>
                        </div>
                        <div class="row nomargin topmargin-sm container-icon right">
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Cafetera.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Campana.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Estufa.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Horno.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Nevera.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Lavaplatos.png')   }}">
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
                            <div class="col-md-5 nopadding">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/sub-zero') }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-md-7">
                                <a class="btn btn-block btn-cyan solicitar-btn" href=""><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 d-flex">
                    <div class="align-self-center justify-content-center">
                        
                        <div class="row nomargin text-right col-12 nopadding">
                            <div class="col-10 offset-2 nopadding" style="padding-left: 0">
                                <img src="{{ URL::asset('img/Marca-Asko.png')}}">
                            </div>
                        </div>
                        <div class="row  topmargin-sm container-icon left">
                            <div>
                                <img  src="{{ URL::asset('img/icono/Cafetera.png')   }}">
                            </div>
                            <div>
                                <img  src="{{ URL::asset('img/icono/Campana.png')   }}">
                            </div>
                            <div>
                                <img  src="{{ URL::asset('img/icono/Horno.png')   }}">
                            </div>
                            <div>
                                <img  src="{{ URL::asset('img/icono/Estufa.png')   }}">
                            </div>
                            <div>
                                <img  src="{{ URL::asset('img/icono/Nevera.png')   }}">
                            </div>
                            <div>
                                <img  src="{{ URL::asset('img/icono/Lavaplatos.png')   }}">
                            </div>
                        </div>

                        <div class="topmargin-sm col-12 nopadding text-right">
                            <h2>
                                ENSERES DE LUJO INSPIRADOS <br> EN ESCANDINAVIA
                            </h2>
                            <p>
                                Electrodomésticos escandinavos ASKO; productos durables y de máxima calidad con soluciones innovadoras respetuosas con el medio ambiente y el uso económico de los recursos como agua y energía.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-5 nopadding">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/asko') }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-md-7 nopaddingright">
                                <a class="btn btn-block btn-cyan solicitar-btn" href=""><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding: 0 0 0 10px">
                    <img src="{{ URL::asset('img/Asko-home.jpg')}}">
                </div>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 img-left">
                  <img src="{{ URL::asset('img/dexa.jpg')}}">
                </div>
                <div class="col-md-6 container-descripcion d-flex"  style="">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="row nomargin">
                            <div class="col-10 nopadding">
                                <img src="{{ URL::asset('img/marca_deza.png')   }}">
                            </div>
                        </div>
                        <div class="row nomargin topmargin-sm container-icon right">
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Estufa.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Horno.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Nevera.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Lavaplatos.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Vajillas.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Fregadero.png')   }}">
                            </div>
                        </div>

                        <div class="topmargin-sm">
                            <h2>
                                Diseños y elementos que expresan una Personalidad diferente
                            </h2>
                            <p>
                                Diseños espectaculares y funcionalidad sin igual, son los atributos de los productos de DEXA.  Nuestra línea está pensada para integrarse al diseño de tu cocina ideal, pues con su variedad en estufas, parrillas, hornos, tarjas, campanas y llaves, le darás esa personalidad que tu cocina necesita.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-5 nopadding">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/dexa') }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-md-7">
                                <a class="btn btn-block btn-cyan solicitar-btn" href=""><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 d-flex">
                    <div class="align-self-center justify-content-center">
                        
                        <div class="row nomargin text-right col-12 nopadding">
                            <div class="col-10 offset-2 nopadding" style="padding-left: 0">
                                <img src="{{ URL::asset('img/Marca_Scotsman.png')}}">
                            </div>
                        </div>
                        <div class="row  topmargin-sm container-icon left">
                            <div>
                                <img  src="{{ URL::asset('img/icono/Hielo.png')   }}">
                            </div>
                        </div>

                        <div class="topmargin-sm col-12 nopadding text-right">
                            <h2>
                                EL HIELO IDEAL <br>EL LUJO DEFINITIVO
                            </h2>
                            <p>
                                Cuando se trata de lujo, los detalles marcan la diferencia. Tu bebida favorita no es la excepción. La adición de un detalle, el hielo ideal, hace que una bebida se mantenga más fría y el sabor dure más tiempo. No importa qué bebida prefiera, una cosa puede mejorarla: el hielo Scotsman, el ingrediente ideal.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-5 nopadding">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/scotsman') }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-md-7">
                                <a class="btn btn-block btn-cyan solicitar-btn" href=""><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding: 0 10px 0 0">
                    <img src="{{ URL::asset('img/Scotsman-home.jpg')}}">
                </div>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 img-left">
                  <img src="{{ URL::asset('img/Cocina-exterior-home.jpg')}}">
                </div>
                <div class="col-md-6 container-descripcion d-flex"  style="">
                    <div class="justify-content-center align-self-center">
                        <div class="row nomargin">
                            <div class="col-10 nopadding">
                                <img src="{{ URL::asset('img/Marca_Wolf_SubZero.png')   }}">
                            </div>
                        </div>
                        <div class="row nomargin topmargin-sm container-icon right">
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Parrilla.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ URL::asset('img/icono/Nevera.png')   }}">
                            </div>
                        </div>

                        <div class="topmargin-sm">
                            <h2>
                                COCINA DE EXTERIOR
                            </h2>
                            <p>
                                Diseños espectaculares y funcionalidad sin igual, son los atributos de los productos de DEXA.  Nuestra línea está pensada para integrarse al diseño de tu cocina ideal, pues con su variedad en estufas, parrillas, hornos, tarjas, campanas y llaves, le darás esa personalidad que tu cocina necesita.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-5 nopadding">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/cocina-exterior') }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-md-7">
                                <a class="btn btn-block btn-cyan solicitar-btn" href=""><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        
        </div>

        <div id="testimoniales"  class="bg-gray">
            <div class="col-12 text-center  ">
                <h2>TESTIMONIOS</h2>
                
            </div>
            
            <div id="carouselExampleControls" class="carousel slide topmargin" data-ride="carousel" style="margin: 10px 50px">
              <div class="carousel-inner style">
                <div class="carousel-item active">
                  <div class="col-8 offset-2 row">
                    <div class="col-3">
                        sdf
                    </div>
                    <div class="col-9">
                        sdfsdfsdfs
                    </div>
                      
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-8 offset-2 row">
                    <div class="col-3">
                        sdf
                    </div>
                    <div class="col-9">
                        sdfsdfsdfs
                    </div>
                      
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-8 offset-2 row">
                    <div class="col-3">
                        sdf
                    </div>
                    <div class="col-9">
                        sdfsdfsdfs
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
                    items: 1,
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
