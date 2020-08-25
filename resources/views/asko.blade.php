@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'ASKO')
@section('content')


<section id="hero-desktop">
    @include('hero.asko')
</section>
<section id="hero-mobile">
    @include('hero-mobile.asko')    
</section>






<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">
        
            <div id="check" class="col-12 text-center bottommargin-lg">
                <p>
                    Electrodomésticos escandinavos ASKO; productos durables y de máxima calidad con soluciones innovadoras respetuosas con el medio ambiente y el uso económico de los recursos como agua y energía.
                </p>
            </div>
            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/asko/asko_hornos.jpg')}}" alt="asko hornos">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                Hornos
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Los hornos de ASKO vienen con una filosofía de interacción única basada en una pantalla táctil TFT con las funciones de uso más frecuente accesibles de inmediato. La interfaz es fácil de usar y lo alentará a explorar todas las características y funciones de su horno.
                            </p>
                            <p>
                                Si es principiante en su cocina, seleccione cualquiera de los programas automáticos de su horno ASKO. Simplemente seleccione un plato de una lista de platillos preprogramados y la intensidad si es necesario. La interfaz está repleta de información útil que lo alienta a explorar la funcionalidad completa del horno.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                 <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_HORNOS.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="catalogo icon"><p>SOLICITAR CATÁLOGO</p></a>
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
                                parrillas
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                                ¿Gas o inducción? Una difícil elección para muchos entusiastas de la cocina. No importa lo que elija, con una parrilla de inducción ASKO en la cocina tendrá un control perfecto del calor. Las parrillas de gas cuentan con el exclusivo quemador Wok Volcano con una llama altamente concentrada y un soporte estable para la sartén wok; las parrillas de inducción están equipadas con zonas Bridge Induction™ que permiten combinar sartenes de diferentes tamaños. Elija lo que quiera, pero debe ser un equipo ASKO.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 offset-lg-5 nopadding bottommargin-sm">
                                 <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_PARRILLAS.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="catalogo icon"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/asko/asko_parrillas.jpg')}}" alt="asko parrillas">
                </div>
            </div>

             <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/asko/asko_campanas.jpg')}}" alt="asko_campanas">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                              CAMPANAS
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                El Sistema Air Logic™garantiza que toda la superficie de la campana se utilice para la extracción de humos. Esto es posible gracias al uso exclusivo de su patrón de orificios cerca del motor y orificios más grandes en los bordes exteriores, lo que hace que la cubierta sea extremadamente eficiente también en configuraciones más bajas. Así tanto silencioso como eficiente.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                 <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_CAMPANAS.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="catalogo icon"><p>SOLICITAR CATÁLOGO</p></a>
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
                                CAFETERA 
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                                Con una filosofía única de interacción y control basada en una interfaz TFT touch, tiene todas las posibilidades para preparar su café de manera perfecta, justo como usted lo desea. La interfaz cuenta con programas, opciones y configuraciones diferentes. Por ejemplo, tamaño de bebida personalizable, selección de idioma, enjuague automático, ajuste de agua caliente y programa de descalcificación.<br>Todos sus componentes son desmontables y fáciles de limpiar

                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 offset-lg-5 nopadding bottommargin-sm">
                                 <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_CAFETERA.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="catalogo icon"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/asko/asko_cafetera.jpg')}}" alt="asko cafetera">
                </div>
            </div>

             <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/asko/asko_cajon.jpg')}}" alt="asko cajon">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                CAJÓN CALENTADOR
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Utilice el cajón calentador para mantener la comida caliente, para calentar platos y tazas o simplemente para guardar las cosas.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                 <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo__ASKO_CAJON_CALENTADOR.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="catalogo icon"><p>SOLICITAR CATÁLOGO</p></a>
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
                                REFRIGERADOR / CONGELADOR
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                                Simplemente enfriar los alimentos frescos no es suficiente para conservarlos durante mucho tiempo. Varios alimentos frescos requieren diferentes temperaturas, niveles de humedad e incluso luz. También pensamos que debería ser fácil para usted colocar sus alimentos frescos y luego encontrarlos, antes de que se vuelvan demasiado viejos.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 offset-lg-5 nopadding bottommargin-sm">
                                 <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo__ASKO_REFRIGERADOR.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="catalogo icon"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/asko/asko_congelador.jpg')}}" alt="asko congelador">
                </div>
            </div>

             <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/asko/asko_lavavajillas.jpg')}}" alt="asko lavavajillas">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                               Lavavajillas
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Las lavavajillas ASKO están hechas de acero. Este ha sido un hecho bien conocido durante décadas y cuando abra la puerta, verá más acero que en cualquier otro lavavajillas del mercado. Con nuestra nueva generación de lavavajillas queremos enfatizar este hecho aún más. Eche un vistazo a la puerta y verá solo acero de alta calidad sin división entre la puerta y el panel. Se expresa a sí misma como un electrodoméstico confiable y robusta, que conserva líneas elegantes y sofisticadas derivadas del minimalismo y la mentalidad escandinava
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                 <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_LAVAVAJILLAS.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="catalogo icon"><p>SOLICITAR CATÁLOGO</p></a>
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
                                Lavadora 
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                                Esta lavadora blanca de nuestra gama Logic con detalles en acero inoxidable presenta nuestra exclusiva Quattro Construction ™. Cuatro amortiguadores transfieren vibraciones a la placa inferior, haciendo que la lavadora esté prácticamente libre de vibraciones, incluso a velocidades de centrifugado de 1400 rpm. 21 programas cuidadosamente diseñados y 5 modos de funcionamiento significan que siempre hay una configuración que se adapta solo a sus necesidades de lavado.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 offset-lg-5 nopadding bottommargin-sm">
                                 <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_LAVADORA.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="catalogo icon"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/asko/asko_lavadora.jpg')}}" alt="asko_lavadora">
                </div>
            </div>

             <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/asko/asko_secadora.jpg')}}" alt="asko secadora">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                Secadora
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Esta secadora blanca de nuestra gama Logic presenta Butterfly Drying ™ que minimiza las arrugas de su ropa al permitir que el aire circule uniformemente a través de la ropa. 13 programas y varias opciones lo ayudarán a secar su ropa de manera efectiva en todo momento. El motor sin escobillas es confiable y silencioso con sus 65 dB (A).   
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                 <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_SECADORA.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}" alt="catalogo icon"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        


   
        </div>

</section>


<section class="container-fb" style="background-image: url('{{ URL::asset('img/asko/facebook.jpg')}}') ;">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-12 justify-content-center align-self-center">
                            <h2 class="light text-center">ASKO MÉXICO Y LATINOAMERICA</h2>
                        <div class="col-md-2 offset-md-5 col-6 offset-3 text-center nopadding topmargin-sm">
                            <a target="_blank" rel="nofollow" href="https://www.facebook.com/asko.russia/" class="btn btn-block  btn-cyan btn-facebook"><img src="{{ URL::asset('img/icono-btn/facebook.png')   }}" alt="facebook icon">SÍGUENOS</a>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
</section>

<section class="container-gral topmargin">
        @include('modulos.showrooms')



        <div class="margin-10">
            @include('modulos.form-generico')
        </div>
</section>





@endsection


@section('styles')
@endsection

@section('scripts')
@endsection
