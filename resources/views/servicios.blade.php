@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')




<section style="position: relative;">
  <img src="{{ URL::asset('img/servicios/hero.jpg')}}">
  <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3 row" style="position: absolute;bottom: 30px;">
    <div class="col-xl-8 col-md-7">
        <a class="btn btn-block btn-cyan descubra-btn" href=""><img src="{{ URL::asset('img/icono-btn/agenda.png')   }}"><p>AGENDA TU VISITA</p></a>
    </div>
    <div class="col-xl-4 col-md-5">
        <a class="btn btn-block btn-cyan descubra-btn" href=" tel:811-803-6339"><p>811-803-6339</p></a>        
    </div>
      
  </div>
</section>

<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">
            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6 col-padding-sm">
                  <img src="{{ URL::asset('img/servicios/servicio.jpg')}}">
                </div>
                <div class="col-md-6">
                    <div class="topmargin-sm">
                        <h2>
                           CONCIERGE DE SERVICIO TÉCNICO
                        </h2>
                        
                    </div>
                    
                    <div class="topmargin-sm">
                        <p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px"> 
                            Si tiene alguna pregunta sobre nuestro servicio, llámenos al 01-800-400 IESA (4372)
                        </p>

                        <p class="nomargin"><i style="margin-right: 15px;" class="fa fa-map-marker"></i>Lorem ipsum </p>

                        <p class="nomargin"><i style="margin-right: 15px;" class="fa fa-map-marker"></i>Lorem ipsum </p>
                        
                    </div>

                    <div class="row nomargin topmargin">
                        <div style="width: 20%; padding: 0 1vw">
                            <img src="{{ URL::asset('img/logo-header.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 1vw">
                            <img src="{{ URL::asset('img/logo-header.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 1vw">
                            <img src="{{ URL::asset('img/logo-header.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 1vw">
                            <img src="{{ URL::asset('img/logo-header.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 1vw">
                            <img src="{{ URL::asset('img/logo-header.png')   }}">
                        </div>
                    </div>

                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                
                <div class="col-md-6">
                    <div class="col-12 nopadding text-right">
                        <h2>
                            DESCUBRA NUESTRO LEGENDARIOS PRODUCTOS
                        </h2>
                        
                    </div>
                    <div class="row  topmargin-sm catalogo-right">
                       <div class="topmargin-sm">
                        <p class="nomargin">Lorem Ipsum<i style="margin-left: 15px;" class="fa fa-map-marker"></i></p>

                        <p class="nomargin">Lorem Ipsum<i style="margin-left: 15px;" class="fa fa-map-marker"></i></p>

                        <p class="nomargin">Lorem Ipsum<i style="margin-left: 15px;" class="fa fa-map-marker"></i></p>
                        
                        </div>
                    </div>
                    <div class="row topmargin catalogo-right col-12 nopadding">
                        <div style="width: 20%; padding: 0 1vw">
                            <img src="{{ URL::asset('img/logo-header.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 1vw">
                            <img src="{{ URL::asset('img/logo-header.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 1vw">
                            <img src="{{ URL::asset('img/logo-header.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 1vw">
                            <img src="{{ URL::asset('img/logo-header.png')   }}">
                        </div>
                        <div style="width: 20%; padding: 0 0 0 1vw">
                            <img src="{{ URL::asset('img/logo-header.png')   }}">
                        </div>
                        
                    </div>
                    <div class="col-12 nopadding text-right topmargin-sm">
                        <p>
                            Lorem ipzum
                        </p>
                        
                    </div>

                </div>
                <div class="col-md-6 col-padding-sm">
                
                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                
                <div class="col-md-6 h-100 d-flex">
                    <div class="justify-content-center align-self-center">
                        <div class="col-12 nopadding text-right">
                            <h2>
                                DESCUBRA NUESTRO LEGENDARIOS PRODUCTOS
                            </h2>
                            
                        </div>
                        <div class="row  topmargin-sm catalogo-right">
                           <div class="topmargin-sm">
                            <p class="nomargin">Lorem Ipsum</p>

                            <p class="nomargin">Lorem Ipsum</p>

                            <p class="nomargin">Lorem Ipsum</p>
                            
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-padding-sm">
                
                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                
                <div class="col-md-6 col-padding-sm">
                
                </div>
                <div class="col-md-6 h-100 d-flex">
                    <div class="justify-content-center align-self-center">
                        <div class="col-12 nopadding text-left">
                            <h2>
                                DESCUBRA NUESTRO LEGENDARIOS PRODUCTOS
                            </h2>
                            
                        </div>
                        <div class="row col-12  topmargin-sm">
                           <div class="topmargin-sm">
                            <p class="nomargin">Lorem Ipsum</p>

                            <p class="nomargin">Lorem Ipsum</p>

                            <p class="nomargin">Lorem Ipsum</p>
                            
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>

        <div id="conoce" class="margin-10">
            <div class="col-12 text-center">
                <h2>CONOCE NUESTROS CAS</h2>
                <p>Localize el Centro Autorizado de Servicio más cerca de usted.</p>
            </div>
        </div>



        @include('modulos.showrooms')


</section>
@endsection


@section('styles')
@endsection

@section('scripts')
@endsection
