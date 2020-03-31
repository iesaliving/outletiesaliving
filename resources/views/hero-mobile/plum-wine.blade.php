<div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
    <div>
        <img src="{{ URL::asset('img/plum-wine/mobile.jpg')}}">
    </div>
    <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
        <div class="justify-content-center align-self-center">
            <div class="col-12 nopadding" style="display: inherit; margin-bottom: 10px">
                    <a href="{{ URL::to('/sub-zero') }}"><img id="img-SubZero" style="" src="{{ URL::asset('img/cintillos/SubZero.png')}}"></a>

                    <a href="{{ URL::to('/wolf') }}"><img id="img-wolf" style="" src="{{ URL::asset('img/cintillos/Wolf.png')}}"></a>
            </div> 
            <h2 class="light h2-text">COCINA</h2>
            <h2 class="light"><b class="bold"><i>EXTERIOR</i></b></h2>
        </div>
    </div>
</div>


             