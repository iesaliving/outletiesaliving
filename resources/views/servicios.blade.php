@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')


<section id="container-gral" style="padding-top: 200px" >
    


        <div class="margin-10">
            <div class="owl-carousel owl-theme col-md-10 offset-md-1">
                <div class="item">
                    <div style="width: 100%; height: 50px; background-color: red">
                        
                    </div>

                </div>
                <div class="item">
                    <div style="width: 100%; height: 50px; background-color: red">
                        
                    </div>
                  
                </div>
                <div class="item">
                    <div style="width: 100%; height: 50px; background-color: red">
                        
                    </div>
                  
                </div>
                <div class="item">
                    <div style="width: 100%; height: 50px; background-color: red">
                        
                    </div>
                  
                </div>
          </div>
      </div>

        <div id="lugar" class="margin-10">
            <div class="col-md-10 offset-md-1 text-center bottommargin">
                
                <h2>UN LUGAR PARA COMENZAR, EXPERIMENTAR Y DAR VIDA A LA VISIÓN DE SU COCINA</h2>
                <p>lorem ipsum lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>

            </div>

            <div class="col-md-12 row nomargin">
                <div class="col-lg-4 col-md-6 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ URL::asset('img/logo-header.png')}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>Lorem Ipsum</h5>
                        <p> korem ipsum korem ipsum   korem ipsum korem ipsum  korem ipsum korem </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ URL::asset('img/logo-header.png')}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>Lorem Ipsum</h5>
                        <p> korem ipsum korem ipsum   korem ipsum korem ipsum  korem ipsum korem </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ URL::asset('img/logo-header.png')}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>Lorem Ipsum</h5>
                        <p> korem ipsum korem ipsum   korem ipsum korem ipsum  korem ipsum korem </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ URL::asset('img/logo-header.png')}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>Lorem Ipsum</h5>
                        <p> korem ipsum korem ipsum   korem ipsum korem ipsum  korem ipsum korem </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ URL::asset('img/logo-header.png')}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>Lorem Ipsum</h5>
                        <p> korem ipsum korem ipsum   korem ipsum korem ipsum  korem ipsum korem </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 bottommargin">
                    <div class="col-md-10 offset-md-1 bottommargin-sm" >
                        <img src="{{ URL::asset('img/logo-header.png')}}">
                    </div>
                    <div class="col-md-12 offset-md-0 text-center" >
                        <h5>Lorem Ipsum</h5>
                        <p> korem ipsum korem ipsum   korem ipsum korem ipsum  korem ipsum korem </p>
                    </div>
                </div>
            </div>
            <div class="offset-xl-5 col-xl-2 offset-lg-4 col-lg-4">
                <a class="btn btn-cyan btn-block" href="">SOLICITAR CITA</a>
                
            </div>
        </div>

        <div id="formulario" class="margin-10">

            <div class="text-center col-12">
                <h2>AGENTE TU CITA</h2>
            </div>

            <div class="col-12 nopadding">
                <form>
                    <div class="row nomargin">
                        <div class="form-group  col-12">
                            <input type="text" class="form-control form-custom" placeholder="NOMBRE COMPLETO">
                        </div> 
                        <div class="form-group  col-md-6">
                            <input type="text" class="form-control form-custom" placeholder="TELÉFONO">
                        </div> 
                        <div class="form-group  col-md-6">
                            <input type="text" class="form-control form-custom" placeholder="EMAIL">
                        </div> 
                        <div class="form-group  col-md-6">
                            <select class="form-control form-custom">
                                <option>SELECCIONAR SHOWROOM</option>
                            </select> 
                        </div> 
                        <div class="form-group  col-md-6">
                            <input type="text" class="form-control form-custom" placeholder="CALENDARIO DE VISITAS">
                        </div> 

                        <div class="form-group  col-lg-2 offset-lg-5 text-center topmargin-sm">
                            <a class="btn btn-cyan btn-block" href=""><i style="margin-right: 15px" class="fa fa-paper-plane fa-2x"></i> ENVIAR</a>
                        </div>    
                    </div>
                </form>
            </div>
        </div>

        <div id="container-catalogo" class="margin-10">
            <div class="row col-padding catalogo topmargin">
                <div class="col-md-7">
                    sdfsdf
                </div>
                <div class="col-md-5 col-padding" >
                    <h2>COOKING DEMO</h2>
                    <p>Lorem Ipsum</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control form-custom" placeholder="NOMBRE COMPLETO">
                        </div> 
                        <div class="form-group">
                            <input type="text" class="form-control form-custom" placeholder="NOMBRE COMPLETO">
                        </div> 
                        <div class="form-group">
                            <input type="text" class="form-control form-custom" placeholder="NOMBRE COMPLETO">
                        </div> 
                        <div class="form-group">
                            <input type="text" class="form-control form-custom" placeholder="NOMBRE COMPLETO">
                        </div> 
                        
                    </form>
                    

          
                    <div class="col-md-12 nopadding">
                        <a class="btn btn-block btn-cyan" href=""><i style="margin-right: 15px" class="fa fa-paper-plane fa-2x"></i> ENVIAR</a>
                    </div>

                </div>
            </div>
        </div>

</section>
@endsection


@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

@endsection

 

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>

<script type="text/javascript">
$(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
            
                 navText: ["<i class='fa fa-chevron-left fa-2x'></i>","<i class='fa fa-chevron-right fa-2x'></i>"],
                margin: 10,
                responsive: {
                  0: {
                    items: 1,
                  },
                  600: {
                    items: 1,
                  },
                  1000: {
                    items: 1,
                  }
                }
              })
            }) 
</script>
@endsection
