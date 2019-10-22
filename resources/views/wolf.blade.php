@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')


<section class="container-gral" style="padding-top: 200px" >
    
        <div id="container-catalogo" class="margin-10">
            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6">
                    sdfsdf
                </div>
                <div class="col-md-6">
                    <div class="topmargin-sm">
                        <h2>
                            DESCUBRA NUESTRO LEGENDARIOS PRODUCTOS
                        </h2>
                        
                    </div>

                    <div class="topmargin-sm">
                        <p>
                            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                        </p>
                        
                    </div>

                    <div class="topmargin-sm row nomargin">
                        <div class="col-md-7 nopadding">
                            <a class="btn btn-block btn-cyan" href="">SOLICITAR CATÁLOGO</a>
                        </div>

                        <div class="col-md-5">
                            <a class="btn btn-block btn-cyan" href="">WEB SITE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6">
                    <div class="topmargin-sm text-right">
                        <h2>
                            DESCUBRA NUESTRO LEGENDARIOS PRODUCTOS
                        </h2>
                        
                    </div>

                    <div class="topmargin-sm text-right">
                        <p>
                            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                        </p>
                        
                    </div>

                    <div class="topmargin-sm row nomargin">
                        <div class="col-md-7 nopadding">
                            <a class="btn btn-block btn-cyan" href="">SOLICITAR CATÁLOGO</a>
                        </div>

                        <div class="col-md-5">
                            <a class="btn btn-block btn-cyan" href="">WEB SITE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    sdfsdf
                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-md-6">
                    sdfsdf
                </div>
                <div class="col-md-6">
                    <div class="topmargin-sm">
                        <h2>
                            DESCUBRA NUESTRO LEGENDARIOS PRODUCTOS
                        </h2>
                        
                    </div>

                    <div class="topmargin-sm">
                        <p>
                            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                        </p>
                        
                    </div>

                    <div class="topmargin-sm row nomargin">
                        <div class="col-md-7 nopadding">
                            <a class="btn btn-block btn-cyan" href="">SOLICITAR CATÁLOGO</a>
                        </div>

                        <div class="col-md-5">
                            <a class="btn btn-block btn-cyan" href="">WEB SITE</a>
                        </div>
                    </div>
                </div>
            </div>


   
        </div>

</section>


<section style="width: 100%; height: 300px; background-color: gray">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-5 offset-7 justify-content-center align-self-center">
                            <h2>SUB-ZERO WOLF MÉXICO Y LATINOAMERICA</h2>
                        <div class="col-6 offset-6 nopadding topmargin-sm">
                            <a href="" class="btn btn-block btn-cyan">SIGUENOS</a>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
</section>

<section class="container-gral topmargin">
        @include('modulos.showrooms')

        

        <div id="modulos-faq" class="margin-10">
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
        </div>


        <div class="margin-10">
            @include('modulos.form-generico')
        </div>
</section>





@endsection


@section('styles')
@endsection

@section('scripts')
@endsection
