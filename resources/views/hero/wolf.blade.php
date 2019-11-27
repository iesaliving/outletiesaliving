<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ URL::asset('img/wolf/hero.jpg')}}');">
    <div class="col-12 nopadding h-100 d-flex aling">
        <div class="justify-content-center align-self-center col-md-5 gradient-hero">
            <a href="{{ URL::to('/wolf') }}"><img style="width: 200px;margin-left: -35px;" src="{{ URL::asset('img/wolf/logo.png')}}"></a>
            <h2 class="light h2-text">EL ESPECIALISTA</h2>
            <h2 class="light">EN<b class="bold"><i>COCCIÓN</i></b></h2>
        </div>
    </div>
</div>