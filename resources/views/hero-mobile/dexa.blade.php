@foreach($imagen as $key => $img)
    @if($img->source == 'dexa' && $img->type =='MOBIL' )
    <div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
    	<div>
    		<img src="{{ asset(is_null($img->url) ? 'img/dexa/mobile.jpg' : $img->url.$img->name)}}">
    	</div>
        <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
            <div class="justify-content-center align-self-center">

                @foreach($brands as $key => $brand)
                  @if($brand->slug == 'dexa')
                    <a href="{{ URL::to('/dexa') }}"><img style="width: 200px;margin-left: -65px;" src="{{ asset(is_null($brand->logo) ? $brand->logo : 'img/dexa/logo.png')}}" ></a>
                   {!! $brand->logo_txt !!}
                  @endif
                @endforeach

            </div>
        </div>
    </div>
    @endif
@endforeach