<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ URL::asset('img/scotsman/hero.jpg')}}');">
    <div class="col-12 nopadding h-100 d-flex aling">
        <div class="justify-content-center align-self-center col-md-5 gradient-hero">
            <a href="{{ URL::to('/scotsman') }}"><img style="width: 200px;margin-left: -35px;" src="{{ URL::asset('img/scotsman/logo.png')}}"></a>
            <h2 class="light h2-text">EL HIELO IDEAL</h2>
            <h2 class="light"><b class="bold"><i>EL LUJO DEFINITIVO</i></b></h2>
        </div>
    </div>
</div>