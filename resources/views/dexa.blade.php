@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')





<section>
    @include('hero.dexa')
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
            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/dexa/estufas.jpg')}}">
                </div>
                <div class="col-md-6 d-flex">
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
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href=""><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5">
                                <a class="btn btn-block btn-cyan descubra-btn" href=""><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-md-6 d-flex">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-right">
                            <h2>
                                PARRILLAS
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-right">
                            <p>
                                Las parrillas de DEXA cuentan con materiales de alta calidad y con una variedad de tamaños, también cuentan con diferentes niveles de cocción y con un gran diseño italiano.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href=""><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5">
                                <a class="btn btn-block btn-cyan descubra-btn" href=""><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/dexa/parrillas.jpg')}}">
                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/dexa/hornos.jpg')}}">
                </div>
                <div class="col-md-6 d-flex">
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
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href=""><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5">
                                <a class="btn btn-block btn-cyan descubra-btn" href=""><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-md-6 d-flex">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-right">
                            <h2>
                               CAMPANAS
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-right">
                            <p>
                                Las campanas DEXA están dotadas con una gran capacidad de extracción y algunos modelos con re-circulación del aire. Proporcionando ambientes confortables en tu cocina, evitando olores.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href=""><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5">
                                <a class="btn btn-block btn-cyan descubra-btn" href=""><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/dexa/campanas.jpg')}}">
                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/dexa/lavavajillas.jpg')}}">
                </div>
                <div class="col-md-6 d-flex">
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
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href=""><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5">
                                <a class="btn btn-block btn-cyan descubra-btn" href=""><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-md-6 d-flex">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-right">
                            <h2>
                                TARJAS Y LLAVES
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-right">
                            <p>
                                DEXA ofrece una variada selección de llaves y tarjas para cocina cuidadosamente diseñadas para brindar la mejor combinación posible entre estilo, calidad y precio
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href=""><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5">
                                <a class="btn btn-block btn-cyan descubra-btn" href=""><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/dexa/llaves.jpg')}}">
                </div>
            </div>

   
        </div>

</section>


<section class="container-fb" style="background-image: url('{{ URL::asset('img/dexa/facebook.jpg')}}') ;">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-12 justify-content-center align-self-center">
                            <h2 style="color: #fff" class="light text-center">DEXA</h2>
                        <div class="col-md-2 offset-md-5 text-center nopadding topmargin-sm">
                            <a href="" class="btn btn-block  btn-cyan">SIGUENOS</a>
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
