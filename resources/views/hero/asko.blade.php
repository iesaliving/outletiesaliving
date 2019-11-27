<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ URL::asset('img/asko/hero.jpg')}}');">
    <div class="col-12 nopadding h-100 d-flex aling">
        <div class="justify-content-center align-self-center col-md-5 gradient-hero">
            <a href="{{ URL::to('/asko') }}"><img style="width: 200px;margin-left: -35px;" src="{{ URL::asset('img/asko/logo.png')}}"></a>
            <h2 class="light h2-text">INSPIRADO EN</h2>
            <h2 class="light"><b class="bold"><i>ESCANDINAVIA</i></b></h2>
        </div>
    </div>
</div>