@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')




<section style="position: relative;">
  <img src="{{ URL::asset('img/servicios/hero.jpg')}}">
  <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3 row" style="position: absolute;bottom: 30px;">
    <div class="col-xl-8 col-md-7">
        <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/contacto')}}"><img src="{{ URL::asset('img/icono-btn/agenda.png')   }}"><p>AGENDA TU VISITA</p></a>
    </div>
    <div class="col-xl-4 col-md-5">
        <a class="btn btn-block btn-cyan descubra-btn" href=" tel:8118036339"><p>811-803-6339</p></a>        
    </div>
      
  </div>
</section>

<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">
            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 col-padding-sm">
                  <img src="{{ URL::asset('img/servicios/servicio.jpg')}}">
                </div>
                <div class="col-xl-5  col-md-6">
                    <div class="topmargin-sm">
                        <h2>
                           CONCIERGE DE SERVICIO TÉCNICO
                        </h2>
                        
                    </div>
                    
                    <div class="topmargin-sm row nomargin">
                        <div class="col-1 nopadding bottommargin-sm">
                            <img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px"> 
                        </div>
                        <div class="col-11 bottommargin-sm">
                            <p class="nomargin">Si tiene alguna pregunta sobre nuestro servicio, llámenos al 01-800-400 IESA (4372)</p>
                        </div>
                        <div class="col-1 nopadding bottommargin-sm">
                            <img src="{{ URL::asset('img/icono-btn/whatsapp.png')}}" style="margin-right: 15px;width: 20px"> 
                        </div>
                        <div class="col-11 bottommargin-sm">
                            <a href="https://wa.me/+528118036339" target="_blank" ><p class="nomargin">811 803 6339</p></a>
                        </div>
                        <div class="col-1 nopadding bottommargin-sm">
                            <img src="{{ URL::asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px"> 
                        </div>
                        <div class="col-11 bottommargin-sm">
                           <a href="mailto:atencionalcliente@iesa.cc"> <p class="nomargin">atencionalcliente@iesa.cc</p></a>
                        </div>                        
                    </div>

                    <div class="row nomargin">
                        <div style="width: 20%; padding: 0 0px">
                            <img src="{{ URL::asset('img/subzero/logo.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 0px">
                            <img src="{{ URL::asset('img/wolf/logo.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 0px">
                            <img src="{{ URL::asset('img/asko/logo.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 0px">
                            <img src="{{ URL::asset('img/dexa/logo.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 0px">
                            <img src="{{ URL::asset('img/scotsman/logo.png')   }}">
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-12 text-center bottommargin-lg topmargin">
                <h2>LE ESTAMOS ESPERANDO CON RESPUESTAS</h2>
                <p>IESA Consierge de Servicio ofrece reparación, mantenimiento y servicio de expertos  para todos los electrodomésticos Sub-Zero, Wolf y Cove, así como servicio para electrodomésticos ASKO y Dexa.</p>

            </div>




            <div class="row col-padding catalogo topmargin">
                
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="topmargin-sm text-right">
                        <h2>
                           AGENDE UNA CITA DE SERVICIO
                        </h2>
                        
                    </div>
                    
                    <div class="topmargin-sm row nomargin">
                        <div class="col-11 bottommargin-sm text-right">
                           <a href="tel:"><p class="nomargin">01 800 400 IESA (4372)</p></a>
                        </div>
                        <div class="col-1 nopadding bottommargin-sm">
                            <img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px"> 
                        </div>
                        <div class="col-11 bottommargin-sm text-right">
                            <a href="https://wa.me/+528118036339" target="_blank" ><p class="nomargin">811 803 6339</p></a>
                        </div>
                        <div class="col-1 nopadding bottommargin-sm">
                            <img src="{{ URL::asset('img/icono-btn/whatsapp.png')}}" style="margin-right: 15px;width: 20px"> 
                        </div>
                        <div class="col-11 bottommargin-sm text-right">
                           <a href="mailto:atencionalcliente@iesa.cc"> <p class="nomargin">atencionalcliente@iesa.cc</p></a>
                        </div>                        
                        <div class="col-1 nopadding bottommargin-sm">
                            <img src="{{ URL::asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px"> 
                        </div>
                    </div>

                    <div class="row nomargin">
                        <div style="width: 20%; padding: 0 0px">
                            <img src="{{ URL::asset('img/subzero/logo.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 0px">
                            <img src="{{ URL::asset('img/wolf/logo.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 0px">
                            <img src="{{ URL::asset('img/asko/logo.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 0px">
                            <img src="{{ URL::asset('img/dexa/logo.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 0px">
                            <img src="{{ URL::asset('img/scotsman/logo.png')   }}">
                        </div>
                    </div>

                    <div class="text-right topmargin-sm">
                        <p>Nuestro objetivo es una experiencia de servicio perfecta en todo momento.</p>
                    </div>

                </div>
                <div class="col-md-6 col-padding-sm">
                  <img src="{{ URL::asset('img/servicios/agenda.jpg')}}">
                </div>
            </div>


            <div class="col-12 text-center bottommargin-lg topmargin-lg">
                <h2>CENTROS AUTORIZADOS DE SERVICIO</h2>
                <p>GRUPO IESA cuenta con una amplia red de Centros Autorizados de Servicio, en México y Latinoamérica.</p>
                <p>Nuestro Concierge de Servicio puede brindarle los datos del CAS más cercano a usted. Contáctenos al<a class="cyan" href="tel:+528183894372"> +52 (81) 8389 4372</a> , llamada sin costo dentro de la Republica Mexicana al <a class="cyan" href="018004004372">01 800 400 4372</a>, por WhatsApp al <a target="_blank" class="cyan" href="https://wa.me/528118036339">811.803.6339</a> o al correo electrónico <a class="cyan" href="mailto:atencionalcliente@iesa.cc"> atencionalcliente@iesa.cc</a> </p>
                <div class="form-group  col-xl-4 offset-xl-4  col-md-4 offset-md-4 text-center topmargin-sm">
                    <a class="btn btn-cyan btn-block" target="_blank" rel="nofollow" href="https://mx.subzero-wolf.com/es/locator#Tab-Service"><i style="margin-right: 15px" class="fa fa-paper-plane fa-2x"></i>LOCALÍZALOS AQUÍ</a>
                </div>
            </div>

            <div class="col-12 text-center bottommargin-lg topmargin-lg">
                <h2>INSTALAMOS Y DAMOS SERVICIOS A TODOS LOS EQUIPOS QUE VENDEMOS</h2>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/servicios/autorizado.jpg')}}">
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
                <div class="col-md-6 col-xl-5 offset-xl-1 d-flex text-right">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">Brindamos servicio de garantía</h2>
                        <p>Comencemos con el beneficio obvio de elegir a nuestros técnico autorizados:</p>
                        <p>Grupo IESA es el proveedor de servicios certificados de fábrica que está capacitado exclusivamente para trabajar solo en las marcas Sub-Zero, Wolf, Cove, ASKO  Y Dexa y solo trabajamos en estas marcas. Como resultado, brindamos un servicio experto para todas sus necesidades de garantía.</p>
                    </div>
                </div>
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/servicios/garantia.jpg')}}">
                </div>
            </div> 


            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 col-padding-sm d-flex">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ URL::asset('img/servicios/guantes.jpg')}}">
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
                <div class="col-md-6 col-xl-5 offset-xl-1 d-flex text-right">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">Recibimos una amplia capacitación directamente de Sub-Zero</h2>
                        <p>Estamos tan familiarizados con los equipos Sub-Zero, Wolf, Covey Asko que generalmente podemos diagnosticar un problema incluso antes de salir, asegurando que su problema se resuelva mucho más rápido.</p>
                        <p>No todos los problemas son mecánicos, por lo que utilizamos el software patentado Sub-Zero para ejecutar diagnósticos que revelan problemas ocultos.</p>
                        <p>Los dispositivos integrados de Sub-Zero ofrecen un desafío único que nuestros técnicos capacitados pueden manejar con confianza y experiencia.</p>
                    </div>
                </div>
                <div class="col-md-6 col-padding-sm d-flex">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ URL::asset('img/servicios/capacitacion.jpg')}}">
                    </div>
                </div>
            </div> 

            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 col-padding-sm d-flex">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ URL::asset('img/servicios/fabricante.jpg')}}">
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
