@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Servicios')
@section('content')




<section style="position: relative;">
    <div id="hero-desktop" class="col-12 nopadding">
        <img src="{{ URL::asset('img/servicios/hero.jpg')}}" alt="servicios hero">
    </div>

    <div id="hero-mobile" class="col-12 nopadding">
        <img src="{{ URL::asset('img/hero-servicio-mobile.jpg')}}" alt="hero servicio mobile">
    </div>
    <div id="container-btn-servicios">
        <div class="row nomargin">
            <div class="col-xl-7 col-lg-6 bottommargin-sm">
                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/contacto')}}"><img src="{{ URL::asset('img/icono-btn/agenda.png')   }}" alt="icono agenda"><p>AGENDE UNA CITA DE SERVICIO</p></a>
            </div>
            <div class="col-xl-5 col-lg-6 bottommargin-sm">
                <a class="btn btn-block btn-cyan descubra-btn" href="tel:+5218118036339"><p><img src="{{ URL::asset('img/icono-btn/whatsapp_blanco.png')}}" style="margin-right: 15px;width: 20px" alt="icono whatsapp blanco">+52 (1) 811 803 6339</p></a>
            </div>

        </div>
  </div>
</section>



<section class="container-gral">

        <div id="container-catalogo" class="margin-10">
        <div class="col-12 text-center bottommargin-lg">
                <h2>RECIBA LA AYUDA DE EXPERTOS</h2>
                <p>Ya sea que desee programar una conexión, solicitar un servicio para sus electrodomésticos, tiene dudas de como preparar sus espacios para recibir sus nuevos equipos, o simplemente tiene preguntas acerca de los que ya tiene, tenemos los recursos que usted necesita. Hable directamente con un experto de servicio al cliente.</p>

        </div>
            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-padding-sm">
                  <img src="{{ URL::asset('img/servicios/servicio.jpg')}}" alt="servicios">
                </div>
                <div class="col-xl-6  col-lg-6">
                    <div class="topmargin-sm col-xl-11">
                        <h2>
                           CONCIERGE DE SERVICIO TÉCNICO
                        </h2>
                         <p> Obtenga respuestas en línea rápidamente; nuestro equipo está listo para atender todas sus dudas, ya sea que necesite la guía mecánica de algún electrodoméstico, agendar una conexión o servicio, saber sobre la garantía de su equipo o simplemente verificar que su taller sea uno de nuestros talleres autorizados por la fábrica.</p>

                    </div>


                    <div class="topmargin-sm row nomargin col-xl-11">
                        <div class="col-1 nopadding bottommargin-sm">
                            <img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px" alt="icono telefono">
                        </div>
                        <div class="col-11 bottommargin-sm">
                            <a href="tel:+5218004004372"><p class="nomargin">+52 (1) 800 400 IESA (4372)</p></a>
                        </div>
                        <div class="col-1 nopadding bottommargin-sm">
                            <img src="{{ URL::asset('img/icono-btn/whatsapp.png')}}" style="margin-right: 15px;width: 20px" alt="icono whatsapp">
                        </div>
                        <div class="col-11 bottommargin-sm">
                            <a href="https://wa.me/+5218118036339" target="_blank" ><p class="nomargin">+52 (1) 811 803 6339</p></a>
                        </div>
                        <div class="col-1 nopadding bottommargin-sm">
                            <img src="{{ URL::asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px" alt="icono email">
                        </div>
                        <div class="col-11 bottommargin-sm">
                           <a href="mailto:atencionalcliente@iesa.cc"> <p class="nomargin">atencionalcliente@iesa.cc</p></a>
                        </div>
                    </div>

                    <div class="row nomargin">
                        <div class="col-2" style="padding: 0 5px 0 0">
                            <a href="{{ URL::to('/sub-zero') }}"><img src="{{ URL::asset('img/cintillos/SubZero.png')}}" alt="vintillos subzero"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/wolf') }}"><img src="{{ URL::asset('img/cintillos/Wolf.png')}}" alt="cintillos wolf"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/cove') }}"><img src="{{ URL::asset('img/cintillos/Cove.png')}}" alt="cintillos cove"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/asko') }}"><img src="{{ URL::asset('img/cintillos/Asko.png')}}" alt="cintillos asko"></a>
                        </div>
                        <div class="col-1" style="padding: 0 5px">
                            <a href="{{ URL::to('/dexa') }}"><img src="{{ URL::asset('img/cintillos/Dexa.png')}}" alt="cintillos dexa"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/scotsman') }}"><img src="{{ URL::asset('img/cintillos/Scotsman.png')}}" alt="cintillos scotsman"></a>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-12 text-center bottommargin-lg topmargin">
                <h2>EL SERVICIO QUE USTED Y SUS ELECTRODOMÉSTICOS MERECEN</h2>
                <p>Como especialistas en equipos sub-Zero, Wolf, Cove, Asko ,Dexa  apreciamos y sabemos lo valioso de su tiempo  por lo que hacemos lo posible  para minimizar las interrupciones en su hogar y horario.</p>


            </div>




            <div class="row col-padding catalogo topmargin">

                <div class="col-xl-6 offset-xl-0 col-lg-6 order-2 order-lg-1">
                    <div class="topmargin-sm text-lg-right text-left col-xl-11 offset-xl-1">
                        <h2>
                           AGENDE UNA CITA DE SERVICIO
                        </h2>
                        <p>Nuestros técnicos cuidadosamente seleccionados y entrenados directamente en fábrica, cuentan con altos estándares de rendimiento en la realización de  mantenimiento, diagnóstico y reparación de nuestros electrodomésticos.
                        <br>Agende su cita y viva la experiencia de un servicio de guantes blancos.</p>

                    </div>

                    <div class="topmargin-sm">
                        <div class="row nomargin col-12 nopadding">
                            <div class="order-lg-1 order-2 col-11 bottommargin-sm text-lg-right text-left">
                               <a href="tel:+5218004004372"><p class="nomargin">+52 (1) 800 400 IESA (4372)</p></a>
                            </div>
                            <div class="order-lg-2 order-1 col-1 nopadding bottommargin-sm">
                                <img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px" alt="icono telefono">
                            </div>
                        </div>
                        <div class="row nomargin col-12 nopadding">
                            <div class="order-lg-1 order-2 col-11 bottommargin-sm text-lg-right text-left">
                                <a href="https://wa.me/+5218118036339" target="_blank" ><p class="nomargin">+5218118036339</p></a>
                            </div>
                            <div class="order-lg-2 order-1 col-1 nopadding bottommargin-sm">
                                <img src="{{ URL::asset('img/icono-btn/whatsapp.png')}}" style="margin-right: 15px;width: 20px" alt="icono whatsapp">
                            </div>
                        </div>
                        <div class="row nomargin col-12 nopadding">
                            <div class="order-lg-1 order-2 col-11 bottommargin-sm text-lg-right text-left">
                               <a href="mailto:atencionalcliente@iesa.cc"> <p class="nomargin">atencionalcliente@iesa.cc</p></a>
                            </div>
                            <div class="order-lg-2 order-1 col-1 nopadding bottommargin-sm">
                                <img src="{{ URL::asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px" alt="icono email">
                            </div>
                        </div>
                    </div>

                    <div class="row nomargin">
                        <div class="col-2 offset-lg-1" style="padding: 0 5px 0 0">
                            <a href="{{ URL::to('/sub-zero') }}"><img src="{{ URL::asset('img/cintillos/SubZero.png')}}" alt="cintillos subzero"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/wolf') }}"><img src="{{ URL::asset('img/cintillos/Wolf.png')}}" alt="cintillos wolf"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/cove') }}"><img src="{{ URL::asset('img/cintillos/Cove.png')}}" alt="cintillos cove"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/asko') }}"><img src="{{ URL::asset('img/cintillos/Asko.png')}}" alt="cintillos asko"></a>
                        </div>
                        <div class="col-1" style="padding: 0 5px">
                            <a href="{{ URL::to('/dexa') }}"><img src="{{ URL::asset('img/cintillos/Dexa.png')}}" alt="cintillos dexa"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/scotsman') }}"><img src="{{ URL::asset('img/cintillos/Scotsman.png')}}" alt="cintillos scotsman"></a>
                        </div>
                    </div>

                    <div class="text-lg-right text-left topmargin-sm">

                    </div>

                </div>
                <div class="col-lg-6 col-padding-sm d-flex order-1 order-lg-2">
                    <div class="align-self-center justify-content-center">
                        <img src="{{ URL::asset('img/servicios/agenda.jpg')}}" alt="servicios agenda">
                    </div>
                </div>
            </div>


            <div class="col-12 text-center bottommargin-lg topmargin-lg">
                <h2>CENTROS AUTORIZADOS DE SERVICIO</h2>
                <p>GRUPO IESA cuenta con una amplia red de Centros Autorizados de Servicio, en México y Latinoamérica.</p>
                <p>Nuestro Concierge de Servicio puede brindarle los datos del CAS más cercano a usted. Contáctenos al<a class="cyan" href="tel:+528183894372"> +52 (1) (81) 8389 4372</a> , llamada sin costo dentro de la República Mexicana al <a class="cyan" href="tel:018004004372">+52 (1) 800 400 4372</a>, por WhatsApp al <a target="_blank" class="cyan" href="https://wa.me/528118036339">811.803.6339</a> o al correo electrónico <a class="cyan" href="mailto:atencionalcliente@iesa.cc"> atencionalcliente@iesa.cc</a> </p>
                <div class="form-group  col-xl-4 offset-xl-4  col-md-4 offset-md-4 text-center topmargin-sm">
                    <a class="btn btn-cyan btn-block" target="_blank" rel="nofollow" href="https://mx.subzero-wolf.com/es/locator#Tab-Service"><img style="margin-right: 15px; width: 20px" src="{{ URL::asset('img/icono-btn/enviar.png')   }}">LOCALÍZALOS AQUÍ</a>
                </div>
            </div>

            <div class="col-12 text-center bottommargin-lg topmargin-lg">
                <h2>INSTALAMOS Y DAMOS SERVICIOS A TODOS LOS EQUIPOS QUE VENDEMOS</h2>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/servicios/autorizado.jpg')}}" alt="servicios autorizado">
                </div>
                <div class="col-lg-6 col-xl-5 d-flex">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">Servicio autorizado de Fábrica</h2>
                        <p>Brindamos servicio y mantenimiento a las marcas Sub-Zero, Wolf, Cove,  Asko y Dexa  en toda la República Mexicana y Latinoamérica</p>
                        <p>Sus electrodomésticos de lujo merecen un servicio de lujo. Usted  merece la atención  de los técnicos de Grupo IESA.</p>
                    </div>

                </div>
            </div>



            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-xl-5 offset-xl-1 d-flex text-lg-right text-left order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">Brindamos servicio de garantía</h2>
                        <p>Comencemos con el beneficio obvio de elegir a nuestros técnicos autorizados:</p>
                        <p>Grupo IESA es el proveedor de servicios certificados de fábrica que está capacitado exclusivamente para trabajar solo en las marcas Sub-Zero, Wolf, Cove, ASKO  Y Dexa. Como resultado, brindamos un servicio experto para todas sus necesidades de garantía.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/servicios/garantia.jpg')}}" alt="servicios garantia">
                </div>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-padding-sm d-flex">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ URL::asset('img/servicios/guantes.jpg')}}" alt="servicios guantes">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 d-flex">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">Garantizamos el servicio de guantes blancos </h2>
                        <p>Como parte de nuestra misión de brindar atención al cliente acorde con los electrodomésticos de lujo que atendemos:<br>Nos esforzamos por llegar cuando está programado para que nuestros clientes no tengan que lidiar con frustrantes ventanas de servicio de tres horas como lo requieren otras compañías de servicios.</p>
                        <p>Nuestros técnicos, equipados con cubre zapatos, esterillas, tapetes y bolsas de herramientas blandas, siempre tratan su hermosa casa con cuidado, limpiando después para no dejar rastro.</p>
                        <p>
                            Nuestros técnicos están capacitados para ser amigables y comunicativos, para que siempre sepa lo que sucede con sus electrodomésticos.
                        </p>
                    </div>

                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-xl-5 offset-xl-1 d-flex text-lg-right text-left  order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">Recibimos una amplia capacitación directamente de Sub-Zero</h2>
                        <p>Estamos tan familiarizados con los equipos Sub-Zero, Wolf, Covey Asko que generalmente podemos diagnosticar un problema incluso antes de salir, asegurando que su problema se resuelva mucho más rápido.</p>
                        <p>No todos los problemas son mecánicos, por lo que utilizamos el software patentado Sub-Zero para ejecutar diagnósticos que revelan problemas ocultos.</p>
                        <p>Los dispositivos integrados de Sub-Zero ofrecen un desafío único que nuestros técnicos capacitados pueden manejar con confianza y experiencia.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm d-flex order-lg-2 order-1">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ URL::asset('img/servicios/capacitacion.jpg')}}" alt="servicios capacitacion">
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-padding-sm d-flex">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ URL::asset('img/servicios/fabricante.jpg')}}" alt="fabricante">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 d-flex">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">Utilizamos sólo piezas del fabricante</h2>
                        <p>
                            Las piezas certificadas de fábrica están cubiertas por una garantía integral de reemplazo de un año y se garantiza que funcionarán mejor y durarán más.
                        </p>
                        <p>Nuestro almacén está abastecido con un gran surtido de piezas para todos los electrodomésticos que manejamos.</p>

                    </div>




                </div>
            </div>
        </div>

</section>
@endsection


@section('styles')
@endsection

@section('scripts')
@endsection
