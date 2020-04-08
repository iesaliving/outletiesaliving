@foreach($imagen as $key => $img)
    @if($img->source == 'cocina-exterior' && $img->type =='HERO' )
	<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ asset($img->url.$img->name)}}');">
	    <div class="col-12 nopadding h-100 d-flex aling">
	        <div class="justify-content-center align-self-center col-lg-6 gradient-hero">
	            <a href="{{ URL::to('/sub-zero') }}"><img style="width:34%;margin-right: 10px;" src="{{ asset('img/cintillos/SubZero.png')}}"></a>
	            <a href="{{ URL::to('/wolf') }}"><img style="width:26%;margin-left: 15px" src="{{ asset('img/cintillos/Wolf.png')}}"></a>

	             @foreach($brands as $key => $brand)
                  @if($brand->slug == 'cocina-exterior')
                    <div class="col-12 nopadding">
			        	 {!! $brand->logo_txt !!}
			        </div>
                  
                  @endif
                @endforeach
                
	       
	        </div>
	    </div>
	</div>
    @endif
@endforeach