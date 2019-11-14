@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')



    <section>
        <img src="{{ URL::asset('img/hero-aviso.jpg')}}">
    </section>


    <section class="container-gral" style="padding-top: 40px" >

        <div id="container-faq" class="margin-10">

            <div class="text-center">
                <h2>AVISO DE PRIVACIDAD</h2>

                <p><b style="color: #01bb9c">IESA</b> utiliza diferentes tecnologías de Internet (Ej. Cookies, Java-Script) con el único propósito de hacer más fácil el uso de las diferentes aplicaciones de Internet.
                    Para mejorar la imagen de nuestra página y hacerla más atractiva la información se despliega de forma automática  en un número limitado de casos (Ej. navegador, sistema operativo, número de clicks, tiempo por página). Dicha información se recolecta de una forma que no proporciona identificación personal.
                </p>
            </div>
            <div class="row col-md-10 offset-md-1">
            <!--     		<div style="width: 20%; padding: 2vw">
    			<img src="{{ URL::asset('img/boceto1.png')   }}">
    			<div class='text-center'>
    				<h6><b>Lorem ipsum dolor sit amet</b></h6>
    			</div>
    		</div>
    		<div style="width: 20%; padding: 2vw">
    			<img src="{{ URL::asset('img/boceto1.png')   }}">
    			<div class='text-center'>
    				<h6><b>Lorem ipsum dolor sit amet</b></h6>
    			</div>
    		</div>
    		<div style="width: 20%; padding: 2vw">
    			<img src="{{ URL::asset('img/boceto1.png')   }}">
    			<div class='text-center'>
    				<h6><b>Lorem ipsum dolor sit amet</b></h6>
    			</div>
    		</div>
    		<div style="width: 20%; padding: 2vw">
    			<img src="{{ URL::asset('img/boceto1.png')   }}">
    			<div class='text-center'>
    				<h6><b>Lorem ipsum dolor sit amet</b></h6>
    			</div>
    		</div>
    		<div style="width: 20%; padding: 2vw">
    			<img src="{{ URL::asset('img/boceto1.png')   }}">
    			<div class='text-center'>
    				<h6><b>Lorem ipsum dolor sit amet</b></h6>
    			</div>
    		</div> -->



            </div>

            <div class="topmargin">
                <h2 class="bottommargin-sm">Hipervínculos a otras páginas de Internet</h2>
                <p>Algunos hipervínculos del sitio de Internet de La Familia Perfecta puede conectar a otras páginas que pertenecen a empresas ajenas a nosotros. Por lo tanto, <b>IESA</b> no se hace responsable del contenido de dichos sitios o de sus políticas de seguridad.</p>
            </div>

            <div class="topmargin">
                <h2 class="bottommargin-sm">Responsabilidades</h2>
                <ol>
                    <li style="color: #01bb9c"><p style="color:#000;">La información y descargas proporcionadas no contienen garantía de vínculos, promesas o representaciones.</p></li>
                    <li style="color: #01bb9c"><p style="color:#000;"><b>IESA</b> no asume la responsabilidad de que la información esté completa o correcta, ni garantiza la calidad o fiabilidad de la información o los resultados producidos por la misma. <b>IESA</b> no se hace responsable de ninguna manera por daños directos, consecuenciales o incidentales que resulten de las descargas, tales como la interrupción del servicio y la pérdida de datos o información. Las descargas que Iesa proporciona sólo deben ser utilizadas después de una consulta previa con <b>IESA</b>.</p></li>
                    <li style="color: #01bb9c"><p style="color:#000;"><b>IESA</b> no asume la responsabilidad del uso o falta de uso de sus descargas, hardware, software o problemás con la configuración del sistema. El uso de las descargas queda bajo responsabilidad y discreción del usuario. <b>IESA</b> no asume responsabilidades sobre el software o la información, en particular con respecto a cubrir un propósito específico, la validez de sus contenidos o la ausencia de virus.</p></li>
                    <li style="color: #01bb9c"><p style="color:#000"><b>IESA</b> no asume la responsabilidad por los daños causados por virus, troyanos, hoax o cualquier otro código que manifieste propiedades destructivas o dañinas; ni por programas, partes de programas, códigos o la interrupción de servicios resultante de datos o información corrupta. Se espera que el usuario tenga medidas de protección antivirus e información destructiva.</p></li>
                    <li style="color: #01bb9c"><p style="color:#000"><b>IESA</b> no se hace responsable por errores en la transmisión de datos a <b>IESA</b>, la manipulación de dichos datos por terceros no autorizados en particular mediante el acceso a la red y a los sistemás de <b>IESA</b>.</p></li>
                    <li style="color: #01bb9c"><p style="color: #000">Esto no incluye casos de negligencia y no aplica en los casos en los que las garantías sobre las propiedades de las descargas  fueron hechas, ni si se cometen infracciones contra obligaciones contractuales sustanciales. Lo mismo aplica para los casos de daños físicos así como a responsabilidades resultantes del producto.</p>
                        <p style="color: #000">Los daños resultantes por la infracción de obligaciones contractuales sustanciales está limitada a daños que se estimen previsibles y típicos en el contexto de contratos similares. Lo anterior, no implica el reverso de una carga de prueba en detrimento del usuario.</p>
                    </li>
                    <li style="color: #01bb9c"><p style="color: #000">Toda la información de nuestro sitio de Internet puede estar sujeta a errores y omisiones de los que <b>IESA</b>  no se hace responsable. Las especificaciones de los productos están sujetas a cambios sin previo aviso.</p></li>


                </ol>
            </div>

            <div class="topmargin">
                <h2 class="bottommargin-sm">AVISO DE PRIVACIDAD</h2>
                <p><b>IMPORTACIONES ELECTRODOMÉSTICAS, S.A. DE C.V.(“IESA” (lA Familia Perfecta)</b> es una sociedad constituida de conformidad con las leyes mexicanas y tiene su domicilio ubicado en Carretera Monterrey-Saltillo No. 3061, Fracc. Bosques del Poniente en Santa Catarina, N.L. C.P. 66362, México . Para efectos del presente Aviso de Privacidad <b>IESA</b> es responsable de recabar y tratar sus datos personales de conformidad con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su Reglamento, los Lineamientos del Aviso de Privacidad del INAI y el contenido de este documento.</p>
                <p><b>IESA</b> constantemente realiza, patrocina u organiza lanzamientos y presentaciones de sus productos, clases de cocina, cenas, catas de vinos y café (los “Eventos”), a través de los cuales <b>IESA</b> da a conocer a sus invitados, interesados, participantes, clientes y prospecto de clientes sobre sus productos, su aprovechamiento al máximo y el estilo de vida que ofrecen los mismos. Adicionalmente, <b>IESA</b> realiza publicaciones sobre sus productos y Eventos (las “Publicaciones”), para mantener actualizados a sus clientes y para informar e interesar a sus invitados y participantes a ser clientes de <b>IESA</b>.</p>
                <p>En virtud de lo anterior y con la finalidad de (i) invitarlo a los Eventos, y (ii) hacerle llegar la información de los productos de <b>IESA</b> y las Publicaciones que realice o en las que participe <b>IESA</b>, <b>IESA</b> solicita a sus clientes, prospecto de clientes, invitados, interesados y participantes  (los “Usuarios”) los siguientes datos personales: nombre completo, teléfono (hogar, oficina y/o celular), domicilio y correo electrónico.</p>
                <p>Al proporcionar dichos datos personales, cada uno de los Usuarios consiente que <b>IESA</b> trate los mismos dentro o fuera de los Estados Unidos Mexicanos y otorga su consentimiento, lo cual se acreditará mediante la firma del presente Aviso de Privacidad, que podrán ser tratados directa o indirectamente por <b>IESA</b>, el importador o sus distribuidores y centro de servicio , quienes en su caso tendrán acceso y podrán usar los datos personales de los Usuarios para enviarles Publicaciones de los productos y eventos internacionales de <b>IESA</b>. En caso de que no se recabe su firma en el presente aviso de privacidad y si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello. El tratamiento de los datos personales que efectúe cualquiera los terceros receptores se ajustará al contenido del presente Aviso de Privacidad.</p>
                <p>Si alguno de los Usuarios (i) considera que no es necesario alguno de los datos personales que <b>IESA</b> recaba para las finalidades antes señaladas, o (ii) desea acceder a sus datos personales en posesión de <b>IESA</b>, rectificar o corregir algún dato que haya sido modificado o que sea erróneo, cancelar, oponerse o limitar el tratamiento que <b>IESA</b> le da a sus datos personales, revocar el consentimiento otorgado para el tratamiento de los mismos e inclusive limitar el uso o divulgación de sus datos personales podrá solicitarlo al área de Atención a Clientes, que se encuentra ubicada en el domicilio de <b>IESA</b>, el cual se menciona en el primer párrafo de este Aviso de Privacidad y deberá presentar:
                </p>
                <ol>
                    <li style="color: #01bb9c"><p style="color: #000">Su solicitud por escrito, señalando nombre completo, el domicilio o cualquier otro medio por el cual desea que sea contactado por <b>IESA</b> para recibir la respuesta a su solicitud y la descripción clara y precisa de los datos personales respecto de los busca ejercer alguno de los derechos antes mencionados.</p></li>
                    <li style="color: #01bb9c"><p style="color: #000">Original y copia para cotejo, de su identificación oficial (Usuarios o representantes legales) y de la escritura donde consten los poderes y facultades del representante legal, cuando aplique</p></li>
                    <li style="color: #01bb9c"><p style="color: #000">Copia de cualquier documento o elemento que facilite la localización de los datos personales.</p></li>

                </ol>
                <p>Tome en cuenta que en el supuesto de que usted desee oponerse al tratamiento de sus datos personales, cancelar los mismos de la base de datos de <b>IESA</b>, revocar el consentimiento otorgado a <b>IESA</b> para el tratamiento de los mismos o bien limitar el uso o divulgación de los mismos, la relación entre usted y <b>IESA</b> podrá verse afectada.</p>
                <p>Cualquier pregunta o duda en relación al ejercicio de sus derechos o los procedimientos para la atención y respuesta a sus solicitudes, podrán los Usuarios contactar directamente al área de Atención a Clientes de <b>IESA</b> en el teléfono <b style="color: #01bb9c">01800 400 IESA (4372)</b> . Escribir un mail y/encargado de atención al usuario. <b>(iesa@iesa.cc)</b>.
                    Asimismo le informamos que <b>IESA</b> no utiliza cookies ni medios remotos que permitan recabar datos personales de manera automática.
                </p>
                <p>Este aviso de privacidad podrá ser modificado de tiempo en tiempo por <b>IESA</b>. Dichas modificaciones serán oportunamente informadas a través de nuestra página de internet <b style="color: #01bb9c">www.lafamiliaperfecta.com</b>, o cualquier otro medio de comunicación oral, impreso o electrónico que Iesa determine para tal efecto.</p>
            </div>

        </div>
    </section>
@endsection


@section('styles')

@endsection



@section('scripts')

@endsection
