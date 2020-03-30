@foreach($imagen as $key => $img)
    @if($img->source == 'cove' && $img->type =='HERO' )
<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ asset($img->url.$img->name)}}');">
    <div class="col-12 nopadding h-100 d-flex aling">
        <div class="justify-content-center align-self-center col-md-5 gradient-hero-cove">
            <a href="{{ URL::to('/cove') }}"><img style="width: 200px;margin-left: -35px;" src="{{ asset('img/cove/logo.png')}}"></a>
            <h2 class="light h2-text">LA ÚNICA</h2>
            <h2 class="light">LAVAVAJILLAS</h2>
            <h2 class="light">CON<b class="bold"><i>SUBZERO	Y</i></b></h2>
            <h2 class="light"><b class="bold"><i>WOLF</i></b> EN SU<b class="bold"><i>ADN</i></b> </h2>
        </div>
    </div>
</div>
    @endif
@endforeach