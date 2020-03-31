@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Gracias')
@section('content')



<section style="padding:25vw 0 ;background-image: url({{ URL::asset('img/sobre.png')}});">
  <div class="col-md-12 text-center">
    <h2>LAMENTAMOS QUE QUIERAS</h2>
    <h2 style="font-weight: 900"><b><i>DARTE DE BAJA</i></b></h2>
  </div>
</section>

<section class="container-gral">
    

  <div class="text-center light topmargin-lg col-md-7 mx-auto">
    <div class="bottommargin">      
      <h2 class="light"> ELIGE UNA DE LAS OPCIONES DISPONIBLES</h2>
    </div>
    
      <div class="col-md-6 mx-auto">
        <div class="bottommargin-sm">        
          <a class="btn btn-block btn-cyan solicitar-btn" rel="" href="javascript:void(0)"><p>QUIERO SEGUIR RECIBIENDO MENSAJES</p></a>
        </div>

        <div class="bottommargin-sm">
          <a class="btn btn-block btn-cyan solicitar-btn" rel="" href="javascript:void(0)"><p>NO QUIERO RECIBIR MÁS MENSAJES</p></a>
        </div>

        <div class="bottommargin-sm">
          <a class="btn btn-block btn-cyan solicitar-btn" rel="" href="javascript:void(0)"><p>NO QUIERO RECIBIR MÁS MENSAJES DE TEXTO</p></a>
        </div>
      </div>
 
      <p class="nomargin"></p>
   
      <p class="topmargin-sm"></p>
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
