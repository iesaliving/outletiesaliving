@extends('layouts.admin')
@section('title', 'Servicios')
@section('breadcrumb')   
   <li class="breadcrumb-item active" aria-current="page"> Servicios {{isset($data->id) ? trans('global.update') : trans('global.register') }} </li>
@endsection
@section('content')


 <div class="card">
      <div class="card-header">Servicios </div>
          <div class="card-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ is_null($data) ?  route('admin.services.store') : route('admin.services.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf

                        @if(isset($data))

                        @method('PUT')
                        @endif

                         @include('admin.componentes.imagen')
                          <hr>

                         <div class="form-group row">

                            <div class="col">

                                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', isset($data) ? $data->title : '') }}" maxlength="100" placeholder="Titulo">

                               @error('title')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                             
                          <div class="col">

                             <textarea class="ckeditor  @error('description') is-invalid @enderror" name="description" rows="2" maxlength="700" placeholder="{{ trans('global.description') }}">{{old('description',isset($data->description) ? $data->description : '')}}</textarea>
                           
                         </div>

                             @error('description')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror

                        </div>



                    <div class="card">
                        <div class="card-header">
                              SERVICIO TÉCNICO
                        </div>

                       <div class="card-body">
                              <table id="imgTable" class="table ">
                                <tr>
                                  <th >
                                    Imagen
                                  </th>
                                  <th colspan="2">
                                    Contenido
                                  </th>
                                </tr>
                                <tbody>
                                  
                                  <tr>
                                     
                                    <td width=" 20%">  
                                         
                                      <img class="img-fluid" id="img_st0" src="{{ isset($data->imag_st) ? asset($data->imag_st) : ''  }}">
                                      <div class="input-group">
                                          <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                <i class="fa fa-search"></i> <input type="file" accept=".jpg, .jpeg" data-idimg="img_st0" class="imgInp" id="img_st" name="img_st" >
                                            </span>
                                          </span>
                                          <input type="text" class="form-control @error('img_st') is-invalid @enderror" readonly>
                                            @error('img_st')
                                                <em class="invalid-feedback">
                                                   {{ $message }}
                                                </em>
                                            @enderror
                                        </div> 
                                          <span class = "text-center" style = "color:red">Dimensiones: 650 x 490</span>  
                                      </td>

                                      <td>
                                        <div class="form-group row">
                                                <div class="col">
                                                  <input id="title_st" name="title_st" type="text" class="form-control @error('title_st') is-invalid @enderror" value="{{ old('title_st', isset($data->title_st) ? $data->title_st : '') }}" maxlength="100" required="" placeholder="TITULO">


                                                 @error('title_st')
                                                     <em class="invalid-feedback">
                                                          {{ $message }}
                                                      </em>
                                                 @enderror
                                             </div>
                                            
                                        </div>

                                        <div class="form-group row">

                                            <div class="col">
                                                <textarea class="form-control  @error('description_st') is-invalid @enderror" name="description_st" rows="2" maxlength="700" placeholder="{{ trans('global.description') }}">{{old('description_st',isset($data->description_st) ? $data->description_st : '')}}</textarea>

                                               @error('description_st')
                                                   <em class="invalid-feedback">
                                                        {{ $message }}
                                                    </em>
                                               @enderror
                                             </div>
                                          
                                        </div>

                                       <div class="form-group row">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-outline-success btn-file">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                </span>

                                                <div class="col">
                                                  <input id="telf_st" name="telf_st" type="text" class="form-control @error('telf_st') is-invalid @enderror" value="{{ old('telf_st', isset($data->telf_st) ? $data->telf_st : '') }}" maxlength="100" required="" placeholder="Telefono">


                                                 @error('telf_st')
                                                     <em class="invalid-feedback">
                                                          {{ $message }}
                                                      </em>
                                                 @enderror
                                                </div>
                                               
                                            </div>
                                         </div>   

                                        <div class="form-group row">
                                           <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-outline-success btn-file">
                                                        <i class="fa fa-whatsapp"></i>
                                                    </span>
                                                </span>

                                                <div class="col">
                                                  <input id="telw_st" name="telw_st" type="text" class="form-control @error('telw_st') is-invalid @enderror" value="{{ old('telw_st', isset($data->telw_st) ? $data->telw_st : '') }}" maxlength="100" required="" placeholder="Whatsapp">


                                                 @error('telw_st')
                                                     <em class="invalid-feedback">
                                                          {{ $message }}
                                                      </em>
                                                 @enderror
                                                </div>
                                               
                                            </div>   
                                         </div> 

                                        <div class="form-group row">
                                           <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-outline-success btn-file">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </span>
                                                </span>

                                                <div class="col">
                                                  <input id="email_st" name="email_st" type="text" class="form-control @error('email_st') is-invalid @enderror" value="{{ old('email_st', isset($data->email_st) ? $data->email_st : '') }}" maxlength="100" required="" placeholder="Whatsapp">


                                                 @error('email_st')
                                                     <em class="invalid-feedback">
                                                          {{ $message }}
                                                      </em>
                                                 @enderror
                                                </div>
                                               
                                            </div>   
                                         </div> 
                                            
                                       
                                      </td>

                                  </tr>

                                </tbody>
                              </table>

                        </div>
                    </div>

                    <div class="form-group row">

                            <div class="col">

                                <input id="title2" name="title2" type="text" class="form-control @error('title2') is-invalid @enderror" value="{{ old('title2', isset($data) ? $data->title2 : '') }}" maxlength="100" placeholder="Titulo 2">


                               @error('title2')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                          <div class="col">

                             <textarea class="form-control  @error('description2') is-invalid @enderror" name="description2" rows="2" maxlength="700" placeholder="{{ trans('global.description') }}">{{old('description2',isset($data->description2) ? $data->description2 : '')}}</textarea>
                           
                         </div>

                             @error('description2')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror

                        </div>


                        <!-- cita de servicio -->
                         <div class="card">
                        <div class="card-header">
                              CITA DE SERVICIO
                        </div>

                       <div class="card-body">
                              <table id="imgTable" class="table ">
                                <tr>
                                  <th >
                                    Imagen
                                  </th>
                                  <th colspan="2">
                                    Contenido
                                  </th>
                                </tr>
                                <tbody>
                                  
                                  <tr>
                                     
                                    <td width=" 20%">  
                                         
                                      <img class="img-fluid" id="imag_cs0" src="{{ isset($data->imag_cs) ? asset($data->imag_cs) : ''  }}">
                                      <div class="input-group">
                                          <span class="input-group-btn">
                                              <span class="btn btn-primary btn-file">
                                                        <i class="fa fa-search"></i> <input type="file" accept=".jpg, .jpeg" data-idimg="imag_cs0" class="imgInp" id="imag_cs" name="imag_cs" >
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control @error('imag_cs') is-invalid @enderror" readonly>
                                                 @error('imag_cs')
                                                             <em class="invalid-feedback">
                                                                  {{ $message }}
                                                              </em>
                                                  @enderror
                                            </div>  
                                            <span class = "text-center" style = "color:red">Dimensiones: 650 x 490</span>   
                                      </td>

                                      <td>
                                        <div class="form-group row">
                                            <div class="col">
                                                  <input id="title_cs" name="title_cs" type="text" class="form-control @error('title_cs') is-invalid @enderror" value="{{ old('title_cs', isset($data->title_cs) ? $data->title_cs : '') }}" maxlength="100" required="" placeholder="TITULO CITA DE SERVICIO">

                                                 @error('title_cs')
                                                     <em class="invalid-feedback">
                                                          {{ $message }}
                                                      </em>
                                                 @enderror
                                             </div>
                                            
                                        </div>

                                        <div class="form-group row">

                                            <div class="col">
                                                <textarea class="form-control  @error('description_cs') is-invalid @enderror" name="description_cs" rows="2" maxlength="700" placeholder="{{ trans('global.description') }}">{{old('description_cs',isset($data->description_cs) ? $data->description_cs : '')}}</textarea>

                                               @error('description_cs')
                                                   <em class="invalid-feedback">
                                                        {{ $message }}
                                                    </em>
                                               @enderror
                                             </div>
                                          
                                        </div>

                                       <div class="form-group row">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-outline-success btn-file">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                </span>

                                                <div class="col">
                                                  <input id="telf_cs" name="telf_cs" type="text" class="form-control @error('telf_cs') is-invalid @enderror" value="{{ old('telf_cs', isset($data->telf_cs) ? $data->telf_cs : '') }}" maxlength="100" required="" placeholder="Telefono">


                                                 @error('telf_cs')
                                                     <em class="invalid-feedback">
                                                          {{ $message }}
                                                      </em>
                                                 @enderror
                                                </div>
                                               
                                            </div>
                                         </div>   

                                        <div class="form-group row">
                                           <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-outline-success btn-file">
                                                        <i class="fa fa-whatsapp"></i>
                                                    </span>
                                                </span>

                                                <div class="col">
                                                  <input id="telw_cs" name="telw_cs" type="text" class="form-control @error('telw_cs') is-invalid @enderror" value="{{ old('telw_cs', isset($data->telw_cs) ? $data->telw_cs : '') }}" maxlength="100" required="" placeholder="Whatsapp">


                                                 @error('telw_cs')
                                                     <em class="invalid-feedback">
                                                          {{ $message }}
                                                      </em>
                                                 @enderror
                                                </div>
                                               
                                            </div>   
                                         </div> 

                                        <div class="form-group row">
                                           <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-outline-success btn-file">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </span>
                                                </span>

                                                <div class="col">
                                                  <input id="email_cs" name="email_cs" type="text" class="form-control @error('email_cs') is-invalid @enderror" value="{{ old('email_cs', isset($data->email_cs) ? $data->email_cs : '') }}" maxlength="100" required="" placeholder="Whatsapp">


                                                 @error('email_cs')
                                                     <em class="invalid-feedback">
                                                          {{ $message }}
                                                      </em>
                                                 @enderror
                                                </div>
                                               
                                            </div>   
                                         </div> 
                                            
                                       
                                      </td>

                                  </tr>

                                </tbody>
                              </table>

                        </div>
                    </div>

                    <!-- fin cita de servicio -->

                      <div class="form-group row">

                            <div class="col">

                                <input id="title3" name="title3" type="text" class="form-control @error('title3') is-invalid @enderror" value="{{ old('title3', isset($data) ? $data->title3 : '') }}" maxlength="100" placeholder="Titulo 3">


                               @error('title3')
                                   <em class="invalid-feedback">
                                        {{ $message }}
                                    </em>
                               @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                          <div class="col">

                             <textarea class="ckeditor  @error('description3') is-invalid @enderror" name="description3" rows="2" maxlength="700" placeholder="{{ trans('global.description') }}">{{old('description3',isset($data->description3) ? $data->description3 : '')}}</textarea>
                           
                         </div>

                             @error('description3')
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
                              <table id="ctable" class="table table-striped ">
                                <tr class="text-center">
                                  <th >
                                    Imagen
                                  </th>
                                  <th>
                                    Contenido
                                  </th>
                                  <!-- <th>
                                    <a id="add" class="btn btn-outline-success">
                                      <i class="fa fa-plus" aria-hidden="true"> </i>
                                    </a>
                                  </th> -->
                                </tr>
                                <tbody>
                                  
                                @foreach($detail as $key => $det)

                                  <tr id="{{'row'.$key}}">
                                     
                                    <td width=" 20%">  
                                          @if(isset($det->id))
                                            <input type="hidden" name="id[]" value="{{$det->id}}">
                                          @endif
                                                <img class="img-fluid " id="{{'blah'.$key}}" src="{{ isset($det->image) ? asset($det->image) : ''  }}">
                                              <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        <i class="fa fa-search"></i> <input type="file" accept=".png, .jpg, .jpeg" data-idimg="{{'blah'.$key}}" class="imgInp" id="{{'img'.$key}}" name="img[]" >
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control @error('img.'.$key) is-invalid @enderror" readonly>
                                                 @error('img.'.$key)
                                                             <em class="invalid-feedback">
                                                                  {{ $message }}
                                                              </em>
                                                  @enderror
                                            </div>
                                            <span class = "text-center" style = "color:red">Dimensiones: 650 x 490</span>     
                                      </td>

                                      <td>
                                        <div class="form-group row">
                                                <div class="col">
                                                  <input id="{{'title'.$key}}" name="title_d[]" type="text" class="form-control @error('title_d.'.$key) is-invalid @enderror" value="{{ old('title.'.$key, isset($det->title) ? $det->title : '') }}" maxlength="100" required="" placeholder="TITULO">


                                                 @error('title_d.'.$key)
                                                     <em class="invalid-feedback">
                                                          {{ $message }}
                                                      </em>
                                                 @enderror
                                             </div>
                                            
                                        </div>

                                        <div class="form-group row">

                                            <div class="col">
                                                <textarea class="form-control  @error('description_d.'.$key) is-invalid @enderror" name="description_d[]" rows="2" maxlength="550" placeholder="{{ trans('global.description') }}">{{old('description_d.'.$key,isset($det->description) ? $det->description : '')}}</textarea>

                                               @error('description_d.'.$key)
                                                   <em class="invalid-feedback">
                                                        {{ $message }}
                                                    </em>
                                               @enderror
                                             </div>
                                          
                                        </div>
                                      </td>

                                  <!--     <td width="5%" class="align-middle ">
                                          <a id="{{$key}}" class=" btn btn-outline-danger"> <i class="fa fa-trash" aria-hidden="true"> </i></a>
                                     </td> -->

                                  </tr>

                                   @endforeach
                                  
                                </tbody>
                              </table>
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
