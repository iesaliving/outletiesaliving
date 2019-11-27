<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ URL::asset('img/exteriores/hero.jpg')}}');">
    <div class="col-12 nopadding h-100 d-flex aling">
        <div class="justify-content-center align-self-center col-md-5 gradient-hero-cove">
        	<div class="row nopadding col-12">
        		<div class="col-5">
        			<a href="{{ URL::to('/wolf') }}"><img src="{{ URL::asset('img/cintillos/Wolf.png')}}"></a>
        		</div>
        		<div class="col-5 nopadding">
        			<a href="{{ URL::to('/sub-zero') }}"><img src="{{ URL::asset('img/cintillos/SubZero.png')}}"></a>
        		</div>
        		
        	</div>
            <h2 class="light nomargin">COCINA</h2>
            <h2 class="light"><b class="bold"><i>EXTERIOR</i></b></h2>
        </div>
    </div>
</div>