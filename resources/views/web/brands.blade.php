@extends('layouts.app')
@section('description', 'IESA')
@section('title', $data->name)
@section('content')
<section id="hero-desktop">
  @include($herod)
</section>
<section id="hero-mobile">
   @include($herom)  
</section>

<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">

            <div id="check"  class="col-12 text-center bottommargin-lg">
              {!! $data->intro !!}
            </div>

            @if(isset($data->detail[0]))

                @foreach($data->detail as $key => $detail)

                     @if($detail->features==0)

                    @if($key%2==0)

                      <div class="row col-padding catalogo topmargin-lg">
                            <div class="col-lg-6 col-padding-sm">
                                <img src="{{ asset(isset($detail) ? $detail->image : 'img/subzero/subzero1.jpg')}}">
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
                                     <img src="{{ asset(isset($detail) ? $detail->image : 'img/subzero/subzero2.jpg')}}">
                                </div>
                            </div>
                    @endif

                  @endif

                @endforeach


            @endif
   
        </div>

</section>


<section style="width: 100%; height: 300px; background-image: url('{{ asset($data->social_img)}}')">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-md-5 col-12 justify-content-center align-self-center">
                            <h2 class="light">{{$data->social_txt}}</h2>
                        <div class="col-md-6 col-7 nopadding topmargin-sm">
                            <a target="_blank" rel="nofllow" href="{{ $data->social_network }}" class="btn btn-block btn-cyan btn-facebook"><i class="fa fa-facebook fa-2x"> </i> SÍGUENOS</a>
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
