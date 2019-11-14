@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')



<section>
    @include('hero.cove')
</section>

<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">
            <div class="col-12 text-center bottommargin-lg">
                <p>
                    Las lavavajillas Cove proviene de los pioneros en conservación de alimentos Sub-Zero y cocción a precisión Wolf. Los electrodomésticos Cove están diseñados para adaptarse a los platos que más limpia – con ciclos que garantizan resultados impecables y un funcionamiento silencioso. Diseñado cuidadosamente con interiores ajustables, acabados exteriores personalizables y la mejor garantía y servicio disponibles. Cove es simplemente una forma más inteligente de lavar.
                </p>
            </div>
            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-md-6 col-padding-sm">
                    <img src="{{ URL::asset('img/cove/vajilla.jpg')}}">
                </div>
                <div class="col-md-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                                Una forma más inteligente de lavar
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                                ¿Una mejor manera de lavar? Desde interiores completamente flexibles hasta un funcionamiento casi silencioso, Cove fue rediseñado, desde cero, para garantizar platos limpios y secos impecables con cada carga, en todo momento.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-md-7 nopadding">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-md-5">
                                <a class="btn btn-block btn-cyan descubra-btn" href="https://mx.subzero-wolf.com/es/cove/dishwashers" target="_blank" rel="nofollow"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>

        <div class="margin-10 row">

            <div class="col-12 text-center bottommargin">
                <h2 class="light">SUBSTANCIA MÁS ALLÁ DE ESTILO</h2>
            </div>
            <div class="bottommargin-sm col-md-4">
                <div class="col-5 nopadding">
                    <img src="{{ URL::asset('img/cove/limpie.png')   }}">
                </div>
                <div class="col-12 nopadding topmargin-sm">
                    <p><b>LIMPIE CON CONFIANZA</b></p>
                    <p class="light">Con aspersores de agua colocados estratégicamente en todo el lavavajillas, los platos se vuelven más limpios. No es necesario lavar previamente, volver a lavar ni quitar las manchas.</p>
                </div>
                
            </div>

            <div class="bottommargin-sm col-md-4">
                <div class="col-5 nopadding">
                    <img src="{{ URL::asset('img/cove/personalice.png')   }}">
                </div>
                <div class="col-12 nopadding topmargin-sm">
                    <p><b>PERSONALICE SU LIMPIEZA</b></p>
                    <p class="light">Los modos de lavado y secado preprogramados y personalizados y tres brazos rociadores separados limpian expertamente cada plato, desde porcelana fina hasta sartenes de alta resistencia.</p>
                </div>
                
            </div>

            <div class="bottommargin-sm col-md-4">
                <div class="col-5 nopadding">
                    <img src="{{ URL::asset('img/cove/silencio.png')   }}">
                </div>
                <div class="col-12 nopadding topmargin-sm">
                    <p><b>LIMPIEZA EN SILENCIO</b></p>
                    <p class="light">Una operación casi silenciosa permite que la conversación de la cena siga fluyendo mientras se limpian los platos.</p>
                </div>
                
            </div>

            <div class="bottommargin-sm col-md-4 offset-md-1">
                <div class="col-5 nopadding">
                    <img src="{{ URL::asset('img/cove/ajuste.png')   }}">
                </div>
                <div class="col-12 nopadding topmargin-sm">
                    <p><b>SE AJUSTA A CUALQUIER (Y CADA) PLATO</b></p>
                    <p class="light">Con alturas y dientes ajustables, y dos opciones para limpiar los cubiertos (tanto la rejilla como la canasta), no hay utensilios, herramientas o sartenes que Cove no pueda conquistar.</p>
                </div>
                
            </div>

            <div class="bottommargin-sm col-md-4 offset-md-2">
                <div class="col-5 nopadding">
                    <img src="{{ URL::asset('img/cove/asegura.png')   }}">
                </div>
                <div class="col-12 nopadding topmargin-sm">
                    <p><b>ASEGURA DÉCADAS DE FIABILIDAD</b></p>
                    <p class="light">Los electrodomésticos Cove se someten a rigurosas pruebas de resistencia para que funcionen durante más de veinte años de uso diario y están respaldados por la garantía más sólida de la industria.</p>
                </div>
                
            </div>

        </div>

</section>

<section class="container-fb" style="background-image: url('{{ URL::asset('img/cove/facebook.jpg')}}')">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-5 justify-content-center align-self-center">
                            <h2 class="light">SUB-ZERO WOLF MÉXICO Y LATINOAMÉRICA</h2>
                        <div class="col-6 nopadding topmargin-sm">
                            <a target="_blank" rel="nofollow" href="https://www.facebook.com/subzerowolf/" class="btn btn-block  btn-cyan btn-facebook"><img src="{{ URL::asset('img/icono-btn/facebook.png')   }}">SÍGUENOS</a>

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
