<div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
	<div>
		<img src="{{ URL::asset('img/exteriores/mobile.jpg')}}">
	</div>
    <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
    	<div class="justify-content-center align-self-center">
            <div class="col-12">
                <div class="row nopadding col-12">
                <div class="col-5">
                    <a href="{{ URL::to('/wolf') }}"><img src="{{ URL::asset('img/cintillos/Wolf.png')}}"></a>
                </div>
                <div class="col-5 nopadding">
                    <a href="{{ URL::to('/sub-zero') }}"><img src="{{ URL::asset('img/cintillos/SubZero.png')}}"></a>
                </div>
                
            </div>
            <br>
            <h2 class="light nomargin">COCINA</h2>
            <h2 class="light"><b class="bold"><i>EXTERIOR</i></b></h2>
        </div>
    </div>
</div>
