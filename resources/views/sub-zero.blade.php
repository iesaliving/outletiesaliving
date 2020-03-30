@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Sub Zero')
@section('content')



<section id="hero-desktop">
    @include('hero.subzero')
</section>
<section id="hero-mobile">
    @include('hero-mobile.subzero')    
</section>


<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">

            <div id="check"  class="col-12 text-center bottommargin-lg">
                <p>Mientras Sub-Zero exista, los alimentos resistirán el paso del tiempo, lo mismo que la belleza y el rendimiento de su cocina. Construido y probado con los más altos estándares, Sub-Zero es algo más que sólo un refrigerador. Se trata de un sistema de conservación de los alimentos, con más de 70 años de pensamiento innovador que lo avalan. Mientras exista Sub-Zero, la comida tendrá un delicioso futuro.</p>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ asset('img/subzero/subzero1.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                               REFRIGERACIÓN
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Desde hace casi 70 años, nada ha mantenido los alimentos más frescos durante más tiempo que un refrigerador Sub-Zero. Elija refrigeradores empotrados con el aspecto clásico del acero inoxidable o terminados en paneles personalizados. Las unidades integradas se funden con la decoración. También tenemos el poderoso PRO 48 - una pieza central imponente para cualquier cocina.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                               <!--  <a target="_blank" class="btn btn-block btn-cyan solicitar-btn" href="{{ asset('catalogo/SubZeroWolf.pdf')   }}"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a> -->

                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Sub-Zero_REFRIGERACION_Download.htm" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>

                                
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
                                Refrigeración Bajo Cubierta
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                                Productos frescos en la isla de la cocina, bebidas frías en el gimnasio y hielo en abundancia cerca de la piscina. La refrigeración Sub-Zero está en todos lados. Ya sea que elija cajones integrados, centros de bebidas, refrigeradores bajo cubierta o máquinas de hielo, nuestras unidades encajan a la perfección, sin interrumpir el flujo de su casa y la forma en que vive.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 offset-lg-5 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_SUB-ZERO_REFRI_BAJO_CUBIERTA.htm" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ asset('img/subzero/subzero2.jpg')}}">
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ asset('img/subzero/subzero3.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        

                        <div class="topmargin-sm">
                            <h2>
                                CONSERVADORES DE VINO
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Un mejor almacenamiento de la botella significa disfrutarlo más en la copa. Las unidades de conservación de vino Sub-Zero actúan no sólo como refrigeradores, sino como guardianes contra el calor, la humedad, la vibración y la luz, los cuatro enemigos que pueden robar al vino su complejidad y carácter. Disponible en tres grosores, de 18” 24” 30”, con 46 a 147 botellas de capacidad, que le permiten llevar los placeres del vino a cualquier habitación de la casa
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Sub-Zero_CONSERVADORES_DE_VINO.htm" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


   
        </div>

</section>


<section style="width: 100%; height: 300px; background-image: url('{{ asset('img/subzero/facebook.jpg')}}')">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-md-5 col-12 justify-content-center align-self-center">
                            <h2 class="light">SUB-ZERO WOLF MÉXICO Y LATINOAMERICA</h2>
                        <div class="col-md-6 col-7 nopadding topmargin-sm">
                            <a target="_blank" rel="nofllow" href="https://www.facebook.com/subzerowolf/" class="btn btn-block btn-cyan btn-facebook"><img src="{{ asset('img/icono-btn/facebook.png')   }}">SÍGUENOS</a>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
</section>

<section class="container-gral topmargin">
        @include('modulos.showrooms')

        

        <!-- div id="modulos-faq" class="margin-10">
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
