@extends('layouts.admin')
@section('title', trans('global.register'))
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.showroom.index') }}"> Showroom </a> </li>
   <li class="breadcrumb-item active" aria-current="page"> {{isset($data->id) ? trans('global.update') : trans('global.register') }} </li>
@endsection
@section('content')

@php
 //dump($data->detail)
//dump($errors)
@endphp

 <div class="card">
      <div class="card-header">{{isset($data->id) ?  trans('global.update') : trans('global.register')}} Showroom</div>

          <div class="card-body">


                       <form class="form-horizontal" role="form" method="POST" action="{{ isset($data) ? route('admin.showroom.update', $data->id) : route('admin.showroom.store') }}"  enctype="multipart/form-data">
                        @csrf

                        @if(isset($data))
                         @method('PUT')
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
                              Imagenes
                           </div>


                            

                        <div class="card-body">
                          <div class="table-responsive">
                              <table id="ctable" class="table table-striped ">
                                <tr class="text-center">
                                  <th >
                                    Imagen
                                  </th>
                                  <th>
                                    Contenido
                                  </th>
                                 
                                </tr>
                                <tbody>
                                  
                                @foreach($data->detail as $key => $detail)

                                   @if($detail->showroom_id > 1)

                                  <tr id="{{'row'.$key}}">
                                     
                                    <td width=" 20%">  
                                          @if(isset($detail->id))
                                            <input type="hidden" name="id[]" value="{{$detail->id}}">
                                          @endif
                                                <img class="img-fluid " id="{{'blah'.$key}}" src="{{ isset($detail->image) ? asset($detail->image) : ''  }}">
                                              <div class="input-group ">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        <i class="fa fa-search"></i> <input type="file" accept=".png, .jpg, .jpeg" data-idimg="{{'blah'.$key}}" class="imgInp" id="{{'img'.$key}}" name="img[]" >
                                                    </span>
                                                </span>
                                                <input type="text" class=" form-control imgInp @error('img.'.$key) is-invalid @enderror" readonly>
                                                 @error('img.'.$key)
                                                    <em class="invalid-feedback">
                                                          {{ $message }}
                                                    </em>
                                                  @enderror
                                            </div>  
                                            <span style = "color:red">Dimensones: 650 x 490</span>   
                                      </td>

                                      <td>
                                       
                                        <div class="form-group row">
                                                <div class="col">
                                                  <input id="{{'title'.$key}}" name="title_d[]" type="text" class="form-control @error('title_d.'.$key) is-invalid @enderror" value="{{ old('title_d.'.$key, isset($detail->title) ? $detail->title : '') }}" maxlength="100" required="" placeholder="TITULO">


                                                 @error('title_d.'.$key)
                                                     <em class="invalid-feedback">
                                                          {{ $message }}
                                                      </em>
                                                 @enderror
                                             </div>
                                            
                                        </div>

                                        <div class="form-group row">

                                            <div class="col">
                                                <textarea class="form-control  @error('description_d.'.$key) is-invalid @enderror" name="description_d[]" rows="2" maxlength="550" placeholder="{{ trans('global.description') }}">{{old('description_d.'.$key,isset($detail->description) ? $detail->description : '')}}</textarea>

                                               @error('description_d.'.$key)
                                                   <em class="invalid-feedback">
                                                        {{ $message }}
                                                    </em>
                                               @enderror
                                             </div>
                                          
                                        </div>
                                       
                                      </td>

                                  </tr>
                                  @else
                                    <tr id="{{'row'.$key}}">
                                           <td width="20%">
                                     @if(isset($detail->id))
                                            <input type="hidden" name="id[]" value="{{$detail->id}}">
                                          @endif
                                                <img class="img-fluid " id="{{'blah'.$key}}" src="{{ isset($detail->image) ? asset($detail->image) : ''  }}">
                                             
                                              
                                            </td> 
                                            <td style="vertical-align: middle;">
                                               <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        <i class="fa fa-search"></i> <input type="file" accept=".png, .jpg, .jpeg" data-idimg="{{'blah'.$key}}" class="imgInp" id="{{'img'.$key}}" name="img[]" >
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                                 @error('img.'.$key)
                                                             <em class="invalid-feedback">
                                                                  {{ $message }}
                                                              </em>
                                                  @enderror
                                            </div>   
                                          </td>
                                           
                                        </tr>  
                                   @endif

                                   @endforeach
                                  
                                </tbody>
                              </table>
                          </div>
                        </div>

                      </div>

                      
                       <button type="submit" id='btnsummit' class="btn btn-primary mt-1">{{ trans('global.save') }}</button>

                    </form> 

                </div>

  
@endsection


@section('scripts')
@parent

<script src="{{ asset('js/vendor/ckeditor.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/translations/es.js"></script>
<script>

   let fila = {{isset($data->detail) ? count($data->detail)  : 0}};

  $(document).on('click', '#add', function(){
   fila ++;

   var htmlTags = `<tr id="row${fila}">
                <td width="20%">     
                      <img class="img-fluid " id="blah${fila}" src="">
                                <div class="input-group">
                                  <span class="input-group-btn">
                                      <span class="btn btn-primary btn-file">
                                        <i class="fa fa-search"></i> <input type="file" accept=".jpg, .jpeg" data-idimg="blah${fila}" class="imgInp" id="img${fila}" name="img[]" >
                                      </span>
                                  </span>
                    <input type="text" class="form-control" readonly>
                                                                  
                </td>
                <td style="vertical-align: middle;"> 

                  <div class="form-group row">
                        <div class="col">
                          <input id="title${fila}" name="title_d[]" type="text" class="form-control @error('title_d.'.$key) is-invalid @enderror" value="{{ old('title_d.${fila}') }}" maxlength="100" required="" placeholder="TITULO">


                                  @error('title_d.${fila}')
                                    <em class="invalid-feedback">
                                          {{ $message }}
                                        </em>
                                    @enderror
                          </div>
                                            
                                        </div>

                     <div class="form-group row">

                        <div class="col">
                            <textarea class="form-control  @error('description_d.${fila}') is-invalid @enderror" name="description_d[]" rows="2" maxlength="550" placeholder="{{ trans('global.description') }}">{{old('description_d.${fila}')}}</textarea>

                                  @error('description_d.${fila}')
                                        <em class="invalid-feedback">
                                          {{ $message }}
                                        </em>
                                  @enderror
                        </div>
                                          
                      </div>
                  
                </td>
                <td style="vertical-align: middle;"> <a id="${fila}" class="btn btn-outline-danger btn_remove">
                  <i class="fa fa-trash" > </i></a
                 ></td>
                 </tr>`;
       
      
   $('#ctable tbody').append(htmlTags);

});


$(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
});


</script>

@endsection


