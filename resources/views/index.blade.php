@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')


<section id="hero-desktop">
    <div class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="4000">

    <div class="carousel-inner">
        @foreach($images as $key => $img)
            @if($img->type=='HERO')
                <div class="carousel-item {{$key == 0 ? 'active' : ''}}">

                    <div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ asset($img->url.$img->name)}}');">
                        <div class="col-12 nopadding h-100 d-flex aling">
                            <div class="justify-content-center align-self-center col-lg-6 gradient-hero">
                                <a href="{{ URL::to('/sub-zero') }}"><img style="width:34%;margin-right: 10px;" src="{{ asset('img/cintillos/SubZero.png')}}"></a>
                                <a href="{{ URL::to('/wolf') }}"><img style="width:26%;margin-left: 15px" src="{{ asset('img/cintillos/Wolf.png')}}"></a>
                                <a href="{{ URL::to('/cove') }}"><img style="width:28%;margin-left: 15px" src="{{ asset('img/cintillos/Cove.png')}}"></a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            @endif
        @endforeach
        
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
        </div> -->
      </div>
    </div>
</section>

<section id="hero-mobile">   
    <div class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="4000">

      <div class="carousel-inner">
         @foreach($images as $key => $img)
            @if($img->type=='MOBIL')
                <div class="carousel-item {{$key == 0 ? 'active' : ''}}">

                   <div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
                    <div>
                        <img src="{{ asset($img->url.$img->name)}}">
                    </div>
                    <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
                        <div class="justify-content-center align-self-center row nomargin">
                            <div class="col-lg-4 col-12">
                                <a href="{{ URL::to('/sub-zero') }}"><img  src="{{ asset('img/subzero/logo.png')}}"></a>
                            </div>
                            <div class="col-lg-4 col-12">
                                <a href="{{ URL::to('/wolf') }}"><img  src="{{ asset('img/wolf/logo.png')}}"></a>
                            </div>
                            <div class="col-lg-4 col-12">
                                <a href="{{ URL::to('/cove') }}"><img  src="{{ asset('img/cove/logo.png')}}"></a>
                            </div>
                        </div>
                    </div>
                </div>
                   
                </div>
            @endif
        @endforeach
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

        @foreach($logos as $logo)

             <div class="item">
                <a href="{{ URL::to($logo->slug) }}"><img src="{{ asset($logo->logo)}}"></a>
            </div>

        @endforeach

    </div>

</section>

<section class="container-gral">

        <div id="container-catalogo" class="margin-10">
            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 d-flex col-padding-sm">
                    <div class="justify-content-center align-self-center">
                        <img class="img-fluid" src="{{ isset($home[0]->image) ? asset($home[0]->image) : 'img/Wolf_SubZero_Cove-home.jpg'  }}">
       
                    </div>
                </div>
                <div class="col-xl-5  col-lg-6 container-descripcion d-flex"  style="">
                    <div class="justify-content-center align-self-center">

                        <div class="row nomargin">
                            <div class="col-12 col-lg-11 row" style="display: block;">
                                   
                                   <a href="{{ URL::to('/sub-zero') }}"><img style="width: 35%" src="{{ asset('img/cintillos/SubZero.png')}}"></a>
                               
                                    <a href="{{ URL::to('/wolf') }}"><img style="width: 26%;margin-left: 12px" src="{{ asset('img/cintillos/Wolf.png')}}"></a>
                         
                          
                                    <a href="{{ URL::to('/cove') }}"><img style="width: 28%;margin-left: 12px" src="{{ asset('img/cintillos/Cove.png')}}"></a>
                            </div>
                        </div>
                        <div class="row nomargin topmargin-sm container-icon right">
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Cafetera.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Campana.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Estufa.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Horno.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Nevera.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Lavaplatos.png')   }}">
                            </div>
                        </div>

                        <div class="topmargin-sm">
                            <h2>
                                {{ isset($home[0]->title) ? $home[0]->title : 'DESCUBRA NUESTROS LEGENDARIOS PRODUCTOS'}}
                            </h2>
                            <p>
                                {{ isset($home[0]->text) ? $home[0]->text : '...' }}
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-5 col-8 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/sub-zero') }}"><img src="{{ asset('img/icono-btn/descubra.png')   }}"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-lg-7 col-10 bottommargin-sm noPaddingLeftMobile">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Sub-Zero_Wolf_Cove_Home_Download.htm" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
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
                                <a href="{{ URL::to('/sub-zero') }}"><img style="width: 35%" src="{{ asset('img/cintillos/SubZero.png')}}"></a>

                                <a href="{{ URL::to('/wolf') }}"><img style="width: 26%;margin-left: 15px" src="{{ asset('img/cintillos/Wolf.png')}}"></a>
                         
                            </div>
                           
                        </div>
                        <div class="row  topmargin-sm container-icon left">
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Parrilla.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Nevera.png')   }}">
                            </div>
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                           <h2>
                                {{ isset($home[1]->title) ? $home[1]->title : 'DESCUBRA NUESTROS LEGENDARIOS PRODUCTOS'}}
                            </h2>
                            <p>
                                {!! isset($home[1]->text) ? $home[1]->text : '...' !!}
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-5 col-8 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/cocina-exterior') }}"><img src="{{ asset('img/icono-btn/descubra.png')   }}"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-lg-7 col-10 bottommargin-sm noPaddingLeftMobile">
                                 <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Cocina_Exterior_Download.htm" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex col-padding-sm order-lg-2 order-1">
                    <div class="justify-content-center align-self-center">
                         <img class="img-fluid" src="{{ isset($home[1]->image) ? asset($home[1]->image) : 'img/Cocina-exterior-home.jpg'  }}">
                    </div>
                </div>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 d-flex col-padding-sm">
                    <div class="justify-content-center align-self-center">
                        <img class="img-fluid" src="{{ isset($home[2]->image->image) ? asset($home[2]->image) : 'img/Asko-home.jpg'  }}">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-0 col-lg-6 d-flex">
                    <div class="align-self-center justify-content-center">

                        <div class="row nomargin text-lg-right text-left col-12 nopadding">
                            <div class="col-lg-4 col-xl-3 col-4 nopadding topmargin-sm" style="padding-left: 0">
                               <a href="{{ URL::to('/asko') }}"> <img class="" src="{{ asset('img/cintillos/Asko.png')}}" style=""></a>
                            </div>
                        </div>
                        <div class="row nomargin topmargin-sm container-icon right">
                            <div>
                                <img  src="{{ asset('img/icono/Cafetera.png')   }}">
                            </div>
                            <div>
                                <img  src="{{ asset('img/icono/Campana.png')   }}">
                            </div>
                            <div>
                                <img  src="{{ asset('img/icono/Horno.png')   }}">
                            </div>
                            <div>
                                <img  src="{{ asset('img/icono/Estufa.png')   }}">
                            </div>
                            <div>
                                <img  src="{{ asset('img/icono/Nevera.png')   }}">
                            </div>
                            <div>
                                <img  src="{{ asset('img/icono/Lavaplatos.png')   }}">
                            </div>
                        </div>

                        <div class="topmargin-sm col-12 nopadding text-left">
                            
                            <h2>
                                {{ isset($home[2]->title) ? $home[2]->title : 'ENSERES DE LUJO INSPIRADOS EN ESCANDINAVIA'}}
                            </h2>
                            <p>
                                {!! isset($home[2]->text) ? $home[2]->text : '...' !!}
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-5 col-8 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/asko') }}"><img src="{{ asset('img/icono-btn/descubra.png')   }}"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-md-7 col-10 noPaddingLeftMobile nopaddingright bottommargin-sm">
                               <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Asko_Download.htm" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-xl-5 offset-xl-1 col-lg-6 container-descripcion d-flex  order-lg-2 order-2"  style="">
                    <div class="justify-content-center align-self-center">
                        <div class="row nomargin">
                            <div class="col-xl-1 offset-xl-11 col-lg-2 offset-lg-10 col-2  nopadding">
                                <a href="{{ URL::to('/dexa') }}"><img src="{{ asset('img/cintillos/Dexa.png')   }}"></a>
                            </div>
                        </div>
                        <div class="row  topmargin-sm container-icon left">
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Estufa.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Horno.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Nevera.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Lavaplatos.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Vajillas.png')   }}">
                            </div>
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/Fregadero.png')   }}">
                            </div>
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                             <h2>
                                {{ isset($home[3]->title) ? $home[3]->title : 'Diseños y elementos que expresan una Personalidad diferente'}}
                            </h2>
                            <p>
                                {!! isset($home[3]->text) ? $home[3]->text : '...' !!}
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-5 col-8 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/dexa') }}"><img src="{{ asset('img/icono-btn/descubra.png')   }}"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-md-7 col-10 noPaddingLeftMobile nopaddingright bottommargin-sm">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Dexa_Download.htm" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex col-padding-sm  order-lg-2 order-1">
                    <div class="justify-content-center align-self-center">
                          <img class="img-fluid" src="{{ isset($home[3]->image) ? asset($home[3]->image) : 'img/dexa.jpg'  }}">
                    </div>
                </div>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 d-flex col-padding-sm">
                    <div class="justify-content-center align-self-center">
                        <img class="img-fluid" src="{{ isset($home[4]->image) ? asset($home[4]->image) : 'img/Scotsman-home.jpg'  }}">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 d-flex">
                    <div class="align-self-center justify-content-center">
                        <div class="row nomargin text-lg-right text-left col-12 nopadding">
                            <div class="col-4 nopadding" style="padding-left: 0">
                                <a href="{{ URL::to('/scotsman') }}"><img class="" src="{{ asset('img/cintillos/Scotsman.png')}}"></a>
                            </div>
                        </div>
                        <div class="row nomargin topmargin-sm container-icon right">
                            <div>
                                <img  src="{{ asset('img/icono/Hielo.png')   }}">
                            </div>
                        </div>

                        <div class="topmargin-sm col-12 nopadding text-left">
                            <h2>
                                {{ isset($home[4]->title) ? $home[4]->title : 'EL HIELO IDEAL EL LUJO DEFINITIVO'}}
                            </h2>
                            <p>
                                {!! isset($home[4]->text) ? $home[4]->text : '...' !!}
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-5 col-8 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/scotsman') }}"><img src="{{ asset('img/icono-btn/descubra.png')   }}"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-lg-7 col-10 bottommargin-sm noPaddingLeftMobile">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Scotsman_Download.htm" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>



            <!-- JORGE ACA -->
            <div class="row col-padding catalogo topmargin">
                <div class="col-xl-5 offset-xl-1 col-lg-6 container-descripcion d-flex  order-lg-2 order-2"  style="">
                    <div class="justify-content-center align-self-center">
                        <div class="row nomargin">
                            <div class="col-xl-3 offset-xl-9 col-lg-3 offset-lg-9 col-4  nopadding">
                                <a href="{{ URL::to('/dexa') }}"><img src="{{ asset('img/plum-wine/logo.png')   }}"></a>
                            </div>
                        </div>
                        <div class="row  topmargin-sm container-icon left">
                            <div>
                                <img class="icon-catalogo-right" src="{{ asset('img/icono/vino.png')   }}">
                            </div>
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                             <h2>
                                PERFECTO PARA LOS AMANTES DEL VINO
                            </h2>
                            <p>
                                Plum, un artefacto diseñado para uso diario que preserva, identifica, enfría y sierve el vino que más le guste. Mediante la aguja de doble núcleo, Plum perfora automáticamente la lámina y el corcho de la botella extrayendo simultaneamente el vino e inyectando gas argón para evitar la oxidación.
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-5 col-8 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/plum-wine') }}"><img src="{{ asset('img/icono-btn/descubra.png')   }}"><p>DESCUBRA MÁS</p></a>
                            </div>

                            <div class="col-md-7 col-10 noPaddingLeftMobile nopaddingright bottommargin-sm">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Plum_Wine_Download.htm" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex col-padding-sm  order-lg-2 order-1">
                    <div class="justify-content-center align-self-center">
                          <img class="img-fluid" src="{{ URL::asset('img/home/6.jpg')}}">
                    </div>
                </div>
            </div>





            <!-- HASTA ACA -->
            




        </div>

        <div id="testimoniales"  class="bg-gray">
            <div class="col-12 text-center bottommargin-sm  ">
                <h2>TESTIMONIOS</h2>

            </div>

            <div id="carouselExampleControls" class="carousel slide margin-carrousel" data-ride="carousel">
              <div class="carousel-inner style">

                @foreach($testimonies as $key => $testim)


                <div class="carousel-item  {{ $key==0 ? 'active' : '' }}">
                  <div class="col-md-10 offset-md-1 col-10 offset-1 row">
                    <div class="col-lg-2  offset-md-0 col-md-3 offset-md-0 col-6 offset-3  bottommargin-sm">
                        <img class="img-fluid" src="{{ isset($testim->image) ? asset($testim->image) : 'img/persona1.png'  }}">
                    </div>
                    <div class="col-md-9 col-12">
                        <p class="light">“{!! $testim->text !!}”
                        </p>
                        <p class="nopadding"><b>{{$testim->name}} </b></p>
                    </div>

                  </div>
                </div>

                @endforeach
               
                
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
