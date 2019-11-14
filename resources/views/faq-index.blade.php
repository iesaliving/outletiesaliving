@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')



    <section>
        <img src="{{ URL::asset('img/faq/hero.jpg')}}">
    </section>


    <section class="container-gral" style="padding-top: 40px" >

        <div id="container-faq" class="margin-10">

            <div class="text-center">
                <h2>FAQ</h2>

                <p>Encuentre respuestas en línea a sus preguntas</p>
            </div>
            <div class="col-md-10 offset-md-1 col-12 nopadding">
                <div class="col-12 row nomargin nopadding">
                    
                    <div class="col-4 text-center">
                        <div style="padding: 10px 4vw">
                            <img src="{{ URL::asset('img/faq/marketing.png')   }}" class="mb-2">
                        </div>
                        <p class="text-center"><strong>Marketing</strong></p>
                    </div>
                    <div class="col-4 text-center">
                        <div style="padding: 10px 4vw">
                            <img src="{{ URL::asset('img/faq/servicio.png')   }}" class="mb-2">
                        </div>
                        <p class="text-center"><strong>Consierge de Servicio</strong></p>
                    </div>
                    <div class="col-4 text-center">
                        <div style="padding: 10px 4vw">
                            <img src="{{ URL::asset('img/faq/entregas.png')   }}" class="mb-2">
                        </div>
                        <p class="text-center"><strong>Entregas</strong></p>
                    </div>

                </div>>

            </div>

            <div class="topmargin">
                <h2 class="bottommargin-sm">MARKETING</h2>
                <h5>¿Cómo solicito un catálogo?</h5>
                <p>DIGITAL: Puede solicitar un catálogo digital al correo electrónico <b>marketing@iesa.cc</b></p>
                <p>IMPRESO: Durante la visita a nuestros showrooms o a un Distribuidor Autorizado IESA puede solicitar un catálogo impreso.</p>
            </div>

            <div class="topmargin">
                <h2 class="bottommargin-sm">CONCIERGE DE SERVICIO</h2>
                <h5>¿Cuánto tiempo de garantía tienen los equipos?</h5>
                <p>Todas las marcas del GRUPO IESA tienen 2 años de garantía completa (partes y mano de obra). Sub-Zero, Wolf y Cove extiende la garantía en algunos componentes hasta 5 años. </p>
                <h5>¿Quién hace la conexión de los equipos?</h5>
                <p>Recomendamos que la conexión de los equipos la haga uno de nuestros Centros Autorizados de Servicio (CAS) que han sido certificados por la fábrica. </p>
                <h5>¿Cómo hago válida mi garantía?</h5>
                <p>Para activar la garantía de su equipo, existen las siguientes opciones:</p>
                <ul>
                    <li>llamar nuestro concierge de servicio al +52 (81) 8389 4372</li>
                    <li>llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li>
                    <li>por whatsapp al +52 (81) 1803 6339 o</li>
                    <li>enviando un correo electrónico a atencionalcliente@iesa.cc</li>
                </ul>
                <h5>¿Qué incluye la conexión de mis equipos?</h5>
                <p>La conexión de sus equipos incluye dos visitas; La primera es para hacer una inspección del espacio donde van a ser instalados los equipos y verificar que cumpla con la guía mecánica del fabricante. La segunda para la conexión de los equipos.
                </p>
                <p>
                    Es importante asegurarse que el espacio esté preparado para recibir a los equipos de acuerdo a las especificaciones de las guías mecánicas de cada modelo. Las guías mecánicas de sus equipos pueden conseguirse en el website, ser solicitadas con quien compró sus equipos o al concierge de servicio.
                    Los equipos Sub-Zero incluyen sin costo adicional un kit de instalación que consiste de uno o más de los siguientes elementos: regulador de voltaje, mangueras conectoras y/o válvulas.

                </p>
                <h5>¿La conexión de mis equipos incluye el traslado del técnico?</h5>
                <p>No se genera cargo de traslado del personal de servicio en las capitales de los estados, así como en destinos turísticos importantes (Los Cabos, Puerto Vallarta y Cancún) dentro de México. En las capitales de los países en el resto de América Latina tampoco se genera cargos adicionales.
                </p>
                <p>Fuera de los destinos mencionados arriba, puede haber un cargo de traslado. Para solicitar un estimado existen las siguientes opciones:
                </p>
                <ul>
                    <li>llamar nuestro concierge de servicio al +52 (81) 8389 4372</li>
                    <li>llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li>
                    <li> por whatsapp al +52 (81) 1803 6339 o</li>
                    <li>enviando un correo electrónico a atencionalcliente@iesa.cc</li>
                </ul>
                <h5>¿Cómo puedo saber si lo que me está cobrando el técnico es lo correcto?</h5>
                <p>Las tarifas de servicio para nuestros Centros Autorizados de Servicios están estipuladas por un tabulador</p>
                <p>Si desea saber el costo de la reparación de su equipo con gusto lo puede solicitar a nuestro concierge de servicio:</p>
                <ul>
                    <li>llamar nuestro concierge de servicio al +52 (81) 8389 4372 </li>
                    <li>llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li>
                    <li>por whatsapp al +52 (81) 1803 6339 o</li>
                    <li>enviando un correo electrónico a atencionalcliente@iesa.cc</li>
                </ul>
                <h5>¿El servicio llega a mi ciudad?</h5>
                <p>Grupo IESA proporciona servicio en toda América Latina, algunos lugares podrían generar un cargo por traslado del técnico.</p>
                <p>No se genera cargo por traslado del personal de servicio en las capitales de los estados, así como en destinos turísticos importantes (Los Cabos, Puerto Vallarta y Cancún) dentro de México, y las capitales de los países en el resto de América Latina.</p>
                <p>Fuera de los destinos mencionados arriba, puede haber un cargo por traslado. Para solicitar un estimado existen las siguientes opciones:
                </p>
                <ul>
                    <li>llamar nuestro concierge de servicio al +52 (81) 8389 4372 </li>
                    <li>llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li>
                    <li>por whatsapp al +52 (81) 1803 6339 o</li>
                    <li>enviando un correo electrónico a atencionalcliente@iesa.cc</li>
                </ul>
            </div>

            <div class="topmargin">
                <h2 class="bottommargin-sm">ENTREGAS</h2>
                <h5>¿En cuánto tiempo puedo recibir mis equipos?</h5>
                <p>Nuestro centro de distribución para México se encuentra en Monterrey y cuenta con un amplio inventario de productos para entrega inmediata.</p>
                <p>Dependiendo del lugar de la República en donde se encuentre puede variar el tiempo de entrega de los equipos entre 2 y 5 días hábiles a partir de que el Distribuidor Autorizado nos haya hecho el pedido si los equipos están en existencia.</p>
                <p>Si los productos que seleccionó fueron pedidos especiales, el tiempo de entrega puede variar entre 4 a 8 semanas.</p>
                <p>El centro de distribución para el resto de América Latina está en ubicado en Miami. Los traslados marítimos normalmente demoran entre 2 y 5 semanas adicionales a lo que demora en México..</p>
                <h5>¿La entrega de mis equipos me genera un cargo?</h5>
                <p>Estamos complacidos de llevar sus electrodomésticos hasta la puerta de su hogar sin ningún costo en Monterrey, CDMX y Guadalajara.</p>
                <p>El resto de las entregas se surten de nuestro Centro de Distribución en Monterrey. Nuestro equipo de Logística de Embarque se puede coordinar con usted para entregarlo a la fletera de su preferencia.</p>
                <p>Para embarques fuera de México, se surtirán desde nuestro Centro de Distribucion en Miami. Nuestro equipo de Logística de Embarque puede coordinar el envío al forwarder de su preferencia en Miami y ayudarle a coordinar el envío hasta el puerto de entrada de su país.</p>
                <h5>¿Qué hago si mi equipo llega dañado o presenta algún golpe?</h5>
                <p>Hemos invertido en herramientas que nos permiten manipular los equipos con gran cuidado minimizando daños, sin embargo es importante que revise cuidadosamente sus equipos al recibirlos.</p>
                <p>En caso de detectar algún daño en algún equipo le sugerimos no recibirlo, nuestros camiones de entrega o la compañía fletera se encargarán de regresarlo a nuestro almacén y nuestro equipo logístico se encargará de tramitar la entrega de un sustituto.</p>
                <p>Si no tuvo oportunidad de verificarlo durante la recepción, tiene 24 hrs adicionales para reportarlo a nuestro equipo de Concierge de Servicio </p>
                <ul>
                    <li>llamar nuestro concierge de servicio al +52 (81) 8389 4372 </li>
                    <li>llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li>
                    <li>por whatsapp al +52 (81) 1803 6339 o</li>
                    <li>enviando un correo electrónico a atencionalcliente@iesa.cc</li>
                </ul>
            </div>

        </div>
    </section>
@endsection


@section('styles')

@endsection



@section('scripts')

@endsection
