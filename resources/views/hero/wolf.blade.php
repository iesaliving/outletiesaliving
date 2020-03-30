@foreach($imagen as $key => $img)
    @if($img->source == 'wolf' && $img->type =='HERO' )
<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ asset('img/wolf/hero.jpg')}}');">
    <div class="col-12 nopadding h-100 d-flex aling">
        <div class="justify-content-center align-self-center col-md-5 gradient-hero">
            <a href="{{ URL::to('/wolf') }}"><img style="width: 200px;margin-left: -35px;" src="{{ asset('img/wolf/logo.png')}}"></a>
            <h2 class="light h2-text">EL ESPECIALISTA</h2>
            <h2 class="light">EN<b class="bold"><i>COCCIÓN</i></b></h2>
        </div>
    </div>
</div>
    @endif
@endforeach