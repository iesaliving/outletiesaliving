@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')



<section>
    @include('hero.subzero')
</section>


<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">

            <div class="col-12 text-center bottommargin-lg">
                <p>Mientras Sub-Zero exista, los alimentos resistirán el paso del tiempo, lo mismo que la belleza y el rendimiento de su cocina. Construido y probado con los más altos estándares, Sub-Zero es algo más que sólo un refrigerador. Se trata de un sistema de conservación de los alimentos, con más de 70 años de pensamiento innovador que lo avalan. Mientras exista Sub-Zero, la comida tendrá un delicioso futuro.</p>
            </div>
            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/subzero/subzero1.jpg')}}">
                </div>
                <div class="col-md-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                               Refrigeración de tamaño completo
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Desde hace casi 70 años, nada ha mantenido los alimentos más frescos durante más tiempo que un refrigerador Sub-Zero. Elija refrigeradores empotrados con el aspecto clásico del acero inoxidable o terminados en paneles personalizados. Las unidades integradas se funden con la decoración. También tenemos el poderoso PRO 48 - una pieza central imponente para cualquier cocina.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/sub-zero/full-size-refrigeration"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-md-6 d-flex col-xl-5 offset-xl-1">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-right">
                            <h2>
                                Refrigeración Bajo Cubierta
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-right">
                            <p>
                                Productos frescos en la isla de la cocina, bebidas frías en el gimnasio y hielo en abundancia cerca de la piscina. La refrigeración Sub-Zero está en todos lados. Ya sea que elija cajones integrados, centros de bebidas, refrigeradores bajo cubierta o máquinas de hielo, nuestras unidades encajan a la perfección, sin interrumpir el flujo de su casa y la forma en que vive.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5 nopaddingright">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/sub-zero/counter-refrigerator"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/subzero/subzero2.jpg')}}">
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/subzero/subzero3.jpg')}}">
                </div>
                <div class="col-md-6 d-flex col-xl-5">
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
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/sub-zero/wine-cooler"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


   
        </div>

</section>


<section style="width: 100%; height: 300px; background-image: url('{{ URL::asset('img/subzero/facebook.jpg')}}')">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-5 justify-content-center align-self-center">
                            <h2 class="light">SUB-ZERO WOLF MÉXICO Y LATINOAMÉRICA</h2>
                        <div class="col-6 nopadding topmargin-sm">
                            <a target="_blank" rel="nofllow" href="https://www.facebook.com/subzerowolf/" class="btn btn-block btn-cyan btn-facebook"><img src="{{ URL::asset('img/icono-btn/facebook.png')   }}">SÍGUENOS</a>
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
