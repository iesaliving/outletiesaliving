<div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
	<div>
		<img src="{{ URL::asset('img/subzero/mobile.jpg')}}">
	</div>
    <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
    	<div class="justify-content-center align-self-center">
            <a href="{{ URL::to('/sub-zero') }}"><img style="width: 200px;margin-left: -17px;" src="{{ URL::asset('img/subzero/logo.png')}}"></a>
            <h2 class="light h2-text">EL ESPECIALISTA</h2>
            <h2 class="light">EN<b class="bold"><i>CONSERVACIÓN</i></b></h2>
        </div>
    </div>
</div>