@foreach($imagen as $key => $img)
    @if($img->source == 'plum-wine' && $img->type =='HERO' )
		<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ asset($img->url.$img->name)}}');">
		    <div class="col-12 nopadding h-100 d-flex aling">
		        <div class="justify-content-center align-self-center col-lg-6 gradient-hero">
		            
		          @foreach($brands as $key => $brand)
                  @if($brand->slug == 'plum-wine')
		            <a href="{{ URL::to('/plum-wine') }}"><img style="width:34%;margin-right: 10px;" src="{{ URL::asset('img/cintillos/Plum.png')}}"></a>

		            <div class="col-12 nopadding topmargin-sm">
		        	{!! $brand->logo_txt !!}
		            </div>
		           
		          @endif
                @endforeach
		        
		        </div>
		    </div>
		</div>
    @endif
@endforeach