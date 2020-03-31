@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Plum Wine')
@section('content')

<section id="hero-desktop">
    @include('hero.plum-wine')
</section>
<section id="hero-mobile">
    @include('hero-mobile.plum-wine')
</section>




<section class="container-gral">

        <div id="container-catalogo" class="margin-10">
            <div class="col-md-8 mx-auto text-center bottommargin-lg">
                <p>
                    Plum es el primer electrodoméstico totalmente automático que conserva y enfría perfectamente el vino para que puedas disfrutarlo una copa a la vez.
                </p>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/plum-wine/relajese.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm">
                            <h2>
                               Relájese con una copa de vino al final del día
                            </h2>

                        </div>

                        <div class="topmargin-sm">
                            <p>
                               Después de un largo día, disfrute de una copa de vino blanco o tinto sin desperdiciar ni una gota en el desagüe. Plum le permite poner dos botellas y servirse tanto como usted desee.

                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Plum_Wine_Download.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>DESCARGA CATÁLOGO PLUM</p></a>
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
                                La temperatura importa
                            </h2>

                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                              Usted no aceptaría una taza de café tibia o un filete frío. El vino sabe mejor cuando está en la temperatura correcta. Plum maximiza el sabor de su vino al servirlo a la temperatura ideal.
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 offset-lg-5 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Plum_Wine_Download.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>DESCARGA CATÁLOGO PLUM</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/plum-wine/temperatura.jpg')}}">
                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-padding-sm col-xl-5 offset-xl-1">
                    <img src="{{ URL::asset('img/plum-wine/pausa.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-lg-5">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm">
                            <h2>
                                Una pausa en el tiempo, su botella de vino esperará su regreso
                            </h2>

                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Ya sea que esté viajando por trabajo o solo por el fin de semana, disfrute de la copa perfecta antes de partir y disfrute del resto de la botella cuando regrese.
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Plum_Wine_Download.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>DESCARGA CATÁLOGO PLUM</p></a>
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
                                Usted merece la <br>botella "especial" 
                            </h2>

                        </div>

                        <div class="topmargin-sm text-lg-right text-left">
                            <p>
                              Todos tenemos botellas esperando por una ocasión especial que nunca llega. Con Plum, usted podrá disfrutar ese atesorado Bordeaux durante algunos días o incluso semanas
                            </p>

                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 offset-lg-5 nopadding bottommargin-sm">
                                <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Plum_Wine_Download.htm" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>DESCARGA CATÁLOGO PLUM</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                    <img src="{{ URL::asset('img/plum-wine/botella.jpg')}}">
                </div>
            </div>
        </div>

        <div class="margin-10 row">

            <div class="bottommargin-sm col-md-4">
                <div class="col-5 nopadding">
                    <img src="{{ URL::asset('img/plum-wine/agujas.png')   }}">
                </div>
                <div class="col-12 nopadding topmargin-sm">
                    <p class="light">Agujas motorizadas automáticamente perforan la tapa o corcho, preservando su vino con gas Argón. Un recipiente de argón recargable integrado conserva hasta 150 botellas.</p>
                </div>
                
            </div>

            <div class="bottommargin-sm col-md-4">
                <div class="col-5 nopadding">
                    <img src="{{ URL::asset('img/plum-wine/botella.png')   }}">
                </div>
                <div class="col-12 nopadding topmargin-sm">
                    <p class="light">Plum trabaja con cualquier botella estándar de 750ml, de cualquier tipo de tapa o corcho, incluyendo corcho natural, corcho artificial o tapones de metal.</p>
                </div>
                
            </div>

            <div class="bottommargin-sm col-md-4">
                <div class="col-5 nopadding">
                    <img src="{{ URL::asset('img/plum-wine/descorche.png')   }}">
                </div>
                <div class="col-12 nopadding topmargin-sm">
                    <p class="light">Las dos cámaras de enfriamiento de Plum están configuradas automáticamente para servir cada variedad de vino a la temperatura perfecta, por lo que puede tener Chardonnay a 10 grados y un Cabernet a 18 grados sin ningún problema.</p>
                </div>
                
            </div>

            <div class="bottommargin-sm col-md-4 offset-md-1">
                <div class="col-5 nopadding">
                    <img src="{{ URL::asset('img/plum-wine/botellas.png')   }}">
                </div>
                <div class="col-12 nopadding topmargin-sm">
                    <p class="light">Plum automáticamente identifica el año de producción, la variedad, la región, el lagar y el vino, creando una conexión directa con el arte de degustar sin salir de su hogar.</p>
                </div>
                
            </div>

            <div class="bottommargin-sm col-md-4 offset-md-2">
                <div class="col-5 nopadding">
                    <img src="{{ URL::asset('img/plum-wine/tactil.png')   }}">
                </div>
                <div class="col-12 nopadding topmargin-sm">
                    <p class="light">La pantalla táctil de 7 pulgadas a full color de Plum se enciende cuando usted se acerca, mostrándole los diferentes vinos y permitiéndole servirse una copa o solo degustar el vino.</p>
                </div>
                
            </div>

        </div>

</section>

<section style="width: 100%; height: 300px; background-image: url('{{ URL::asset('img/plum-wine/facebook.jpg')}}')">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-md-5 col-12 justify-content-center align-self-center">
                            <h2 class="light">PLUM</h2>
                        <div class="col-md-6 col-7  nopadding topmargin-sm">
                            <a target="_blank" rel="nofollow" href="https://www.facebook.com/subzerowolf/" class="btn btn-block btn-cyan btn-facebook"><img src="{{ URL::asset('img/icono-btn/facebook.png')   }}">SÍGUENOS</a>
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
