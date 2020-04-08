@foreach($imagen as $key => $img)
    @if($img->source == 'wolf' && $img->type =='MOBIL' )
    <div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
    	<div>
            <img src="{{ asset(is_null($img->url) ? 'img/wolf/mobile.jpg' : $img->url.$img->name)}}">
    	</div>
        <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
        	<div class="justify-content-center align-self-center">

                @foreach($brands as $key => $brand)
                  @if($brand->slug == 'wolf')
                    <a href="{{ URL::to($brand->slug) }}"><img style="width: 200px;margin-left: -35px;" src="{{ asset(is_null($brand->logo) ? $brand->logo : 'img/wolf/logo.png')}}" ></a>
                   {!! $brand->logo_txt !!}
                  @endif
                @endforeach

            </div>
        </div>
    </div>
    @endif
@endforeach