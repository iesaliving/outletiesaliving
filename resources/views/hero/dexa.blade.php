@foreach($imagen as $key => $img)
    @if($img->source == 'dexa' && $img->type =='HERO' )
	<div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ asset($img->url.$img->name)}}');">
	    <div class="col-12 nopadding h-100 d-flex aling">
	        <div class="justify-content-center align-self-center col-md-5 gradient-hero-cove">
	            <a href="{{ URL::to('/dexa') }}"><img style="width: 200px;margin-left: -65px;margin-bottom: 10px" src="{{ asset('img/dexa/logo.png')}}"></a>
	            <h2 class="light h2-text">DEXA NON É</h2>
	            <h2 class="light">NORMALE...<b class="bold"><i>COME TE!</i></b></h2>
	            <h5 class="light">DISEÑOS Y ELEMENTOS QUE EXPRESAN <br>UNA PERSONALIDAD DIFERENTE</h5>
	        </div>
	    </div>
	</div>
    @endif
@endforeach