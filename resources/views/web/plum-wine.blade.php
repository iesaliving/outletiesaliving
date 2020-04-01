@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Plum Wine')
@section('content')

<section id="hero-desktop">
    @include('hero.plum-wine')
</section>
<section id="hero-mobile">
    @include('hero-mobile.plum-wine')
</section>


<section class="container-gral">

        <div id="container-catalogo" class="margin-10">
            <div class="col-md-8 mx-auto text-center bottommargin-lg">
                <p>
                    Plum es el primer electrodoméstico totalmente automático que conserva y enfría perfectamente el vino para que puedas disfrutarlo una copa a la vez.
                </p>
            </div>

             @if(isset($data->detail[0]))

                @foreach($data->detail as $key => $detail)

                  @if($detail->features==0)

                    @if($key%2==0)

                      <div class="row col-padding catalogo topmargin-lg">
                            <div class="col-lg-6 col-padding-sm">
                                <img src="{{ asset(isset($detail) ? $detail->image : 'img/plum-wine/relajese.jpg')}}">
                            </div>
                            <div class="col-lg-6 d-flex col-xl-5">
                                <div class="justify-content-center align-self-center">
                                    
                                    <div class="topmargin-sm">
                                        <h2>
                                           {!! $detail->title !!}
                                        </h2>
                                        
                                    </div>

                                    <div class="topmargin-sm">
                                        
                                           {!! $detail->description !!} 
                                        
                                    </div>

                                    <div class="topmargin-sm row nomargin">
                                        <div class="col-lg-7 nopadding bottommargin-sm">
                                           
                                            <a class="btn btn-block btn-cyan solicitar-btn" rel="{{ $detail->url_cat }}" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>

                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    @else

                      <div class="row col-padding catalogo topmargin-lg">
                                <div class="col-lg-6 d-flex col-xl-5 offset-xl-1 order-lg-1 order-2">
                                    <div class="justify-content-center align-self-center">

                                        <div class="topmargin-sm text-lg-right text-left">
                                            <h2>
                                                {!! $detail->title !!}
                                            </h2>
                                            
                                        </div>

                                        <div class="topmargin-sm text-lg-right text-left">
                                           
                                               {!! $detail->description !!}
                                            
                                        </div>

                                        <div class="topmargin-sm row nomargin">
                                            <div class="col-lg-7 offset-lg-5 nopadding bottommargin-sm">
                                                <a class="btn btn-block btn-cyan solicitar-btn" rel="{{ $detail->url_cat }}" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                                     <img src="{{ asset(isset($detail) ? $detail->image : 'img/plum-wine/relajese.jpg')}}">
                                </div>
                            </div>
                            @endif
                    @endif

                @endforeach


            @endif
   
        </div>

        <div class="margin-10 row">

             @if(isset($data->detail[0]))
               
                @foreach($data->detail as $key => $detail)

                    @if($detail->features==1)
                        
                        <div class="bottommargin-sm col-md-4 {{ $key > 6 ? 'offset-md-1' : ''}}">
                            <div class="col-5 nopadding">
                                <img src="{{ asset( is_null($detail->image) ? 'img/plum-wine/agujas.png' : $detail->image)   }}">
                            </div>
                            <div class="col-12 nopadding topmargin-sm">
                                <p class="light">{!! $detail->description !!} </p>
                            </div>
                                
                        </div>

                    @endif 

                @endforeach

            @endif  

</section>

<section style="width: 100%; height: 300px; background-image: url('{{ asset( is_null($data->social_img) ? 'img/plum-wine/facebook.jpg' : $data->social_img )}}')">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-md-5 col-12 justify-content-center align-self-center">
                            <h2 class="light">{{$data->social_txt}}</h2>
                        <div class="col-md-6 col-7  nopadding topmargin-sm">
                            <a target="_blank" rel="nofollow" href="{{ $data->social_network }}" class="btn btn-block btn-cyan btn-facebook"><img src="{{ URL::asset('img/icono-btn/facebook.png')   }}">SÍGUENOS</a>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
</section>


<section class="container-gral topmargin">

        
         @include('modulos.showrooms')

        <div class="margin-10">
            @include('modulos.form-generico')
        </div>
</section>
@endsection