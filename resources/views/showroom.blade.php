@extends('layouts.app')
@section('description', 'Visite nuestro Showroom, un lugar para experimentar y dar vida a la visión de su cocina, acompañado de expertos en cocinas de lujo')
@section('title', 'Visite Nuestro Showroom y experimente su nueva cocina')
@section('content')


<section id="hero-desktop">
        <img src="{{ asset( is_null($hero) ? 'img/showroom/hero.jpg' : $hero[0]->url.$hero[0]->name)}}">
    </section>

<section id="hero-mobile">
  <img src="{{ asset( is_null($hero) ? 'img/showroom/mobile.jpg' : $hero[1]->url.$hero[1]->name)}}">

</section>


<section class="container-gral">

        <div class="margin-6">
            <div  class="row calendario light">
                @foreach($headquarter as $key => $head)
                <div class="col-lg-6 topmargin">
                    <div class="col-12 nopadding nomargin row">
                        <div class="col-12 text-center bottommargin-sm">
                            <h2 class="light">{{ $head->name }}</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-xl-8 col-12 nopadding">
                                <p>{!! $head->address !!}</p>
                            </div>

                            <a href="{{'tel:'.$head->phone}}"><p class="nomargin"><img src="{{ asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">{{$head->phone}}</p></a>
                            <a href="{{'mailto:'.$head->email}}"><p class="nomargin"><img src="{{ asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px">{{$head->email}}</p></a>


                            <div class="col-12 topmargin-sm bottommargin-sm nopadding">

                                <a class="btn btn-block btn-cyan" onclick="mover()" href="{{ URL::to($key==0 ? '/showroom-cita-monterrey' : '/showroom-cita-cdmx' ) }}"><i style="margin-right: 15px" class="fa fa-calendar fa-2x"></i>SOLICITAR CITA</a>

                                <a class="btn btn-block btn-cyan" target="_blank" href="{!! $head->map !!}"><i style="margin-right: 15px;color: #fff" class="fa fa-map-marker fa-2x"></i>DIRECCIÓN</a>

                            </div>
                        </div>
                        <div class="col-lg-6 row nomargin">
                            <div class="col-12 bottommargin-sm">
                                <img src="{{ asset('img/icono-btn/reloj.png')}}" class="img-reloj">
                            </div>
                            <div class="col-md-4 col-6" style="display: inline-grid;display: -moz-inline-stack;">
                                <p class="bottommargin-xs">Lun.</p>
                                <p class="bottommargin-xs">Mar.</p>
                                <p class="bottommargin-xs">Mie.</p>
                                <p class="bottommargin-xs">Jue.</p>
                                <p class="bottommargin-xs">Vie.</p>
                                <p class="bottommargin-xs">Sab.</p>
                                <p class="bottommargin-xs">Dom.</p>

                            </div>
                            <div class="col-md-8 offset-md-0 col-5 offset-1" style="display: inline-grid;display: -moz-inline-stack;">
                                @php
                                    $horario =explode("#",$head->schedule);
                                @endphp
                                <p class="bottommargin-xs">{{$horario[0]}}</p>
                                <p class="bottommargin-xs">{{$horario[1]}}</p>
                                <p class="bottommargin-xs">{{$horario[2]}}</p>
                                <p class="bottommargin-xs">{{$horario[3]}}</p>
                                <p class="bottommargin-xs">{{$horario[4]}}</p>
                                <p class="bottommargin-xs">{{$horario[5]}}</p>
                                <p class="bottommargin-xs">{{$horario[6]}}</p>

                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
        </div>
    </div>

         <div class="margin-10" id="carousel-showrooms">
             
            <h2 class="text-center text-uppercase font-weight-light bottommargin">empieza aquí el tour virtual a nuestro showroom</h2>
            <iframe
                width="100%"
                height="500"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/streetview?key=AIzaSyDnRJ8mwP4Ftwk0_5PoBcnXIPLMxnhPHhI&location=19.4284515,-99.1934873" allowfullscreen>
            </iframe>
       
            <p class="text-center my-4" style="color: inherit; line-height: 1.3; font-weight: 300;">Le guiamos en el tour virtual, para que conozca todos los detalles de la mano de un especialista.</p>
            <div id="check" class="offset-md-4 col-md-4">
                <a class="text-uppercase btn btn-cyan btn-block descubra-btn" href="{{ URL::to('/llamada-cdmx') }}"><img src="{{ URL::asset('img/icono-btn/agenda.png')   }}"><p>agendar llamada con especialista</p></a>
            </div>
        </div>

        <div id="lugar" class="margin-10">
            <div class="col-md-10 offset-md-1 text-center bottommargin">

                <h2> {{ $showroom->title }} </h2>
                <p>{!! $showroom->description !!}</p>

            </div>



            <div class="col-md-12 row nomargin">

                @foreach($showdetail as $showdet)

                 <div class="col-lg-6 col-xl-4 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ asset($showdet->image)}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>{{$showdet->title}}</h5>
                        <p>{{$showdet->description}}</p>
                    </div>
                </div>

                @endforeach

            </div>

            <div id="check" class="col-xl-4 col-lg-6 mx-auto">
                <a class="btn btn-cyan btn-block descubra-btn" href="{{ URL::to('/cita') }}"><img src="{{ asset('img/icono-btn/agenda.png')   }}"><p>AGENDAR CITA EN SHOWROOM</p></a>
            </div>
        </div>


        <div id="container-catalogo" class="margin-10">
            <div class="row col-padding catalogo topmargin">
                <div class="col-xl-7 col-lg-6 col-padding-sm d-flex">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ asset($detail->image)}}">
                    </div>
                </div>
                <div id="cooking" class="col-xl-5 col-lg-6 d-flex" style="padding: 25px 5vw " >
                    <div  class="justify-content-center align-self-center">
                        <h2>{{$detail->title}}</h2>
                        <p>{{$detail->description}}</p>
                        
                        <div class="col-md-12 nopadding topmargin">
                            <a href="{{ URL::to('/cookingdemo-cita') }}" class="btn btn-cyan btn-block">SOLICITAR VISITA A COOKING DEMO</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>

@endsection


@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>

<script type="text/javascript">
$(document).ready(function() {
            $('#fecha').datepicker({
                format: "d-m-Y",
                language: 'es',
                format: "dd/mm/yyyy",
                startDate: 'today',
                autoclose: true,
                todayHighlight: true,
                orientation: "bottom"
            });

           $('.owl-carousel').owlCarousel({
                loop: true,

                 navText: ["<i class='fa fa-chevron-left fa-2x'></i>","<i class='fa fa-chevron-right fa-2x'></i>"],
                margin: 10,
                responsive: {
                  0: {
                    items: 1,
                  },
                  600: {
                    items: 1,
                  },
                  1000: {
                    items: 1,
                  }
                }
              })
            })
</script>
@endsection
