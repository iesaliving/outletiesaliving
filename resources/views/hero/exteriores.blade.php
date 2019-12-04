<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ URL::asset('img/exteriores/hero.jpg')}}');">
    <div class="col-12 nopadding h-100 d-flex aling">
        <div class="justify-content-center align-self-center col-md-6 gradient-hero-cove">
        	<div class="row nopadding col-xl-8 col-lg-12" style="display: inherit;">

        			<a href="{{ URL::to('/sub-zero') }}"><img style="width: 33%; margin-left: 15px" src="{{ URL::asset('img/cintillos/SubZero.png')}}"></a>

        			<a href="{{ URL::to('/wolf') }}"><img style="width: 27%; margin-left: 5%" src="{{ URL::asset('img/cintillos/Wolf.png')}}"></a>

        	</div>
            <h2 class="light nomargin">COCINA <b class="bold"><i>EXTERIOR</i></b></h2>
        </div>
    </div>
</div>