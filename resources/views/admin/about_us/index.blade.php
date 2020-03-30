@extends('layouts.admin')
@section('title', trans('global.contacts'))
@section('breadcrumb')   
   <li class="breadcrumb-item active" aria-current="page"> Nosotros {{isset($data->id) ? trans('global.update') : trans('global.register') }} </li>
@endsection
@section('content')

 <div class="card">
      <div class="card-header">Nosotros </div>
          <div class="card-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ is_null($data) ?  route('admin.about_us.store') : route('admin.about_us.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf

                        @if(isset($data))

                        @method('PUT')
                        @endif

                        @include('admin.componentes.imagen')
                          <hr>

                         <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">Titulo 1</label>

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
                             <label for="description" class="col-md-2 col-form-label text-md-right">Descripción 1</label>
                          <div class="col-md-8">

                             <textarea class="ckeditor  @error('description') is-invalid @enderror" name="description" rows="2" maxlength="500" placeholder="{{ trans('global.description') }}">{{old('description',isset($data->description) ? $data->description : '')}}</textarea>
                           
                         </div>

                             @error('description')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror

                        </div>

                    <div class="card">
                        <div class="card-header">
                             Objetivo
                        </div>

                       <div class="card-body">
                          <div class="table-responsive">
                              <table id="imgTable" class="table">
                                <tr>
                                  <th >
                                    Imagen
                                  </th>
                                  <th >
                                    Contenido
                                  </th>
                                </tr>
                                <tbody>
                                  
                                  <tr>
                                     
                                    <td width=" 20%">  
                                         
                                      <img class="img-fluid" id="blah0" src="{{ isset($data->imag_obj) ? asset($data->imag_obj) : ''  }}">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        <i class="fa fa-search"></i> <input type="file" accept=".jpg, .jpeg" data-idimg="blah0" class="imgInp" id="imgObj" name="imgObj" >
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                                 @error('img')
                                                             <em class="invalid-feedback">
                                                                  {{ $message }}
                                                              </em>
                                                  @enderror
                                            </div>  
                                            <span class = "text-center" style = "color:red">650 x 500</span> 
                                      </td>

                                      <td>
                                        <div class="form-group row">
                                                <div class="col">
                                                  <input id="title_obj" name="title_obj" type="text" class="form-control @error('title_obj') is-invalid @enderror" value="{{ old('title_obj', isset($data->title_obj) ? $data->title_obj : '') }}" maxlength="100" required="" placeholder="TITULO Objetivo">


                                                 @error('title_obj')
                                                     <em class="invalid-feedback">
                                                          {{ $message }}
                                                      </em>
                                                 @enderror
                                             </div>
                                            
                                        </div>

                                        <div class="form-group row">

                                            <div class="col">
                                                <textarea class="ckeditor  @error('description') is-invalid @enderror" name="description" rows="2" maxlength="550" placeholder="{{ trans('global.description') }}">{{old('description_obj',isset($data->description_obj) ? $data->description_obj : '')}}</textarea>

                                               @error('description_obj')
                                                   <em class="invalid-feedback">
                                                        {{ $message }}
                                                    </em>
                                               @enderror
                                             </div>
                                          
                                        </div>
                                      </td>

                                  </tr>

                                </tbody>
                              </table>
                          </div>
                        </div>
                    </div>

                    <div class="form-group row">
                            <label for="title_d" class="col-md-2 col-form-label text-md-right">Titulo 2</label>

                            <div class="col-md-8">

                                <input id="title_d" name="title_d" type="text" class="form-control @error('title_d') is-invalid @enderror" value="{{ old('title_d', isset($data) ? $data->title_d : '') }}" maxlength="100">


                               @error('title_d')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                             <label for="description_d" class="col-md-2 col-form-label text-md-right">Descripción 2</label>
                          <div class="col-md-8">

                             <textarea class="ckeditor  @error('description_d') is-invalid @enderror" name="description_d" rows="2" maxlength="500" placeholder="{{ trans('global.description') }}">{{old('description_d',isset($data->description_d) ? $data->description_d : '')}}</textarea>
                           
                         </div>

                             @error('description_d')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror

                        </div>

                          <div class="card">
                          <div class="card-header">
                              Slide
                              
                           </div>

                            
                        <div class="card-body">
                          <div class="table-responsive">
                            <table id="slideTable" class="table table-striped">
                              <thead>
                                
                              </thead>

                              <tbody>

                                @if(isset($slide) && count($slide) > 0)

                                  @foreach($slide as $key => $slid)

                                  <tr id="{{'row'.$key}}">
                                           <td width="20%">
                                     @if(isset($slid->id))
                                              <input type="hidden" name="id_slide[]" value="{{$slid->id}}">
                                            @endif
                                              <img class="img-fluid" id="{{'slid'.$key}}" src="{{ isset($slid->url) ? asset($slid->url.$slid->name)  : ''  }}">
                                              
                                            </td> 
                                            <td style="vertical-align: middle;">
                                              <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <span class="btn btn-primary btn-file">
                                                          <i class="fa fa-search"></i> <input type="file" accept=".jpg, .jpeg" data-idimg="{{'slid'.$key}}" class="imgInp" id="{{'slide'.$key}}" name="slide[]" >
                                                      </span>
                                                  </span>
                                                  <input type="text" class="form-control" readonly>
                                                   @error('img.'.$key)
                                                               <em class="invalid-feedback">
                                                                    {{ $message }}
                                                                </em>
                                                    @enderror
                                              </div>
                                              <span class = "text-center" style = "color:red">650 x 500</span> 

                                            </td>
                                            <td style="vertical-align: middle;"> 
                                              
                                           </td>
                                        </tr>  

                                  @endforeach

                                @endif
                                
                              </tbody>
                              
                            </table>

                          </div>
                           @error('img')
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

<script src="{{ asset('js/vendor/ckeditor.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/translations/es.js"></script>
@endsection
