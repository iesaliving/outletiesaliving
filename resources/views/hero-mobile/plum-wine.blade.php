<div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
    <div>
        <img src="{{ URL::asset('img/plum-wine/mobile.jpg')}}">
    </div>
    <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
        <div class="justify-content-center align-self-center">
           
            <a href="{{ URL::to('/plum-wine') }}"><img style="width: 200px;margin-top: 10px" src="{{ asset('img/plum-wine/logo.png')}}"></a>

            <h2 class="light h2-text" style="margin-top: 10px">UNA COPA DE VINO</h2>
            <h2 class="light nomargin">EN EL<b class="bold"><i> MOMENTO</i></b></h2>
            <h2 ><b class="bold"><i>PERFECTO</i></b></h2>
        </div>
    </div>
</div>


             