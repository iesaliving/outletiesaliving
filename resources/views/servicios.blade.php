@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Servicios')
@section('content')

<section style="position: relative;">
    <div id="hero-desktop" class="col-12 nopadding">
         <img src="{{ asset( isset($images) ? $images->url.$images->name : 'img/servicios/hero.jpg')}}" alt="Servicios">
    </div>

    <div id="hero-mobile" class="col-12 nopadding">
        <img src="{{ asset( isset($images) ? $images->url.'mobile.jpg' : 'img/hero-servicio-mobile.jpg')}}" alt="hero-servicio-mobile">
    </div>
    <div id="container-btn-servicios">
        <div class="row nomargin">
            <div class="col-xl-7 col-lg-6 bottommargin-sm">
                <a class="btn btn-block btn-cyan descubra-btn" href="{{ URL::to('/contacto')}}"><img src="{{ asset('img/icono-btn/agenda.png')   }}"><p>AGENDE UNA CITA DE SERVICIO</p></a>
            </div>
            <div class="col-xl-5 col-lg-6 bottommargin-sm">
                <a class="btn btn-block btn-cyan descubra-btn" href="tel:+5218118036339"><p><img src="{{ asset('img/icono-btn/whatsapp_blanco.png')}}" style="margin-right: 15px;width: 20px">+52 (1) 811 803 6339</p></a>
            </div>

        </div>
  </div>
</section>


<section class="container-gral">

        <div id="container-catalogo" class="margin-10">
        <div class="col-12 text-center bottommargin-lg">
                <h2>{{$service->title}}</h2>
                <p>{!! $service->description !!}</p>

        </div>
            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-padding-sm">
                  <img src="{{ asset($service->imag_st)}}" alt="{{$service->title_st}}">
                </div>
                <div class="col-xl-6  col-lg-6">
                    <div class="topmargin-sm col-xl-11">
                        <h2>
                           {{$service->title_st}}
                        </h2>
                         <p>{!! $service->description_st !!}</p>

                    </div>


                    <div class="topmargin-sm row nomargin col-xl-11">
                        <div class="col-1 nopadding bottommargin-sm">
                            <img src="{{ asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">
                        </div>
                        <div class="col-11 bottommargin-sm">
                            <a href="{{'tel:'.$service->telf_st}}"><p class="nomargin"> {{$service->telf_st}}</p></a>
                        </div>
                        <div class="col-1 nopadding bottommargin-sm">
                            <img src="{{ asset('img/icono-btn/whatsapp.png')}}" style="margin-right: 15px;width: 20px">
                        </div>
                        <div class="col-11 bottommargin-sm">
                            <a href="{{'https://wa.me/'.$service->telw_st}}" target="_blank" ><p class="nomargin">{{$service->telw_st}}</p></a>
                        </div>
                        <div class="col-1 nopadding bottommargin-sm">
                            <img src="{{ asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px">
                        </div>
                        <div class="col-11 bottommargin-sm">
                           <a href="{{'mailto:'.$service->email_st}}"> <p class="nomargin">{{$service->email_st}}</p></a>
                        </div>
                    </div>

                    <div class="row nomargin">
                        <div class="col-2" style="padding: 0 5px 0 0">
                            <a href="{{ URL::to('/sub-zero') }}"><img src="{{ asset('img/cintillos/SubZero.png')}}"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/wolf') }}"><img src="{{ asset('img/cintillos/Wolf.png')}}"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/cove') }}"><img src="{{ asset('img/cintillos/Cove.png')}}"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/asko') }}"><img src="{{ asset('img/cintillos/Asko.png')}}"></a>
                        </div>
                        <div class="col-1" style="padding: 0 5px">
                            <a href="{{ URL::to('/dexa') }}"><img src="{{ asset('img/cintillos/Dexa.png')}}"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/scotsman') }}"><img src="{{ asset('img/cintillos/Scotsman.png')}}"></a>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-12 text-center bottommargin-lg topmargin">
                <h2>{{$service->title2}}</h2>
                <p>{!! $service->description2 !!}</p>


            </div>




            <div class="row col-padding catalogo topmargin">

                <div class="col-xl-6 offset-xl-0 col-lg-6 order-2 order-lg-1">
                    <div class="topmargin-sm text-lg-right text-left col-xl-11 offset-xl-1">
                        <h2>
                          {{$service->title_cs}}
                        </h2>
                        <p>{!! $service->description_cs !!}</p>

                    </div>

                    <div class="topmargin-sm">
                        <div class="row nomargin col-12 nopadding">
                            <div class="order-lg-1 order-2 col-11 bottommargin-sm text-lg-right text-left">
                               <a href="{{'tel:'.$service->telf_cs}}"><p class="nomargin"> {{$service->telf_cs}}</p></a>
                            </div>
                            <div class="order-lg-2 order-1 col-1 nopadding bottommargin-sm">
                                <img src="{{ asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">
                            </div>
                        </div>
                        <div class="row nomargin col-12 nopadding">
                            <div class="order-lg-1 order-2 col-11 bottommargin-sm text-lg-right text-left">
                                <a href="{{'https://wa.me/'.$service->telw_cs}}" target="_blank" ><p class="nomargin">{{$service->telw_cs}}</p></a>
                            </div>
                            <div class="order-lg-2 order-1 col-1 nopadding bottommargin-sm">
                                <img src="{{ asset('img/icono-btn/whatsapp.png')}}" style="margin-right: 15px;width: 20px">
                            </div>
                        </div>
                        <div class="row nomargin col-12 nopadding">
                            <div class="order-lg-1 order-2 col-11 bottommargin-sm text-lg-right text-left">
                               <a href="{{'mailto:'.$service->email_cs}}"> <p class="nomargin">{{$service->email_cs}}</p></a>
                            </div>
                            <div class="order-lg-2 order-1 col-1 nopadding bottommargin-sm">
                                <img src="{{ asset($service->imag_cs)}}" alt="{{$service->title_cs}}" style="margin-right: 15px;width: 20px">
                            </div>
                        </div>
                    </div>

                    <div class="row nomargin">
                        <div class="col-2 offset-lg-1" style="padding: 0 5px 0 0">
                            <a href="{{ URL::to('/sub-zero') }}"><img src="{{ asset('img/cintillos/SubZero.png')}}"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/wolf') }}"><img src="{{ asset('img/cintillos/Wolf.png')}}"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/cove') }}"><img src="{{ asset('img/cintillos/Cove.png')}}"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/asko') }}"><img src="{{ asset('img/cintillos/Asko.png')}}"></a>
                        </div>
                        <div class="col-1" style="padding: 0 5px">
                            <a href="{{ URL::to('/dexa') }}"><img src="{{ asset('img/cintillos/Dexa.png')}}"></a>
                        </div>
                        <div class="col-2" style="padding: 0 10px">
                            <a href="{{ URL::to('/scotsman') }}"><img src="{{ asset('img/cintillos/Scotsman.png')}}"></a>
                        </div>
                    </div>

                    <div class="text-lg-right text-left topmargin-sm">

                    </div>

                </div>
                <div class="col-lg-6 col-padding-sm d-flex order-1 order-lg-2">
                    <div class="align-self-center justify-content-center">
                        <img src="{{ asset('img/servicios/agenda.jpg')}}">
                    </div>
                </div>
            </div>


            <div class="col-12 text-center bottommargin-lg topmargin-lg">
                <h2>{{$service->title3}}</h2>
                <p>{!! $service->description3 !!}</p>
                <div class="form-group  col-xl-4 offset-xl-4  col-md-4 offset-md-4 text-center topmargin-sm">
                    <a class="btn btn-cyan btn-block" target="_blank" rel="nofollow" href="https://mx.subzero-wolf.com/es/locator#Tab-Service"><img style="margin-right: 15px; width: 20px" src="{{ asset('img/icono-btn/enviar.png')   }}">LOCALÍZALOS AQUÍ</a>
                </div>
            </div>

            <div class="col-12 text-center bottommargin-lg topmargin-lg">
                <h2>INSTALAMOS Y DAMOS SERVICIOS A TODOS LOS EQUIPOS QUE VENDEMOS</h2>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-padding-sm">
                    <img src="{{ asset(isset($detail[0]) ? $detail[0]->image : 'img/servicios/autorizado.jpg') }}" alt="{{isset($detail[0]) ? $detail[0]->title : 'SERVICIO AUTORIZADO DE FÁBRICA'}}">
                </div>
                <div class="col-lg-6 col-xl-5 d-flex">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">{{ isset($detail[0]) ? $detail[0]->title : 'SERVICIO AUTORIZADO DE FÁBRICA'}}</h2>
                        <p>{!! isset($detail[0]) ? $detail[0]->description : '' !!}</p>
                    </div>

                </div>
            </div>



            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-xl-5 offset-xl-1 d-flex text-lg-right text-left order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm"> {{ isset($detail[1]) ? $detail[1]->title : 'Brindamos servicio de garantía'}} </h2>
                       <p class="text-justify"> {!! isset($detail[1]) ? $detail[1]->description : '' !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm order-lg-2 order-1">
                     <img src="{{ asset(isset($detail[1]) ? $detail[1]->image : 'img/servicios/garantia.jpg')}}" alt="{{isset($detail[1]) ? $detail[1]->title : 'Brindamos servicio de garantía'}}">

                </div>
            </div>


            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-padding-sm d-flex">
                    <div class="justify-content-center align-self-center">
                         <img src="{{ asset(isset($detail[2]) ? $detail[2]->image : 'img/servicios/garantia.jpg')}}" alt="{{isset($detail[2]) ? $detail[2]->title : 'Garantizamos el servicio de guantes blancos'}}">

                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 d-flex">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">{{ isset($detail[2]) ? $detail[2]->title : 'Garantizamos el servicio de guantes blancos'}} </h2>
                        <p class="text-justify"> {!! isset($detail[2]) ? $detail[2]->description : '' !!}</p>
                    </div>

                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-xl-5 offset-xl-1 d-flex text-lg-right text-left  order-lg-1 order-2">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">{{ isset($detail[3]) ? $detail[3]->title : 'Recibimos una amplia capacitación directamente de Sub-Zero'}} </h2>
                        <p class="text-justify"> {!! isset($detail[3]) ? $detail[3]->description : '' !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-padding-sm d-flex order-lg-2 order-1">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ asset(isset($detail[3]) ? $detail[3]->image : 'img/servicios/capacitacion.jpg')}}" alt="isset($detail[3]) ? $detail[3]->title : 'Recibimos una amplia capacitación directamente de Sub-Zero'">

                    </div>
                </div>
            </div>

            <div class="row col-padding catalogo topmargin">
                <div class="col-lg-6 col-padding-sm d-flex">
                    <div class="justify-content-center align-self-center">
                        <img src="{{ asset(isset($detail[4]) ? $detail[4]->image : 'img/servicios/fabricante.jpg')}}" alt="{{isset($detail[4]) ? $detail[4]->title : 'Utilizamos sólo piezas del fabricante'}}">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 d-flex">
                    <div class="justify-content-center align-self-center">
                        <h2 class="bottommargin-sm">{{ isset($detail[4]) ? $detail[4]->title : 'Utilizamos sólo piezas del fabricante'}} </h2>
                        <p class="text-justify"> {!! isset($detail[4]) ? $detail[4]->description : '' !!}</p>

                    </div>

                </div>
            </div>
        </div>

</section>
@endsection


@section('styles')
@endsection

@section('scripts')
@endsection
