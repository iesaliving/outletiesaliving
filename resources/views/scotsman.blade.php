@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')



<section id="hero-desktop">
    @include('hero.scotsman')
</section>
<section id="hero-mobile">
    @include('hero-mobile.scotsman')    
</section>


<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">

            <div class="col-12 text-center bottommargin-lg">
                <p>Cuando se trata de lujo, los detalles marcan la diferencia. Tu bebida favorita no es la excepción. La adición de el hielo ideal, hace que una bebida se mantenga más fría y el sabor dure y dure. No importa qué bebida prefiera, una cosa puede mejorarla: el hielo Scotsman, el ingrediente ideal.</p>
            </div>
            <div class="row col-padding catalogo topmargin-lg">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ URL::asset('img/scotsman/hielo.jpg')}}">
                </div>
                <div class="col-lg-6 d-flex col-xl-5">
                    <div class="justify-content-center align-self-center">
                        
                        <div class="topmargin-sm">
                            <h2>
                              Máquinas de Hielo
                            </h2>
                            
                        </div>

                        <div class="topmargin-sm">
                            <p>
                               El hielo debería mejorar el sabor de las bebidas, no diluirlo. Las máquinas de hielo Scotsman producen hielo que no cambia ni reduce los sabores, contrario a lo que hace el hielo de un refrigerador regular.
                            </p>
                            
                        </div>

                        <div class="topmargin-sm row nomargin">
                            <div class="col-lg-7 nopadding  bottommargin-sm">
                                <a class="btn btn-block btn-cyan solicitar-btn" href="javascript:void(0)"><img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                            </div>

                            <div class="col-lg-5 bottommargin-sm nopadding-mobile">
                                <a target="_blank" rel="nofollow" class="btn btn-block btn-cyan descubra-btn" href="http://www.scotsman.mx/"><img src="{{ URL::asset('img/icono-btn/web.png')   }}"><p>WEBSITE</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="hielo" class="row nomargin topmargin-lg">
                <div class="col-md-6 bottommargin">
                    <div class="col-7 offset-1">
                        <img src="{{ URL::asset('img/scotsman/hielo-gourmet.png')}}">
                    </div>
                    <div class="topmargin-sm">
                        <h3 class="light" style="margin-left: 40px">HIELO GOURMET</h3>
                        <ul>
                          <li><p>Forma: Pequeño vaso tipo "shot"</p></li>
                          <li><p>Ideal para: Bebidas y bebidas tipo gourmet</p></li>
                          <li><p>Ventajas:</p></li>
                        </ul>
                        <div class="offset-2">
                            <p><span>-</span>Se derrite lentamente</p>
                            <p><span>-</span>Ideal para la casa </p>
                            <p><span>-</span>Hielo duro en forma única</p>
                            <p><span>-</span>No tiene sabor ni olor</p>
                            <p><span>-</span>No diluye el sabor de las bebidas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bottommargin">
                    <div class="col-7 offset-1">
                        <img src="{{ URL::asset('img/scotsman/hielo-nugget.png')}}">
                    </div>
                    <div class="topmargin-sm">
                        <h3 class="light" style="margin-left: 40px">HIELO NUGGET</h3>
                        <ul>
                          <li><p>Forma: Pequeño cilindro</p></li>
                          <li><p>Ideal para: Bebidas de sabores / carbonatadas</p></li>
                          <li><p>Ventajas:</p></li>
                        </ul>
                        <div class="offset-2">
                            <p><span>-</span>Se derrite lentamente</p>
                            <p><span>-</span>Enfría las bebidas más rápido</p>
                            <p><span>-</span>Hielo Suave y masticable</p>
                            <p><span>-</span>Absorbe el sabor de la bebida</p>
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

<style type="text/css">
    #hielo ul {list-style: none}
   #hielo li::before {
        margin-right: 5px;
        content: "•"; 
        color: #01bb9c;
        font-size: 23px;
    }

    #hielo  p{
        display: inline-flex;
        margin-bottom: 5px!important;
        line-height: 1
    }
</style>
@endsection

@section('scripts')
@endsection
