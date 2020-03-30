@extends('layouts.admin')
@section('title', trans('global.register'))
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.testimonies.index') }}"> Testimonios </a> </li>
   <li class="breadcrumb-item active" aria-current="page"> {{isset($data->id) ? trans('global.update') : trans('global.register') }} </li>
@endsection
@section('content')

@php
 //dump($data)
 //dump($errors)
@endphp

 <div class="card">
      <div class="card-header">{{isset($data->id) ?  trans('global.update') : trans('global.register')}} Testimonio</div>

                <div class="card-body">

                       <form class="form-horizontal" role="form" method="POST" action="{{ isset($data) ? route('admin.testimonies.update', $data->id) : route('admin.testimonies.store') }}"  enctype="multipart/form-data">
                        @csrf

                        @if(isset($data))

                        @method('PUT')
                        @endif

                         <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ trans('global.name') }}</label>

                            <div class="col-md-8">

                                <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', isset($data) ? $data->name : '') }}" maxlength="100" required="">
  

                               @error('name')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror

                              
                            </div>
                        </div>

                         <div class="form-group row">
                             <label for="phone" class="col-md-2 col-form-label text-md-right">Imagen</label>
                              
                             <div class="custom-file col-md-5 mx-3">
                                <input type="file" class="custom-file-input @error('imgInp') is-invalid @enderror" id="imgInp" name="imgInp" accept=".png, .jpg, .jpeg" >
                                <label class="custom-file-label" for="imgInp_hover">Dimensiones: 184 x 184</label>
                                 @error('imgInp')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                                   @enderror
                            </div>

                            <div class="col-md-4">
                              <img class="rounded w-25 " id='img-upload' src="{{ isset($data->image) ? asset($data->image) : ''  }}">
                              </div> 

                        </div>



                         <div class="form-group row">
                             <label for="text" class="col-md-2 col-form-label text-md-right">Contenido </label>
                          <div class="col-md-8">

                             <textarea class="ckeditor  @error('text') is-invalid @enderror" name="text" rows="2" maxlength="600" placeholder="{{ trans('global.description') }}">{{old('text',isset($data->text) ? $data->text : '')}}</textarea>
                           
                         </div>

                             @error('text')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror

                        </div>




                      
                       <button type="submit" id='btnsummit' class="btn btn-primary mt-1">{{ trans('global.save') }}</button>

                    </form> 

                </div>

@endsection


@section('scripts')
@parent

<script src="{{ asset('js/vendor/ckeditor.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/translations/es.js"></script>
@endsection
