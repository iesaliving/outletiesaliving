<div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
	<div>
		<img src="{{ URL::asset('img/dexa/mobile.jpg')}}">
	</div>
    <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
        <div class="justify-content-center align-self-center">
            <a href="{{ URL::to('/dexa') }}"><img style="width: 200px;margin-left: -65px;" src="{{ URL::asset('img/dexa/logo.png')}}"></a>
            <h2 class="light nomargin">DEXA NON É</h2>
            <h2 class="light nomargin">NORMALE...</h2>
            <h2 class="light nomargin"><b class="bold"><i>COME TE!</i></b></h2>
            <h5 class="light nomargin">DISEÑOS Y ELEMENTOS QUE<br> EXPRESAN UNA<br> PERSONALIDAD DIFERENTE</h5>
        </div>
    </div>
</div>