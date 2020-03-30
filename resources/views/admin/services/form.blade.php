@extends('layouts.admin')
@section('title', trans('global.register'))
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.services.index') }}"> {{ trans('global.services') }} </a> </li>
   <li class="breadcrumb-item active" aria-current="page"> {{isset($data->id) ? trans('global.update') : trans('global.register') }} </li>
@endsection
@section('content')

@php
 //dump($data)
 //dump($errors)
@endphp

 <div class="card">
      <div class="card-header">{{isset($data->id) ?  trans('global.update') : trans('global.register')}} {{ trans('global.services') }}</div>

                <div class="card-body">

                       <form class="form-horizontal" role="form" method="POST" action="{{ isset($data) ? route('admin.services.update', $id) : route('admin.services.store') }}">
                        @csrf

                        @if(isset($data))

                        @method('PUT')
                        @endif

                         <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ trans('global.id_material') }}</label>

                            <div class="col-md-8">

                                <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', isset($data) ? $data->name : '') }}">


                               @error('name')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror
                            </div>
                        </div>

                         <div class="form-group row @error('status') is-invalid @enderror">
                                    <label class="col-md-2 col-form-label text-md-right" for="status">Status*</label>
                              <div class="col-md-8">
                                    <select name="status" id="status" class="form-control select2">
                                        @foreach($option as $id => $option)
                                             <option value="{{ $id }}" {{ (in_array($id, old('data', [])) || isset($data) && $data->status==$id) ? 'selected' : '' }}>
                                                    {{ $option }}
                                                </option>
                                         @endforeach
                                    </select>
                                   @error('status')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                                   @enderror
                                </div>
                              </div>



                         <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="italian-tab" data-toggle="tab" href="#italian" role="tab" aria-controls="italian" aria-selected="true">Italiano</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="english-tab" data-toggle="tab" href="#english" role="tab" aria-controls="english" aria-selected="false">Inglese</a>
                          </li>
                        
                        </ul>

                        

                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="italian" role="tabpanel" aria-labelledby="italian-tab">
                          
                              @if(isset($data->detail[0]->id))
                                 <input id="id" name="id[]" type="hidden" value="{{ $data->detail[0]->id }}">
                              @endif


                        <div class="form-group row">

                            <label for="title" class="col-md-4 col-form-label">{{ trans('global.title_material') }}</label>

                            <div class="col-md-12">

                                <input id="title" name="title[]" maxlength="128" type="text" placeholder="{{ trans('global.title_material') }}" class="form-control @error('title.0') is-invalid @enderror" value="{{old('title.0',isset($data->detail[0]->title) ? $data->detail[0]->title : '')}}">


                               @error('title.0')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror
                            </div>


                        </div>

                            
                             <label for="body" class="col-md-4 col-form-label">{{ trans('global.description') }}</label>

                            <textarea name="body[]" id="body" class="@error('body.0') is-invalid @enderror ckeditor">{{old('body.0',isset($data->detail[0]->body) ? $data->detail[0]->body : '')}}</textarea>

                             @error('body.0')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror


                          </div>
                          <div class="tab-pane fade" id="english" role="tabpanel" aria-labelledby="english-tab">

                                    @if(isset($data->detail[1]->id))
                                       <input id="id" name="id[]" type="hidden" type="text" value="{{ $data->detail[1]->id }}">
                                    @endif


                       <div class="form-group row">

                        <label for="title" class="col-md-4 col-form-label">{{ trans('global.title_material') }}</label>

                            <div class="col-md-12">

                                <input id="title" name="title[]" maxlength="128" type="text" placeholder="{{ trans('global.title') }}" class="form-control @error('title.1') is-invalid @enderror" value="{{old('title.1',isset($data->detail[1]->title) ? $data->detail[1]->title : '')}}">


                               @error('title.1')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror
                            </div>


                        </div>
                         
                          <label for="body" class="col-md-4 col-form-label">{{ trans('global.description') }}</label>

                         <textarea name="body[]" id="body" class="@error('body.1') is-invalid @enderror ckeditor">{{old('body.1',isset($data->detail[1]->body) ? $data->detail[1]->body : '')}}</textarea>

                             @error('body.1')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror
                         
                        </div>
                      </div>
                       
                        <button type="submit" id='btnsummit' class="btn btn-primary my-2">{{ trans('global.save') }}</button>

                    </form> 

                </div>

@endsection

@section('scripts')
@parent
<script>
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('servTab', $(e.target).attr('href'));
    });
    var servTab = localStorage.getItem('servTab');
    if(servTab){
        @error('body.1','title.1') 
               pTab= "#english"                     
        @enderror

        @if ($errors->has('body.0','title.0'))
               pTab= "#italian"                     
        @endif

        $('#myTab a[href="' + servTab + '"]').tab('show');
    }

});
</script>
@endsection