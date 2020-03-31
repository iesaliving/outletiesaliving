@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Nosotros')
@section('content')

<section id="hero-desktop">
        <img src="{{ asset( is_null($images) ? 'img/nosotros/hero.jpg' : $images[0]->url.$images[0]->name)}}">
    </section>

<section id="hero-mobile">
  <img src="{{ asset( is_null($images) ? 'img/nosotros/mobile.jpg' : $images[1]->url.$images[1]->name)}}">

</section>

<section class="container-gral" style="padding-top: 4px" >
    
        <div id="container-catalogo" class="margin-10">

            <div class="col-12 text-center bottommargin-lg">
                <h2>{{ $about_us->title}}</h2>
                <p>{!! $about_us->description !!}</p>

            </div>
            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ asset( is_null($about_us->imag_obj) ? 'img/nosotros/objetivo.jpg' : $about_us->imag_obj )}}" alt="{{ $about_us->title_obj }}">
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">{{ $about_us->title_obj }}</h2>
                        {!! $about_us->description_obj !!}
                        
                    </div>

                </div>
            </div>


            <div class="col-12 text-center bottommargin-lg topmargin-lg">
                <h2>{{ $about_us->title_d }}</h2>
                {!! $about_us->description_d !!}

            </div>
        </div>

        @include('modulos.showrooms')

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
                margin: 20,
                responsive: {
                  0: {
                    items: 2,
                  },
                  600: {
                    items: 3,
                  },
                  900: {
                    items: 4,
                  }
                }
              })
            }) 
</script>
@endsection
