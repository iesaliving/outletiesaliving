@extends('layouts.admin')
@section('title', trans('global.contacts'))
@section('breadcrumb')   
   <li class="breadcrumb-item active" aria-current="page"> Contacto {{isset($data->id) ? trans('global.update') : trans('global.register') }} </li>
@endsection
@section('content')


 <div class="card">
      <div class="card-header">Contacto </div>
          <div class="card-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ is_null($data) ?  route('admin.contacts.store') : route('admin.contacts.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf

                        @if(isset($data))

                        @method('PUT')
                        @endif

                         @include('admin.componentes.imagen')
                          <hr>

                         <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">{{ trans('global.name') }}</label>

                            <div class="col-md-8">

                                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', isset($data) ? $data->title : '') }}" maxlength="100">


                               @error('title')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                             <label for="description" class="col-md-2 col-form-label text-md-right">Descripción </label>
                          <div class="col-md-8">

                             <textarea class="ckeditor  @error('description') is-invalid @enderror" name="description" rows="2" maxlength="500" placeholder="{{ trans('global.description') }}">{{old('description',isset($data->description) ? $data->description : '')}}</textarea>
                           
                         </div>

                             @error('description')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror

                        </div>


                      <button type="submit" id='btnsummit' class="btn btn-primary my-2">{{ trans('global.save') }}</button>
                    </form> 

                </div>

@endsection

@section('scripts')
@parent

<script src="{{ asset('js/vendor/ckeditor.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/translations/es.js"></script>
@endsection
