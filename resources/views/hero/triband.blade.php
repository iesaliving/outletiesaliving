<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ URL::asset('img/triband/hero.jpg')}}');">
    <div class="col-12 nopadding h-100 d-flex aling">
        <div class="justify-content-center align-self-center col-lg-6 gradient-hero">
            <a href="{{ URL::to('/sub-zero') }}"><img style="width:33%;" src="{{ URL::asset('img/cintillos/SubZero.png')}}"></a>
            <a href="{{ URL::to('/wolf') }}"><img style="width:27%;margin-left: 15px" src="{{ URL::asset('img/cintillos/Wolf.png')}}"></a>
            <a href="{{ URL::to('/cove') }}"><img style="width:29%;margin-left: 15px" src="{{ URL::asset('img/cintillos/Cove.png')}}"></a>
        </div>
    </div>
</div>