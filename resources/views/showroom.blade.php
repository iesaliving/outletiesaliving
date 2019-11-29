@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Showroom')
@section('content')







<section id="hero-desktop">
  <img src="{{ URL::asset('img/showrooms/hero.jpg')}}">
</section>
<section id="hero-mobile">
  <img src="{{ URL::asset('img/hero-showroom-mobile.jpg')}}">
</section>


<section class="container-gral">

        <div class="margin-6">
            <div  class="row calendario light">
                <div class="col-lg-6 topmargin">
                    <div class="col-12 nopadding nomargin row">
                        <div class="col-12 text-center bottommargin-sm">
                            <h2 class="light">MONTERREY</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-xl-8 col-12 nopadding">
                                <p>Carr. Monterrey – Saltillo 3061 Fracc. Bosques del Poniente Santa Catarina, NL 66350</p>
                            </div>

                            <a href="tel:5218183894372"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (1) 81 8389 4372</p></a>
                            <a href="mailto:recepción@iesa.container-catalogo"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px">recepción@iesa.cc</p></a>


                            <div class="col-12 topmargin bottommargin nopadding">

                                <a class="btn btn-block btn-cyan" onclick="mover()" href="javascript:void(0)"><i style="margin-right: 15px" class="fa fa-calendar fa-2x"></i>SOLICITAR CITA</a>

                                <a class="btn btn-block btn-cyan" target="_blank" href="https://www.google.co.ve/maps/place/Importaciones+Electrodom%C3%A9sticas,+S.A.+De+C.V./@25.682615,-100.4560607,17z/data=!3m1!4b1!4m5!3m4!1s0x86629816d52a561b:0x708d48dbe192e667!8m2!3d25.682615!4d-100.453872"><i style="margin-right: 15px;color: #fff" class="fa fa-map-marker fa-2x"></i>DIRECCIÓN</a>

                            </div>
                        </div>
                        <div class="col-lg-6 row nomargin" style="display: inline-table;">
                            <div class="col-12 bottommargin-sm">
                                <img src="{{ URL::asset('img/icono-btn/reloj.png')}}" style="width: 20px">
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
                                <p class="bottommargin-xs">09:00-19:00</p>
                                <p class="bottommargin-xs">09:00-19:00</p>
                                <p class="bottommargin-xs">09:00-19:00</p>
                                <p class="bottommargin-xs">09:00-19:00</p>
                                <p class="bottommargin-xs">09:00-19:00</p>
                                <p class="bottommargin-xs">Cerrado</p>
                                <p class="bottommargin-xs">Cerrado</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 topmargin">
                    <div class="col-12 nopadding nomargin row">
                        <div class="col-12 text-center bottommargin-sm">
                            <h2 class="light">CIUDAD DE MÉXICO</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-xl-8 col-12 nopadding">
                                <p>
                                    Galileo 8 Segundo piso Col. Polanco Chapultepec México, DF 11560
                                </p>
                            </div>

                            <a href="tel:5215552809648"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (1) 55 5280 9648</p></a>
                            <a href="mailto:recepción@iesa.container-catalogo"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px">showroom@iesa.cc</p></a>


                            <div class="col-12 topmargin bottommargin nopadding">

                                <a class="btn btn-block btn-cyan" onclick="mover()" href="javascript:void(0)"><i style="margin-right: 15px" class="fa fa-calendar fa-2x"></i>SOLICITAR CITA</a>

                                <a class="btn btn-block btn-cyan" target="_blank" href="https://www.google.co.ve/maps/place/IESA/@19.4284845,-99.1956162,17z/data=!3m1!4b1!4m5!3m4!1s0x85d201ff11a77f6d:0x18848b36c0d7d2d9!8m2!3d19.4284845!4d-99.1934275"><i style="margin-right: 15px;color: #fff" class="fa fa-map-marker fa-2x"></i>DIRECCIÓN</a>

                            </div>
                        </div>
                        <div class="col-lg-6 row nomargin" style="display: inline-table;">
                            <div class="col-12 bottommargin-sm">
                                <img src="{{ URL::asset('img/icono-btn/reloj.png')}}" style="width: 20px">
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
                                <p class="bottommargin-xs">09:00-19:00</p>
                                <p class="bottommargin-xs">09:00-19:00</p>
                                <p class="bottommargin-xs">09:00-19:00</p>
                                <p class="bottommargin-xs">09:00-19:00</p>
                                <p class="bottommargin-xs">09:00-19:00</p>
                                <p class="bottommargin-xs">Previa Cita</p>
                                <p class="bottommargin-xs">Cerrado</p>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>


        <div class="margin-10" id="carousel-showrooms">
            <div class="owl-carousel owl-theme col-md-8 offset-md-2">
                <div class="item">
                    <div>
                        <img src="{{ URL::asset('img/showrooms/carrusel_1.jpg')}}">
                    </div>

                </div>
                <div class="item">
                    <div>
                        <img src="{{ URL::asset('img/showrooms/carrusel_2.jpg')}}">
                    </div>

                </div>
                <div class="item">
                    <div>
                        <img src="{{ URL::asset('img/showrooms/carrusel_3.jpg')}}">
                    </div>

                </div>
                <div class="item">
                    <div>
                        <img src="{{ URL::asset('img/showrooms/carrusel_4.jpg')}}">
                    </div>

                </div>
          </div>
      </div>

        <div id="lugar" class="margin-10">
            <div class="col-md-10 offset-md-1 text-center bottommargin">

                <h2>UN LUGAR PARA COMENZAR, EXPERIMENTAR Y DAR VIDA A LA VISIÓN DE SU COCINA</h2>
                <p>Esta no es una compra ordinaria. Es una experiencia inmersiva para ayudarlo a darse cuenta de las posibilidades de su futura cocina. En un entorno sin presión, puede descubrir cómo se siente, se ve y sabe su cocina, guiado por un experto asesor cuyo único objetivo es atender la visita a sus necesidades.</p>

            </div>



            <div class="col-md-12 row nomargin">
                <div class="col-lg-6 col-xl-4 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ URL::asset('img/showrooms/consulte.jpg')}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>CONSULTE A LOS EXPERTOS</h5>
                        <p>Haga que nuestro equipo de expertos en productos, personal capacitado y chefs del showroom respondan a todas sus preguntas.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ URL::asset('img/showrooms/test.jpg')}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>HAGA UN TEST DRIVE</h5>
                        <p>Gire las perillas. Abra los cajones. Encienda el quemador. Y traiga su delantal: siempre está invitado a cocinar en nuestras salas de exhibición para conocer nuestros electrodomésticos.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ URL::asset('img/showrooms/sabor.jpg')}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>SABOREE CADA BOCADO</h5>
                        <p>Disfrute de comidas hechas por nuestro chef y experimente todos los beneficios de nuestros equipos con deliciosas demostraciones de productos para apreciar verdaderamente nuestros electrodomésticos con suculentos platillos dulces y salados.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ URL::asset('img/showrooms/sueno.jpg')}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>HAGA REALIDAD SUS SUEÑOS</h5>
                        <p>Encuentre su estilo, vea la línea completa de productos y compare características en una inspiradora variedad de exhibiciones de cocina y hogar decoradas artísticamente.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ URL::asset('img/showrooms/invitado.jpg')}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>SEA NUESTRO INVITADO</h5>
                        <p>En nuestras salas de exhibición, no hay un vendedor a la vista, solo nuestro amable personal, listo para brindarle asesoría y orientación de expertos. Verdaderamente. Así que por favor, solo venga, conozca y disfrute.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ URL::asset('img/showrooms/familia.jpg')}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>ÚNETE A NUESTRA FAMILIA</h5>
                        <p>Su relación con la sala de exposición no termina después de instalar sus electrodomésticos. Puede esperar toda una vida de soporte y recursos útiles para ayudarlo a aprovechar al máximo sus nuevos dispositivos.</p>
                    </div>
                </div>
            </div>

            <div class="offset-xl-5 col-xl-2 offset-lg-4 col-lg-4">
                <a onclick="mover()" class="btn btn-cyan btn-block descubra-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/agenda.png')   }}"><p>SOLICITAR CITA</p></a>
            </div>
        </div>

        <div id="formulario" class="margin-10">

            <div class="text-center col-12">
                <h2>AGENDE SU CITA</h2>
            </div>

            <div class="col-12 nopadding">
                <form id="form-contactanos" action="{{URL::to('/enviar-correo') }}" method="POST">
                    @csrf
                    <div class="row nomargin">
                        <div class="form-group  col-12">
                            <input required type="text" name="nombre" class="form-control form-custom" placeholder="NOMBRE COMPLETO">
                            @if($errors->has('nombre'))
                                <div class="invalid-feeback">
                                    {{$errors->first('nombre')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group  col-md-6">
                            <input required type="text" name="tel" class="form-control form-custom" placeholder="TELÉFONO">
                            @if($errors->has('tel'))
                                <div class="invalid-feeback">
                                    {{$errors->first('tel')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group  col-md-6">
                            <input required type="email" name="email" class="form-control form-custom" placeholder="EMAIL">
                            @if($errors->has('tel'))
                                <div class="invalid-feeback">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group  col-md-6">
                            <select required name="showroom" class="form-control form-custom">
                                <option value=''>SELECCIONAR SHOWROOM</option>
                                <option value='CIUDAD DE MÉXICO'>CIUDAD DE MÉXICO</option>
                                <option value='MONTERREY'>MONTERREY</option>
                            </select>
                            @if($errors->has('showroom'))
                                <div class="invalid-feeback">
                                    {{$errors->first('showroom')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group  col-md-6">
                            <input required id="fecha" name="fecha" type="text" class="form-control form-custom" placeholder="CALENDARIO DE VISITAS">
                            @if($errors->has('fecha'))
                                <div class="invalid-feeback">
                                    {{$errors->first('fecha')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group  col-xl-2 offset-xl-5 col-lg-4 offset-lg-4 text-center topmargin-sm">
                            <button type="submit" class="btn btn-cyan btn-block"><img style="margin-right: 15px; width: 20px" src="{{ URL::asset('img/icono-btn/enviar.png')   }}"> ENVIAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="container-catalogo" class="margin-10">
            <div class="row col-padding catalogo topmargin">
                <div class="col-xl-7 col-lg-6 col-padding-sm d-flex">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ URL::asset('img/showrooms/demo.jpg')}}">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 d-flex" style="padding: 25px 5vw " >
                    <div class="justify-content-center align-self-center">
                        <h2>COOKING DEMO</h2>
                        <p>Experimente el alto rendimiento y los deliciosos resultados de los electrodomésticos en persona, y obtenga consejos confiables de los chefs que usan productos Sub-Zero, Wolf, Cove y Asko todos los días. Las demostraciones son solo una forma más de descubrir la cocina adecuada para usted.</p>
                        <form id="form-contactanos" action="{{URL::to('/enviar-correo') }}" method="POST">
                        @csrf
                        <input type="hidden" name="demo" value="COOKING DEMO">
                            <div class="form-group">
                                <input required name="nombre" type="text" class="form-control form-custom" placeholder="NOMBRE COMPLETO">
                            </div>
                            <div class="form-group">
                                <input required name="email" type="email" class="form-control form-custom" placeholder="EMAIL COMPLETO">
                            </div>
                            <div class="form-group">
                                <input required name="tel" type="text" class="form-control form-custom" placeholder="TELÉFONO COMPLETO">
                            </div>
                            <div class="col-md-12 nopadding">
                                <button type="submit" class="btn btn-cyan btn-block"><img style="margin-right: 15px; width: 20px" src="{{ URL::asset('img/icono-btn/enviar.png')   }}"> ENVIAR</button>
                            </div>
                        </form>
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
