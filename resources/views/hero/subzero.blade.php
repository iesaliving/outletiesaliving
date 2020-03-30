@foreach($imagen as $key => $img)
    @if($img->source == 'sub-zero' && $img->type =='HERO' )
	<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ asset($img->url.$img->name)}}');">
	    <div class="col-12 nopadding h-100 d-flex aling">
	        <div class="justify-content-center align-self-center col-md-5 gradient-hero">
	            <a href="{{ URL::to('/sub-zero') }}"><img style="width: 200px;margin-left: -15px;" src="{{ asset('img/subzero/logo.png')}}"></a>
	            <h2 class="light h2-text">EL ESPECIALISTA</h2>
	            <h2 class="light">EN<b class="bold"><i>CONSERVACIÓN</i></b></h2>
	        </div>
	    </div>
	</div>
    @endif
@endforeach