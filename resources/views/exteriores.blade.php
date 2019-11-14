@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')





<section>
    @include('hero.exteriores')
</section>



<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">
            <div class="col-12 text-center bottommargin-lg">
                <p>
                    Todo sabe mejor al aire libre. Sin embargo, el control del calor en la mayoría de los asadores puede convertir el cocinar en exteriores en una tarea imprecisa. Los asadores Wolf cambiar todo eso. Le dan el mismo tipo de control de precisión y facilidad de uso que sus contrapartes de interiores, las estufas, hornos y parrillas Wolf. Imagínese las jugosas posibilidades. 
                </p>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/exteriores/asadores.jpg')}}">
                </div>
                <div class="col-md-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                               Asadores
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                               Con funciones fáciles de usar. Controles de temperatura de precisión. Y resultados jugosos, y tiernos, los asadores para exterior de Wolf son fabricados en acero inoxidable y soldados con precisión para que no se oxiden o guarden agua. Cada uno de los cuatro modelos de asadores vienen en gas natural o LP, y se puede integrar a su espacio al aire libre.
                               <br><br>
                                Encuentre carritos opcionales disponibles para los modelos de 30", 36" y 42"

                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5">
                                <a class="btn btn-block btn-cyan descubra-btn" href=""><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-md-6 d-flex col-xl-5  offset-xl-1">
                    <div class="justify-content-center align-self-center">

                        <div class="topmargin-sm text-right">
                            <h2>
                                Refrigeración al aire libre
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm text-right">
                            <p>
                                Nuestros productos para el exterior - entre ellos un refrigerador bajo cubierta de 24” y una máquina de hielos de 15” - están diseñados para temperaturas arriba de 110°F (43 °C) y revestidos con acero inoxidable de alto calibre que soporta el tipo de elementos que corroen materiales menos resistentes.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5 nopaddingright">
                                <a class="btn btn-block btn-cyan descubra-btn" href=""><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/exteriores/refrigeracion.jpg')}}">
                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 col-padding-sm col-xl-5 offset-xl-1">
                    <img src="{{ URL::asset('img/exteriores/calentadores.jpg')}}">
                </div>
                <div class="col-md-6 d-flex col-lg-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                Versátil cajón calentador al aire libre
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                Con el cajón calentador para exterior de Wolf , los platillos que termine en diferentes momentos se mantienen calientes, húmedos y listos para ser servidos a la hora que desee. ¿Se toma el fin de semana para no cocinar? Use el cajón para mantener las toallas calientes en la piscina.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5">
                                <a class="btn btn-block btn-cyan descubra-btn" href=""><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

   
        </div>

</section>


<section style="width: 100%; height: 300px; background-image: url('{{ URL::asset('img/exteriores/facebook.jpg')}}')">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-5 justify-content-center align-self-center">
                            <h2 class="light">SUB-ZERO WOLF MÉXICO Y LATINOAMÉRICA</h2>
                        <div class="col-6 nopadding topmargin-sm">
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
