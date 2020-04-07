@foreach($imagen as $key => $img)
    @if($img->source == 'cove' && $img->type =='MOBIL' )
    <div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
    	<div>
    		<img src="{{ asset('img/cove/mobile.jpg')}}">
    	</div>
        <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
            <div class="justify-content-center align-self-center">
                <a href="{{ URL::to('/cove') }}"><img style="width: 200px;margin-left: -35px;" src="{{ asset('img/cove/logo.png')}}"></a>
                <h2 class="light nomargin">LA ÚNICA</h2>
                <h2 class="light nomargin">LAVAVAJILLAS CON </h2>
                <h2 class="light nomargin"><b class="bold"><i>SUBZERO Y WOLF</i></b></h2>
                <h2 class="light nomargin">EN SU <b class="bold"><i>ADN</i></b> </h2>
            </div>
        </div>
    </div>
    @endif
@endforeach