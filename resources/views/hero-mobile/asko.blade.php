@foreach($imagen as $key => $img)
    @if($img->source == 'asko' && $img->type =='MOBIL' )
    <div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
    	<div>
    		<img src="{{ asset('img/asko/mobile.jpg')}}">
    	</div>
        <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
        	<div class="justify-content-center align-self-center">
                <a href="{{ URL::to('/asko') }}"><img style="width: 200px;margin-left: -35px;" src="{{ asset('img/asko/logo.png')}}"></a>
                <h2 class="light h2-text">INSPIRADO EN</h2>
                <h2 class="light"><b class="bold"><i>ESCANDINAVIA</i></b></h2>
        	</div>
        </div>
    </div>
    @endif
@endforeach