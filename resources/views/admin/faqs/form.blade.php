@extends('layouts.admin')
@section('title', trans('global.register'))
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.faq.index') }}"> FAQ </a> </li>
   <li class="breadcrumb-item active" aria-current="page"> {{isset($data->id) ? trans('global.update') : trans('global.register') }} </li>
@endsection
 @section('styles')

 @endsection
@section('content')

@php
 //dump($data->detail)
 //dump($errors)
@endphp


 <div class="card">
      <div class="card-header">{{isset($data->id) ?  trans('global.update') : trans('global.register')}} Showroom</div>

          <div class="card-body">

                  

                      <form class="form-horizontal" role="form" method="POST" action="{{ isset($data) ? route('admin.faq.update', $data->id) : route('admin.faq.store') }}"  enctype="multipart/form-data">
                        @csrf

                        @if(isset($data))
                         @method('PUT')
                        @endif

                        @include('admin.componentes.imagen')
                         <hr>

                         @if(isset($data) && $data->slug != 'faq')

                           <div class="form-group row">
                              <label for="title" class="col-md-2 col-form-label text-md-right">Imagen</label>
                              <div class="col-md-4">
                                

                                <img class="img-fluid" id="logo" src="{{ isset($data->image) ? asset($data->image) : ''  }}">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                <i class="fa fa-search"></i> <input type="file" accept=".png, .jpg, .jpeg" data-idimg="logo" class="imgInp" id="logo" name="logo" >
                                            </span>
                                        </span>
                                        <input type="text" class="form-control @error('logo') is-invalid @enderror" readonly placeholder="Dimensiones: 120 x 120" >
                                         @error('logo')
                                            <em class="invalid-feedback">
                                                {{ $message }}
                                            </em>
                                         @enderror
                                    </div>   
                                    <span class = "text-center" style = "color:red">Dimensiones: 120 x 120</span>

                              </div>

                          </div>

                        @endif


                         <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">Título</label>

                            <div class="col-md-8">

                                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', isset($data) ? $data->title : '') }}" maxlength="100" required="">
  

                               @error('title')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror

                              
                            </div>
                        </div>

                       

            
                         <div class="form-group row">
                             <label for="description" class="col-md-2 col-form-label text-md-right">Descripción </label>
                          <div class="col-md-8" >

                             <textarea  class="ckeditor  @error('description') is-invalid @enderror" name="description" rows="2" maxlength="500" placeholder="{{ trans('global.description') }}">{{old('description',isset($data->description) ? $data->description : '')}}</textarea>
                           
                         </div>

                             @error('description')
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


