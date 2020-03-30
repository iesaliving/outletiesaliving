@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Aviso de privacidad')
@section('content')


    <section id="hero-desktop">
        <img src="{{ asset(isset($images) ? $images[0]->url.$images[0]->name : 'img/hero-aviso.jpg')}}">
    </section>

    <section id="hero-mobile">
        <img src="{{ asset(isset($images[1]) ? $images[1]->url.$images[1]->name : 'img/hero-aviso-mobile.jpg')}}">
    </section>


    <section class="container-gral" style="padding-top: 40px" >

        <div id="container-faq" class="margin-10">

            <div class="text-center">
                <h2>{{$data->title}}</h2>

                <p>{!! $data->intro !!}
                </p>
            </div>
            <div class="row col-md-10 offset-md-1">
           

            </div>

           

            <div class="topmargin">
               {!! $data->description !!}
             

        </div>
    </section>
@endsection


@section('styles')

@endsection



@section('scripts')

@endsection
