@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')



<section>
    <img src="{{ URL::asset('img/Hero-Gracias.jpg')}}">
</section>

<section class="container-gral">
    

  <div class="text-center light topmargin-lg">
    <h2 class="light">Gracias</h2>
    <p class="nomargin">Agradecemos de antemano el interés en nuestras marcas.</p>
    <p>A la brevedad posible nos pondremos en contacto con usted para poder atender su petición.</p>
  </div>
        @include('modulos.carrousel')
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
