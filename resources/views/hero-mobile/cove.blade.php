@foreach($imagen as $key => $img)
    @if($img->source == 'cove' && $img->type =='MOBIL' )
    <div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
    	<div>
    		<img src="{{ asset('img/cove/mobile.jpg')}}">
    	</div>
        <div class="col-11 offset-1 col-padding d-flex {{(request()->segment('1')==null)?'m-height':''}}">
            <div class="justify-content-center align-self-center">
                  @foreach($brands as $key => $brand)
                  @if($brand->slug == 'cove')
                    <a href="{{ URL::to('/cove') }}"><img style="width: 200px;margin-left: -35px;" src="{{ asset(is_null($brand->logo) ? $brand->logo : 'img/cove/logo.png')}}" ></a>
                   {!! $brand->logo_txt !!}
                  @endif
                @endforeach

            </div>
        </div>
    </div>
    @endif
@endforeach