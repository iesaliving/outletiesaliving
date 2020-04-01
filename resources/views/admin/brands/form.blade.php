@extends('layouts.admin')
@section('title', trans('global.register'))
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.brand.index') }}"> Marcas </a> </li>
   <li class="breadcrumb-item active" aria-current="page"> {{isset($data->id) ? trans('global.update') : trans('global.register') }} </li>
@endsection
@section('content')

@php
 //dump($data->detail)
// dump($errors)
@endphp

 <div class="card">
      <div class="card-header">{{isset($data->id) ?  trans('global.update') : trans('global.register')}} Marca</div>

          <div class="card-body">

                <form class="form-horizontal" role="form" method="POST" action="{{ isset($data) ? route('admin.brand.update', $data->id) : route('admin.brand.store') }}"  enctype="multipart/form-data">
                        @csrf

                        @if(isset($data))
                         @method('PUT')
                        @endif

                         @include('admin.componentes.imagen')


                        <hr>

                        <div class="form-group row">
                             <label for="imglogo" class="col-md-2 col-form-label text-md-right">Logo </label>
                          <div class="col-md-4">

                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        buscar… <input type="file" id="imglogo" name="imglogo" class="imgInp" data-idimg="logo"  accept=".png, .jpg, .jpeg">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            
                           
                         </div>

                         <div class="col-md-4">
                            <div class="d-flex ">
                                <img class="img-fluid" id='logo' src="{{ isset($data->logo) ? asset($data->logo) : ''  }}">
                            </div>
                         </div>

                             @error('imglogo')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror                             

                        </div>

                        <div class="form-group row">

                          <label class="col-md-2 col-form-label text-md-right">Texto imagen</label>

                          <div class="col-md-8">

                             <textarea class="ckeditor  @error('logo_txt') is-invalid @enderror" name="logo_txt" rows="2" maxlength="190" placeholder="{{ trans('global.description') }}">{{old('logo_txt',isset($data->logo_txt) ? $data->logo_txt : '')}}</textarea>

                          </div>

                          @error('logo_txt')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror   

                        </div>



                         <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-8">

                                <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', isset($data) ? $data->name : '') }}" maxlength="100" readonly="">
  

                               @error('name')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror

                              
                            </div>
                        </div>

            
                         <div class="form-group row">
                             <label for="intro" class="col-md-2 col-form-label text-md-right">Descripción </label>
                          <div class="col-md-8">

                             <textarea class="ckeditor  @error('intro') is-invalid @enderror" name="intro" rows="2" maxlength="500" placeholder="{{ trans('global.description') }}">{{old('intro',isset($data->intro) ? $data->intro : '')}}</textarea>
                           
                         </div>

                             @error('intro')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror

                        </div>


                        <div class="form-group row">
                             <label for="imgsoc" class="col-md-2 col-form-label text-md-right">Red social imagen </label>
                          <div class="col-md-8">

                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-facebook btn-file">
                                        buscar <input type="file" id="imgsoc" name="imgsoc" class="imgInp" data-idimg="social"  accept=".png, .jpg, .jpeg">
                                    </span>
                                </span>
                                <input type="text" class="form-control @error('imgsoc') is-invalid @enderror" readonly placeholder="Dimensiones:   1.920 x 400">

                                @error('imgsoc')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror    
                            </div>
                            
                            <br>
                            <img class="img-fluid" id='social' src="{{ isset($data->social_img) ? asset($data->social_img) : ''  }}">
                                               
                         </div>

                                                    

                        </div>

                        <div class="form-group row">

                          <label class="col-md-2 col-form-label text-md-right "> <i class="fa fa-facebook"></i> Facebook url </label>

                          <div class="col-md-8">

                              <input id="social_network" name="social_network" type="text" class="form-control @error('social_network') is-invalid @enderror" value="{{ old('social_network', isset($data) ? $data->social_network : '') }}" maxlength="100" >

                          </div>

                          @error('social_network')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror   

                        </div>

                        <div class="form-group row">

                          <label class="col-md-2 col-form-label text-md-right "> <i class="fa fa-facebook"></i> Anuncio </label>

                          <div class="col-md-8">

                              <input id="social_txt" name="social_txt" type="text" class="form-control @error('social_txt') is-invalid @enderror" value="{{ old('social_txt', isset($data) ? $data->social_txt : '') }}" maxlength="100" >

                          </div>

                          @error('social_txt')
                                  <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                              @enderror   

                          </div>

                        <!-- SECCION -->


                        <div class="card card-accent-primary">
                          <div class="card-header ">
                            Secciones
                          </div>
                          <div class="card-body">

                            <table class="table table-outline table-responsive-sm mb-0">
                              <thead class="thead-light">
                                <tr>
                                  <th>
                                    Imagen
                                  </th>
                                  <th>Contenido</th>
                                </tr>
                              </thead>

                              <tbody>


                          @foreach ($data->detail as $key => $detail)
                               <tr id="{{'row'.$key}}">
                                 <td width=" 20%">
                                     @if(isset($detail->id))
                                            <input type="hidden" name="idbd[]" value="{{$detail->id}}">
                                          @endif
                                            <img class="img-fluid " id="{{'blah'.$key}}" src="{{ isset($detail->image) ? asset($detail->image) : ''  }}">
                                              <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        <i class="fa fa-search"></i> <input type="file" accept=".png, .jpg, .jpeg" data-idimg="{{'blah'.$key}}" class="imgInp" id="{{'img'.$key}}" name="imgs[]" >
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control @error('imgs.'.$key) is-invalid @enderror" readonly>
                                                 @error('imgs.'.$key)
                                                             <em class="invalid-feedback">
                                                                  {{ $message }}
                                                              </em>
                                                  @enderror
                                            </div> 
                                            <span style = "color:red">Dimensones:  {{ ($detail->features == 0) ? '650 x 490' : '407 x 538'}}</span>  
                                 </td>
                                 <td> 

                                   <div class="form-group row">

                                    @if(isset($data))

                                      @if($data->slug == 'plum-wine' && $detail->features == 1)

                                      <input id="{{'title'.$key}}" name="title_d[]" type="hidden" class="form-control @error('title_d.'.$key) is-invalid @enderror" value="..." maxlength="100"  placeholder="TITULO">

                                                     @error('title_d.'.$key)
                                                         <em class="invalid-feedback">
                                                              {{ $message }}
                                                          </em>
                                                    @enderror


                                      @else

                                        <div class="col-9">
                                                
                                                      <input id="{{'title'.$key}}" name="title_d[]" type="text" class="form-control @error('title_d.'.$key) is-invalid @enderror" value="{{ old('title_d.'.$key, isset($detail->title) ? $detail->title : '') }}" maxlength="100" required="" placeholder="TITULO">


                                                     @error('title_d.'.$key)
                                                         <em class="invalid-feedback">
                                                              {{ $message }}
                                                          </em>
                                                    @enderror
                                        </div>  
                                       @endif

                                   
                                      @endif
                              



                                        <div class="col-2">

                                          <div class="custom-control custom-switch">
                                          
                                            <input type="checkbox" class="custom-control-input" name="feature[]" id="{{$key}}" value="1" onclick="ch('{{'f'.$key}}')"  {{ (isset($detail->features)) && ($detail->features == 1)  ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="{{$key}}">Feature</label>

                                             <input type="hidden" name="feat[]" value="{{ isset($detail) ? $detail->features : 0 }}" id="{{'f'.$key}}" />
                                            
                                          </div>
                                        </div>
                                            
                                        </div>

                                        <div class="form-group row">

                                            <div class="col">
                                                <textarea class="ckeditor  @error('description_d.'.$key) is-invalid @enderror" name="description_d[]" rows="2" maxlength="550" placeholder="{{ trans('global.description') }}">{{old('description_d.'.$key,isset($detail->description) ? $detail->description : '')}}</textarea>

                                               @error('description_d.'.$key)
                                                   <em class="invalid-feedback">
                                                        {{ $message }}
                                                    </em>
                                               @enderror
                                             </div>
                                          
                                        </div>

                                        
                                      </td>
                                 </td>
                               </tr>

                          @endforeach

                                
                              </tbody>
                              
                            </table>
                            
                          </div>
                        </div>
                         <!-- FIN SECCION -->
          
                       <button type="submit" id='btnsummit' class="btn btn-primary btn-square mt-1">{{ trans('global.save') }}</button>

                    </form> 

                </div>
  
@endsection


@section('scripts')
@parent

<script src="{{ asset('js/vendor/ckeditor.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/translations/es.js"></script>

<script type="text/javascript">
  function ch(val2) {
    var s= document.getElementById(val2);
    s.value = s.value == 1 ? 0 : 1;
  }
</script>


@endsection


