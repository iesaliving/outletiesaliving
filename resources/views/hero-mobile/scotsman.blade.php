<div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
	<div>
         @foreach($imagen as $key => $img)
                 @if($img->source == 'scotsman' && $img->type =='MOBIL' )
                 <img src="{{ asset(is_null($img->url) ? 'img/scotsman/mobile.jpg' : $img->url.$img->name)}}">
                 @endif
        @endforeach
	</div>
    <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
    	<div class="justify-content-center align-self-center">

             @foreach($brands as $key => $brand)
                  @if($brand->slug == 'scotsman')
                    <a href="{{ URL::to('/scotsman') }}"><img style="width: 200px;margin-left: -35px;" src="{{ asset(is_null($brand->logo) ? $brand->logo : 'img/scotsman/logo.png')}}" ></a>
                   {!! $brand->logo_txt !!}
                  @endif
                @endforeach

        </div>
    </div>
</div>