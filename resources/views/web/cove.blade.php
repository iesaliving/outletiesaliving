@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'COVE')
@section('content')


<section id="hero-desktop">
   <div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ asset($hero[0]->url.$hero[0]->name)}}');">
        <div class="col-12 nopadding h-100 d-flex aling">
            <div class="justify-content-center align-self-center col-md-5 gradient-hero">
                <img style="width: 200px;margin-left: -15px;" src="{{ asset($data->logo)}}">
                <h2 class="light h2-text">{!! $data->logo_txt !!}</h2>
            </div>
        </div>
    </div>
</section>
<section id="hero-mobile">
    <div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
        <div>
            <img src="{{ asset($hero[1]->url.$hero[1]->name)}}">
        </div>
        <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
            <div class="justify-content-center align-self-center">
                <img style="width: 200px;margin-left: -17px;" src="{{ asset($data->logo)}}">
                <h2 class="light h2-text">{!! $data->logo_txt !!} </h2>
            </div>
        </div>
    </div>   
</section>


<section class="container-gral">
    
        <div id="container-catalogo" class="margin-10">
            <div class="col-12 text-center bottommargin-lg">
                {!! $data->intro !!}
            </div>

            @if(isset($data->detail[0]))
               
               @foreach($data->detail as $key => $detail)

                  @if($detail->features==0)

                <div class="row col-padding catalogo topmargin-lg">
                    <div class="col-lg-6 col-padding-sm">
                        <img src="{{ asset($detail->image)}}">
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
                                <div class="col-lg-7 nopadding bottommargin-sm nopadding-mobile">
                                    <a class="btn btn-block btn-cyan solicitar-btn" rel="https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Cove_Download.htm" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/catalogo.png')   }}"><p>SOLICITAR CATÁLOGO</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 @endif  
             @endforeach

            @endif  
        </div>

        <div class="margin-10 row">

            <div class="col-12 text-center bottommargin">
                <h2 class="light">SUBSTANCIA MÁS ALLÁ DE ESTILO</h2>
            </div>

            @if(isset($data->detail[0]))
               
                @foreach($data->detail as $key => $detail)

                    @if($detail->features==1)

                    <div class="bottommargin-sm col-md-4">
                        <div class="col-5 nopadding ">
                            <img src="{{ asset($detail->image) }}">
                        </div>
                        <div class="col-12 nopadding topmargin-sm">
                            <p><b>{!! $detail->title !!}</b></p>
                            <p class="light text-justify">{!! $detail->description !!} </p>
                        </div>
                        
                    </div>

                    @endif 

                @endforeach

            @endif  

        </div>

</section>

<section class="container-fb" style="background-image: url('{{ asset($data->social_img)}}') ">
            <div  class="container-gral h-100">
                <div class="margin-10 h-100">
                    <div class="h-100 d-flex">
                        <div class="col-md-5 col-12 justify-content-center align-self-center">
                            <h2 class="light">{{$data->social_txt}}</h2>
                        <div class="col-md-6 col-7 nopadding topmargin-sm">
                            <a target="_blank" rel="nofollow" href="{{ $data->social_network }}" class="btn btn-block  btn-cyan btn-facebook"><i class="fa fa-facebook fa-2x"> </i>SÍGUENOS</a>
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


@section('styles')
@endsection

@section('scripts')
@endsection
