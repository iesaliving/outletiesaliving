<div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
	<div>
		<img src="{{ asset('img/wolf/mobile.jpg')}}">
	</div>
    <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
    	<div class="justify-content-center align-self-center">
            <a href="{{ URL::to('/wolf') }}"><img style="width: 200px;margin-left: -35px;" src="{{ asset('img/wolf/logo.png')}}"></a>
            <h2 class="light h2-text">EL ESPECIALISTA</h2>
            <h2 class="light">EN<b class="bold"><i>COCCIÓN</i></b></h2>
        </div>
    </div>
</div>