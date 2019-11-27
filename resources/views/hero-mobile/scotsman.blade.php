<div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
	<div>
		<img src="{{ URL::asset('img/scotsman/mobile.jpg')}}">
	</div>
    <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
    	<div class="justify-content-center align-self-center">
           <a href="{{ URL::to('/scotsman') }}"> <img style="width: 200px;margin-left: -35px;" src="{{ URL::asset('img/scotsman/logo.png')}}"></a>
            <h2 class="light h2-text">EL HIELO IDEAL</h2>
            <h2 class="light"><b class="bold"><i>EL LUJO DEFINITIVO</i></b></h2>
        </div>
    </div>
</div>