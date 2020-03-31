<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ URL::asset('img/plum-wine/hero.jpg')}}');">
    <div class="col-12 nopadding h-100 d-flex aling">
        <div class="justify-content-center align-self-center col-lg-6 gradient-hero">
            <a href="{{ URL::to('/plum-wine') }}"><img style="width:34%;margin-right: 10px;" src="{{ URL::asset('img/plum-wine/logo.png')}}"></a>
        <div class="col-12 nopadding topmargin-sm">
        	<h2 class="light h2-text">UNA COPA DE VINO EN EL</h2>
            <h2 class="light nomargin"><b class="bold"><i> MOMENTO PERFECTO</i></b></h2>
        </div>
        </div>
    </div>
</div>