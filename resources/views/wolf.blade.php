@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'WOLF')
@section('content')





<section id="hero-desktop">
    @include('hero.wolf')
</section>
<section id="hero-mobile">
    @include('hero-mobile.wolf')    
</section>


<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">
            <div class="col-12 text-center bottommargin-lg">
                <p>
                    Disfrute toda una vida cocinando con más emoción y satisfacción. Wolf destila una legendaria herencia profesional, potencia y clase en equipo de cocina, cuyo control preciso garantiza que el plato que tiene en mente, sea el plato que llegue a la mesa.
                </p>
            </div>
            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/wolf/estufas.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                Estufas
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                De a su cocina una pieza icónica central. Las estufas de gas y estufas duales de Wolf han sido la elección de los profesionales durante ocho décadas y ahora son los preferidos de los más exigentes cocineros del hogar. Los quemadores duales sellados y apilados ofrecen emocionante precisión y rendimiento, mientras que el horno de convección proporciona calor constante para asar, y hornear de manera perfecta.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ URL::asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/wolf/ranges"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 d-flex col-xl-5 offset-xl-1 order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-lg-right text-left">
                            <h2>
                               Hornos empotrables
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                              Hornee, rostice y ase con la confianza de los hornos empotrados Wolf. Los hornos de convección Wolf, o los hornos combinados con convección y vapor, ofrecen controles intuitivos y temperaturas constantes para garantizar que cada comida sea previsiblemente notable.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ URL::asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/wolf/ovens"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/wolf/horno_empotrado.jpg')}}">
                </div>
            </div>


            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/wolf/parrillas.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                parrillas
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Independientemente del método de cocción que prefiera (gas, electricidad o inducción), hay una parrilla Wolf elegante, aerodinámica y bien diseñada para usted. Tenga la seguridad de que cada uno ofrece el control de temperatura de precisión y el rendimiento comprobado que espera de Wolf.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ URL::asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/wolf/cooktops-and-rangetops"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 d-flex col-xl-5 offset-xl-1 order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-lg-right text-left">
                            <h2>                               
                                Microondas
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                                Un microondas Wolf es un verdadero instrumento de cocción, uno que está diseñado para hacer mucho más que recalentar las sobras. De hecho, los diseños innovadores de hoy pueden llevar a la preparación de comidas completas. Equipe su cocina con una de la extensa selección de microondas de Wolf (incluidos los modelos de convección), con cajones, puertas abatibles y modelos de giro lateral disponibles
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ URL::asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/wolf/microwave-ovens"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/wolf/microondas.jpg')}}">
                </div>
            </div>



            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/wolf/horno_convecion_vapor.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                Hornos de convección y vapor
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Cocinar con vapor tiene infinitos beneficios. Diseñados con un sensor de clima, los hornos de vapor de convección Wolf garantizan resultados sabrosos que siempre están libres de conjeturas. Disponible en anchos de 24 “y 30”.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ URL::asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/wolf/ovens/steam-oven"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 d-flex col-xl-5 offset-xl-1 order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-lg-right text-left">
                            <h2>
                                Speed oven
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                               El rendimiento que espera de los hornos Wolf, solo que más rápido y más pequeño. Combina la potencia del microondas con las capacidades de convección y asado en un dispositivo fácil de usar. Ofrece versatilidad de horno todo en uno, preparando una amplia variedad de alimentos en un tiempo reducido. Disponible en anchos de 24 “y 30”
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ URL::asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/wolf/ovens/speed-ovens"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/wolf/speed_oven.jpg')}}">
                </div>
            </div>



            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/wolf/modulos.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                MÓDULOS 
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Personalice su cocina con módulos de cocina que se adaptan a su estilo de cocina único. Los módulos Wolf significan flexibilidad de diseño modular, en otras palabras, la opción de incorporar de manera perfecta y hermosa herramientas como vaporera, parrillas y freidoras en su hogar entre otros.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ URL::asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/wolf/cooktop"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 d-flex col-xl-5 offset-xl-1 order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-lg-right text-left">
                            <h2>
                                Ventilación
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                                Con potentes motores de varias velocidades para eliminar el humo y los olores, junto con iluminación halógena para iluminar con elegancia las áreas de cocción, Wolf ventilación ofrece una amplia gama de opciones útiles y atractivas diseñadas para mejorar cualquier diseño de cocina.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ URL::asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/wolf/range-hood"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/wolf/ventilacion.jpg')}}">
                </div>
            </div>



            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/wolf/calentadores.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                Cajones calentadores
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Sirva cada plato a su temperatura adecuada con los cajones calentadores de Wolf. Diseñados para preservar la temperatura y la calidad de los alimentos sin comprometer el sabor o la consistencia, los cajones calefactores Wolf garantizan resultados deliciosos para sus invitados, sin importar cuándo lleguen a su mesa.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ URL::asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/wolf/warming-drawer"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 d-flex col-xl-5 offset-xl-1 order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-lg-right text-left">
                            <h2>
                                CAJÓN DE SELLADO AL VACÍO
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                                Los cajones de sellado al vacío Wolf eliminan el aire y sellan los alimentos o líquidos para un fácil almacenamiento, marinado y cocción. Disfruta de una mirada de nuevas posibilidades creativas de cocina, incluidos los resultados consistentemente deliciosos de preparaciones sous vide, con Wolf.    
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ URL::asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/wolf/vacuum-drawer"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/wolf/sellado_vacio.jpg')}}">
                </div>
            </div>



            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/wolf/cafetera.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                Cafeteras
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Con la cafetera Wolf, haga café de calidad profesional, espresso, cappuccino, latte y más precisamente a su gusto, con granos de café reales, al toque de un botón. Instálelo en cualquier lugar en su hogar u oficina-pues no se requiere ninguna plomería.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ URL::asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/wolf/coffee-systems"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 d-flex col-xl-5 offset-xl-1 order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-lg-right text-left">
                            <h2>
                                wolf gourmet
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                                Los electrodomésticos Wolf Gourmet se fabrican con la gran atención a los detalles que usted espera de la marca Wolf. Creemos que el gusto por cocinar no comienza con la finalización de la comida, sino con su preparación. Disfrute cada paso del proceso usando nuestros electrodomésticos de alto rendimiento diseñados para soportar los rigores de cualquier cocina.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ URL::asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/wolf-gourmet/countertop-appliances"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/wolf/wolf_gourmet.jpg')}}">
                </div>
            </div>


   
        </div>

</section>


<section id="facebook-desktop" class="container-fb" style="background-image: url('{{ URL::asset('img/wolf/facebook.jpg')}}') ;">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-md-5 offset-md-7 col-12 justify-content-center align-self-center">
                            <h2 class="light">SUB-ZERO WOLF MÉXICO Y LATINOAMÉRICA</h2>
                        <div class="col-md-6 offset-md-6 col-7 nopadding topmargin-sm">
                            <a target="_blank" rel="nofollow" href="https://www.facebook.com/subzerowolf/" class="btn btn-block btn-cyan btn-facebook"><img src="{{ URL::asset('img/icono-btn/facebook.png')   }}">SÍGUENOS</a>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
</section>

<section id="facebook-mobile" class="container-fb" style="background-image: url('{{ URL::asset('img/wolf/facebook-mobile.jpg')}}') ;">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-md-5 offset-md-7 col-12 justify-content-center align-self-center">
                            <h2 class="light">SUB-ZERO WOLF MÉXICO Y LATINOAMÉRICA</h2>
                        <div class="col-md-6 offset-md-6 col-7 nopadding topmargin-sm">
                            <a target="_blank" rel="nofollow" href="https://www.facebook.com/subzerowolf/" class="btn btn-block btn-cyan btn-facebook"><img src="{{ URL::asset('img/icono-btn/facebook.png')   }}">SÍGUENOS</a>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
</section>



<section class="container-gral topmargin">
        @include('modulos.showrooms')

        
<!-- 
        <div id="modulos-faq" class="margin-10">
            <div class="row nomargin">
                <div class="col-12">
                    <h2>FAQ</h2>
                </div>

                <div class="col-md-6">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin convallis laoreet justo nec dapibus. Phasellus in dui feugiat, blandit odio ac, aliquet turpis. Praesent condimentum magna at imperdiet gravida. </p>
                </div>
                <div class="col-md-6">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin convallis laoreet justo nec dapibus. Phasellus in dui feugiat, blandit odio ac, aliquet turpis. Praesent condimentum magna at imperdiet gravida. </p>
                </div>
                <div class="col-md-6">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin convallis laoreet justo nec dapibus. Phasellus in dui feugiat, blandit odio ac, aliquet turpis. Praesent condimentum magna at imperdiet gravida. </p>
                </div>
                <div class="col-md-6">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin convallis laoreet justo nec dapibus. Phasellus in dui feugiat, blandit odio ac, aliquet turpis. Praesent condimentum magna at imperdiet gravida. </p>
                </div>
                
            </div>
        </div> -->


        <div class="margin-10">
            @include('modulos.form-generico')
        </div>
</section>





@endsection


@section('styles')
@endsection

@section('scripts')
@endsection
