@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')




<section id="hero-desktop">
    @include('hero.dexa')
</section>
<section id="hero-mobile">
    @include('hero-mobile.dexa')    
</section>



<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">
            <div class="col-12 text-center bottommargin-lg">
                    <h2>CREAMOS LO EXTRAORDINARIO</h2>

                    <p>
                    Lo mejor de Italia en tu cocina.
                    <br>
                    <br>
                    Una marca propia de IESA, cuenta con productos de calidad con diseño italiano. Una Marca joven, audaz y divertida, aquí creamos nuestras experiencias rompiendo las reglas y reinventando lo cotidiano
                    </p>
            </div>
            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/dexa/estufas.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                ESTUFAS
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Las estufas DEXA te ofrecen un gran diseño y personalidad tomadas de la mano con un sistema de cocción y seguridad.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm nopadding-mobile">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="http://dexa.mx/estufas/"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 d-flex col-xl-5  offset-xl-1 order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-lg-right text-left">
                            <h2>
                                PARRILLAS
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                                Las parrillas de DEXA cuentan con materiales de alta calidad y con una variedad de tamaños, también cuentan con diferentes niveles de cocción y con un gran diseño italiano.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm nopadding-mobile">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                            <div class="col-lg-5 bottommargin-sm nopadding-mobile">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="http://dexa.mx/parrillas/"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/dexa/parrillas.jpg')}}">
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/dexa/hornos.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                HORNOS
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                La gama de hornos DEXA ofrece una gran cantidad de prestaciones, sin prescindir de un diseño moderno en todos sus modelos. Sus características brindan seguridad, precisión y facilidad de uso. Para cocinar sus platillos favoritos, con resultados asombrosos.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm nopadding-mobile">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="http://dexa.mx/hornos/"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 d-flex col-xl-5  offset-xl-1 order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-lg-right text-left">
                            <h2>
                               CAMPANAS
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                                Las campanas DEXA están dotadas con una gran capacidad de extracción y algunos modelos con re-circulación del aire. Proporcionando ambientes confortables en tu cocina, evitando olores.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm nopadding-mobile">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                            <div class="col-lg-5 bottommargin-sm nopadding-mobile">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="http://dexa.mx/campanas/"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/dexa/campanas.jpg')}}">
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/dexa/lavavajillas.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                lavavajillas
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                ¡Con la lavavajillas DEXA no tendrás más platos sucios! Contamos con tres modelos que facilitarán tu vida y las labores domésticas.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm nopadding-mobile">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="http://dexa.mx/lavavajillas/"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
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
                                TARJAS Y LLAVES
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                                DEXA ofrece una variada selección de llaves y tarjas para cocina cuidadosamente diseñadas para brindar la mejor combinación posible entre estilo, calidad y precio
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-12 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>
                            <div class="col-md-5 bottommargin-sm nopadding-mobile">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="http://dexa.mx/llaves/"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE(LLAVES)</p></a>
                            </div>
                            <div class="col-md-5 offset-md-2 bottommargin-sm nopadding-mobile">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="http://dexa.mx/tarjas/"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE(TARJAS)</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/dexa/llaves.jpg')}}">
                </div>
            </div>

   
        </div>

</section>


<section class="container-fb" style="background-image: url('{{ URL::asset('img/dexa/facebook.jpg')}}') ;">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-md-12 col-12 justify-content-center align-self-center">
                            <h2 style="color: #fff" class="light text-center">DEXA</h2>
                        <div class="col-lg-2 offset-lg-5 col-md-4 offset-md-4 col-6 offset-3 text-center nopadding topmargin-sm">
                            <a target="_blank" rel="nofollow" href="https://www.facebook.com/DEXA.MX/" class="btn btn-block  btn-cyan btn-facebook"><img src="{{ URL::asset('img/icono-btn/facebook.png')   }}">SIGUENOS</a>
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
