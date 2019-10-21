@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')


<section id="container-gral" style="padding-top: 200px" >
    
        <div id="container-catalogo" class="margin-10">

            <div class="col-12 text-center">
                <h2>SU FUTURA COCINA EMPIEZA AQUÍ</h2>
                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>

            </div>
            <div class="row col-padding catalogo topmargin" style="height: 500px">
                <div class="col-md-6">
                    sdfsdf
                </div>
                <div class="col-md-6 h-100 d-flex">
                    <div class="justify-content-center align-self-center">
                        <h2>NUESTRA FILOSOFÍA</h2>

                        <p>lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum</p>
                        <p>lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum</p>
                        
                    </div>

                </div>
            </div>
        </div>


        @include('modulos.showrooms')


        <div id="marcas" class="margin-10">
            <div class="owl-carousel owl-theme">
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
                <div class="item">
                    <div style="width: 100%; height: 50px; background-color: red">
                        
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
                nav: true,
                 navText: ["<i class='fa fa-chevron-left fa-2x'></i>","<i class='fa fa-chevron-right fa-2x'></i>"],
                margin: 10,
                responsive: {
                  0: {
                    items: 1,
                  },
                  600: {
                    items: 3,
                  },
                  1000: {
                    items: 4,
                    margin: 20
                  }
                }
              })
            }) 
</script>
@endsection
