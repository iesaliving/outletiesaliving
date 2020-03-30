@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'FAQ')
@section('content')

<section id="hero-desktop">
  <img src="{{ asset( isset($hero) ? $hero->url.$hero->name : 'img/faq/hero.jpg')}}">
</section>
<section id="hero-mobile">
  <img src="{{ asset( isset($hero->url) ? $hero->url.'mobile.jpg' : 'img/faq/mobile.jpg')}} ">
</section>



    <section class="container-gral" style="padding-top: 40px" >

        <div id="container-faq" class="margin-10">

            <div class="text-center">
                 @foreach($faqs as $faq1)

                    @if($faq1->slug == 'faq')
                    <h2>{{$faq1->title}}</h2>

                    <p>{!! $faq1->description !!}</p>

                    @endif
                   
                    
                @endforeach
            </div>
            <div class="col-md-10 offset-md-1 col-12 nopadding">
                <div class="col-12 row nomargin nopadding">

                    @foreach($faqs as $faq)

                      @if($faq->slug != 'faq')

                       <div class="col-4 text-center">
                        <div style="padding: 10px 4vw">
                            <a href="{{'#'.$faq->slug}}"><img src="{{ asset($faq->image)   }}" class="mb-2"></a>
                        </div>
                        <p class="text-center"><strong>{{$faq->title}}</strong></p>
                    </div>

                     @endif
                   
                    
                    @endforeach

                </div>

            </div>

             @foreach($faqs as $faq2)

                <div class="topmargin" id="{{$faq2->slug}}">
                    <h2 class="bottommargin-sm">{{strtoupper($faq2->title)}}</h2>

                    {!! $faq2->description !!}
                   
                </div>

            @endforeach


        </div>
    </section>
@endsection


@section('styles')
<style type="text/css">
    ul li{
        font-weight: 100
    }
</style>

@endsection



@section('scripts')

@endsection
