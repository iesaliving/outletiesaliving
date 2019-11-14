@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')






<section>
  <img src="{{ URL::asset('img/showrooms/hero.jpg')}}">
</section>


<section class="container-gral">
    
  

        <div class="margin-6">
            <div  class="row calendario light">
                <div class="col-lg-6 row ">
                    <div class="col-12 text-center bottommargin-sm">
                        <h2 class="light">MONTERREY</h2>
                    </div>
                    <div class="col-lg-6">
                        <p>Carr. Monterrey –<br> Saltillo 3061<br> Fracc. Bosques del Poniente<br> Santa Catarina, NL 66350</p>

                        <a href="tel:528183894372"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (81) 8389 4372</p></a>
                        <a href="mailto:recepción@iesa.container-catalogo"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px">recepción@iesa.cc</p></a>
                        

                        <div class="col-12 topmargin">

                            <a class="btn btn-block btn-cyan" href="javascript:void(0)"><i style="margin-right: 15px" class="fa fa-calendar fa-2x"></i>SOLICITAR CATÁLOGO</a>

                            <a class="btn btn-block btn-cyan" target="_blank" href="https://www.google.co.ve/maps/place/Importaciones+Electrodom%C3%A9sticas,+S.A.+De+C.V./@25.682615,-100.4560607,17z/data=!3m1!4b1!4m5!3m4!1s0x86629816d52a561b:0x708d48dbe192e667!8m2!3d25.682615!4d-100.453872"><i style="margin-right: 15px;color: #fff" class="fa fa-map-marker fa-2x"></i>DIRECCIÓN</a>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 row nomargin">
                        <div class="col-12">
                            <p class="nomargin"><img src="{{ URL::asset('img/icono-btn/reloj.png')}}" style="margin-right: 15px;width: 20px"><b>Horarios y Días de trabajo</b></p>
                        </div>
                        <div class="col-4 " style="display: inline-grid;">
                            <p class="nomargin">Mon.</p>
                            <p class="nomargin">Tue.</p>
                            <p class="nomargin">Wed.</p>
                            <p class="nomargin">Thu.</p>
                            <p class="nomargin">Fri.</p>
                            <p class="nomargin">Sat.</p>
                            <p class="nomargin">Sun.</p>
                            
                        </div>
                        <div class="col-8" style="display: inline-grid;">
                            <p class="nomargin">09:00-19:00</p>
                            <p class="nomargin">09:00-19:00</p>
                            <p class="nomargin">09:00-19:00</p>
                            <p class="nomargin">09:00-19:00</p>
                            <p class="nomargin">09:00-19:00</p>
                            <p class="nomargin">Closed</p>
                            <p class="nomargin">Closed</p>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6 row ">
                    <div class="col-12 text-center bottommargin-sm">
                        <h2 class="light">CIUDAD DE MÉXICO</h2>
                    </div>
                    <div class="col-lg-6">
                        <p>Galileo 8 Segundo piso<br> Col. Polanco Chapultepec<br> México, DF 11560<br><b style="color: #fff">blando blando blando blando</b></p>

                        <a href="tel:525552809648"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (55) 5280 9648</p></a>
                        <a href="mailto:recepción@iesa.container-catalogo"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px">showroom@iesa.cc</p></a>
                        

                        <div class="col-12 topmargin">

                            <a class="btn btn-block btn-cyan" href="javascript:void(0)"><i style="margin-right: 15px" class="fa fa-calendar fa-2x"></i>SOLICITAR CATÁLOGO</a>

                            <a class="btn btn-block btn-cyan" target="_blank" href="https://www.google.co.ve/maps/place/IESA/@19.4284845,-99.1956162,17z/data=!3m1!4b1!4m5!3m4!1s0x85d201ff11a77f6d:0x18848b36c0d7d2d9!8m2!3d19.4284845!4d-99.1934275"><i style="margin-right: 15px;color: #fff" class="fa fa-map-marker fa-2x"></i>DIRECCIÓN</a>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 row nomargin">
                        <div class="col-12">
                            <p class="nomargin"><img src="{{ URL::asset('img/icono-btn/reloj.png')}}" style="margin-right: 15px;width: 20px"><b>Horarios y Días de trabajo</b></p>
                        </div>
                        <div class="col-4 " style="display: inline-grid;">
                            <p class="nomargin">Mon.</p>
                            <p class="nomargin">Tue.</p>
                            <p class="nomargin">Wed.</p>
                            <p class="nomargin">Thu.</p>
                            <p class="nomargin">Fri.</p>
                            <p class="nomargin">Sat.</p>
                            <p class="nomargin">Sun.</p>
                            
                        </div>
                        <div class="col-8" style="display: inline-grid;">
                            <p class="nomargin">09:00-19:00</p>
                            <p class="nomargin">09:00-19:00</p>
                            <p class="nomargin">09:00-19:00</p>
                            <p class="nomargin">09:00-19:00</p>
                            <p class="nomargin">09:00-19:00</p>
                            <p class="nomargin">Closed</p>
                            <p class="nomargin">Closed</p>
                            
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
                <p>IESA Consierge de Servicio ofrece reparación, mantenimiento y servicio de expertos  para todos los electrodomésticos Sub-Zero, Wolf y Cove, así como servicio para electrodomésticos ASKO y Dexa.</p>

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
                <a class="btn btn-cyan btn-block descubra-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/agenda.png')   }}"><p>SOLICITAR CITA</p></a>
            </div>
        </div>

        <div id="formulario" class="margin-10">

            <div class="text-center col-12">
                <h2>AGENTE TU CITA</h2>
            </div>

            <div class="col-12 nopadding">
                <form>
                    <div class="row nomargin">
                        <div class="form-group  col-12">
                            <input type="text" class="form-control form-custom" placeholder="NOMBRE COMPLETO">
                        </div> 
                        <div class="form-group  col-md-6">
                            <input type="text" class="form-control form-custom" placeholder="TELÉFONO">
                        </div> 
                        <div class="form-group  col-md-6">
                            <input type="text" class="form-control form-custom" placeholder="EMAIL">
                        </div> 
                        <div class="form-group  col-md-6">
                            <select class="form-control form-custom">
                                <option>SELECCIONAR SHOWROOM</option>
                            </select> 
                        </div> 
                        <div class="form-group  col-md-6">
                            <input type="text" class="form-control form-custom" placeholder="CALENDARIO DE VISITAS">
                        </div> 

                        <div class="form-group  col-lg-2 offset-lg-5 text-center topmargin-sm">
                            <a class="btn btn-cyan btn-block" href=""><img style="margin-right: 15px; width: 20px" src="{{ URL::asset('img/icono-btn/enviar.png')   }}"> ENVIAR</a>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control form-custom" placeholder="NOMBRE COMPLETO">
                            </div> 
                            <div class="form-group">
                                <input type="email" class="form-control form-custom" placeholder="EMAIL COMPLETO">
                            </div> 
                            <div class="form-group">
                                <input type="text" class="form-control form-custom" placeholder="TELÉFONO COMPLETO">
                            </div> 
                            <div class="col-md-12 nopadding">
                                <a class="btn btn-block btn-cyan" href=""><img style="margin-right: 15px; width: 20px" src="{{ URL::asset('img/icono-btn/enviar.png')   }}"> ENVIAR</a>
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

@endsection

 

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>

<script type="text/javascript">
$(document).ready(function() {
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
