@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Gracias')
@section('content')



<section id="hero-desktop">
    <img src="{{ asset('img/Hero-Gracias.jpg')}}">
</section>

<section id="hero-mobile">
    <img src="{{ asset('img/hero-gracias-mobile.jpg')}}">
</section>

<section class="container-gral">
    

  <div class="text-center light topmargin-lg col-md-7 mx-auto">

    @if(isset($data))
      <h2 style="color: #01bb9c">{{$data['nombre']}}</h2>
    @endif

      <h2 class="light">{!!$text0!!}</h2>

    @if(request()->segment('1')=='gracias-cookingdemo')
      <h3 style="color: #01bb9c" class="light topmargin-sm bottommargin-sm">{{$text1}}</h3>
    @else
      <p class="nomargin">{{$text1}}</p>
    @endif      
      <p class="topmargin-sm">{{$text2}}</p>
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
