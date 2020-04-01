@foreach($imagen as $key => $img)
    @if($img->source == 'cove' && $img->type =='HERO' )
    <div class="container-hero-image {{(request()->segment('1')==null)?'m-height':''}}" style="background-image: url('{{ asset($img->url.$img->name)}}');">
        <div class="col-12 nopadding h-100 d-flex aling">
            <div class="justify-content-center align-self-center col-md-5 gradient-hero-cove">
                @foreach($brands as $key => $brand)
                  @if($brand->slug == 'cove')
                    <a href="{{ URL::to('/'.$brand->slug) }}"><img style="width: 200px;margin-left: -35px;" src="{{ asset(is_null($brand->logo) ? $brand->logo : 'img/cove/logo.png')}}" ></a>
                    <h2 class="light h2-text">{!! $brand->logo_txt !!}</h2>
                  @endif
                @endforeach
            </div>
        </div>
    </div>
    @endif
@endforeach