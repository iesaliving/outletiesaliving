@foreach($imagen as $key => $img)
    @if($img->source == 'wolf' && $img->type =='HERO' )
<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ asset($img->url.$img->name)}}');">
    <div class="col-12 nopadding h-100 d-flex aling">
        <div class="justify-content-center align-self-center col-md-5 gradient-hero">
        	@foreach($brands as $key => $brand)
                  @if($brand->slug == 'wolf')
		            <a href="{{ URL::to('/dexa') }}"><img style="width: 200px;margin-left: -35px;" src="{{ asset(is_null($brand->logo) ? $brand->logo : 'img/wolf/logo.png')}}" ></a>
		           {!! $brand->logo_txt !!}
		          @endif
                @endforeach
        </div>
    </div>
</div>
    @endif
@endforeach