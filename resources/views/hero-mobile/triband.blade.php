<div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
    <div>
        <img src="{{ asset('img/triband/mobile.jpg')}}">
    </div>
    <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
        <div class="justify-content-center align-self-center row nomargin">
            <div class="col-lg-4 col-12">
                <a href="{{ URL::to('/sub-zero') }}"><img  src="{{ asset('img/subzero/logo.png')}}"></a>
            </div>
            <div class="col-lg-4 col-12">
                <a href="{{ URL::to('/wolf') }}"><img  src="{{ asset('img/wolf/logo.png')}}"></a>
            </div>
            <div class="col-lg-4 col-12">
                <a href="{{ URL::to('/cove') }}"><img  src="{{ asset('img/cove/logo.png')}}"></a>
            </div>
        </div>
    </div>
</div>