@extends('layouts.admin')
@section('title', trans('global.register'))
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.leads.index') }}"> Leads </a> </li>
   <li class="breadcrumb-item active" aria-current="page"> {{isset($data->leadsId) ? trans('global.update') : trans('global.register') }} </li>
@endsection
@section('content')

@php
 //dump($data)
 //dump($errors)
@endphp


 <div class="card">
      <div class="card-header">{{isset($data->leadsId) ?  trans('global.update') : trans('global.register')}} Leads
                              @if(isset($data->leadsId))
                                <a class="btn  mx-1 float-right btn-success fa fa-money" href="{{ route('admin.leads.prospecto', ['leadsId'=>$data->leadsId]) }}"></a>
                              @endif()


      </div>

                <div class="card-body">


                       <form class="form-horizontal" role="form" method="POST" action="{{ isset($data) ? route('admin.leads.update') : route('admin.leads.store') }}"  enctype="multipart/form-data">
                        @csrf

                        @if(isset($data))
                         <input type="hidden" name="leadsId" value="{{$data->leadsId}}">
                        @method('PUT')
                        @endif


                        <div class="row col-12">
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="First_Name" class="col-md-12 col-form-label text-md-left">Nombre</label>

                                <div class="col-md-12">

                                    <input required id="First_Name" name="First_Name" type="text" class="form-control @error('First_Name') is-invalid @enderror" value="{{ old('First_Name', isset($data) ? $data->First_Name : '') }}" maxlength="100">
      

                                   @error('First_Name')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Last_Name" class="col-md-12 col-form-label text-md-left">Apellido</label>

                                <div class="col-md-12">

                                    <input required id="Last_Name" name="Last_Name" type="text" class="form-control @error('Last_Name') is-invalid @enderror" value="{{ old('Last_Name', isset($data) ? $data->Last_Name : '') }}" maxlength="100">
      

                                   @error('Last_Name')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Phone" class="col-md-12 col-form-label text-md-left">Teléfono</label>

                                <div class="col-md-12">

                                    <input required id="Phone" name="Phone" type="text" class="telefono form-control @error('Phone') is-invalid @enderror" value="{{ old('Phone', isset($data) ? $data->Phone : '') }}" maxlength="100">
      

                                   @error('Phone')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  

                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Email" class="col-md-12 col-form-label text-md-left">Email</label>

                                <div class="col-md-12">

                                    <input required id="Email" name="Email" type="email" class="form-control @error('Email') is-invalid @enderror" value="{{ old('Email', isset($data) ? $data->Email : '') }}" maxlength="100">
      

                                   @error('Email')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Marca" class="col-md-12 col-form-label text-md-left">Marca</label>

                                <div class="col-md-12">

                                    <select id="Marca" name="Marca[]" multiple="" class="form-control @error('Marca') is-invalid @enderror" data-live-search="true">
                                      @foreach ($marcas as $marca)

                                        <option value="{{$marca['actualValue']}}">{{$marca['displayValue']}}
                                        </option>
                                      @endforeach
                                    </select>
      

                                   @error('marca')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Producto" class="col-md-12 col-form-label text-md-left">Producto</label>

                                <div class="col-md-12">

                                    <input id="Producto" name="Producto" type="text" class="form-control @error('Producto') is-invalid @enderror" value="{{ old('Producto', isset($data) ? $data->Producto : '') }}" maxlength="100">
      

                                   @error('Producto')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Estado" class="col-md-12 col-form-label text-md-left">Ubicación</label>

                                <div class="col-md-12">

                                    <select id="Estado" name="Estado" class="form-control @error('Estado') is-invalid @enderror"  data-live-search="true">
                                      @foreach ($ubicaciones as $ubicacion)
                                        <option 
                                        @if (isset($data))
                                            @if ($data->Estado == $ubicacion['actualValue'])
                                              selected="selected" 
                                            @endif
                                          @endif
                                          @if (old('ubicacion') ==  $ubicacion['actualValue']) 
                                            selected="selected" 
                                          @endif 
                                        value="{{$ubicacion['actualValue']}}">
                                      {{$ubicacion['displayValue']}}
                                    </option>
                                      @endforeach
                                      
                                    </select>
      

                                   @error('Estado')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Lead_Status" class="col-md-12 col-form-label text-md-left">Estado de Lead</label>

                                <div class="col-md-12">

                                    <select id="Lead_Status" name="Lead_Status" class="form-control @error('Lead_Status') is-invalid @enderror" data-live-search="true">
                                      @foreach ($estatus as $estatu)
                                        <option 
                                          @if (isset($data))
                                              @if ($data->estatu == $estatu['displayValue'])
                                                selected="selected" 
                                              @endif
                                            @endif
                                            @if (old('estatu') ==  $estatu['displayValue']) 
                                              selected="selected" 
                                            @endif 
                                        value="{{$estatu['displayValue']}}">
                                          {{$estatu['displayValue']}}
                                      </option>
                                      @endforeach
                                      
                                    </select>
      

                                   @error('Lead_Status')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Nombre_de_Arquitecto" class="col-md-12 col-form-label text-md-left">Nombre del Arquitecto</label>

                                <div class="col-md-12">

                                    <input id="Nombre_de_Arquitecto" name="Nombre_de_Arquitecto" type="text" class="form-control @error('Nombre_de_Arquitecto') is-invalid @enderror" value="{{ old('Nombre_de_Arquitecto', isset($data) ? $data->Nombre_de_Arquitecto : '') }}" maxlength="100">
      

                                   @error('Nombre_de_Arquitecto')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Phone_Arquitecto" class="col-md-12 col-form-label text-md-left">Teléfono del Arquitecto</label>

                                <div class="col-md-12">

                                    <input id="Phone_Arquitecto" name="Phone_Arquitecto" type="text" class="telefono form-control @error('Phone_Arquitecto') is-invalid @enderror" value="{{ old('Phone_Arquitecto', isset($data) ? $data->Phone_Arquitecto : '') }}" maxlength="100">
      

                                   @error('Phone_Arquitecto')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Email_Arquitecto" class="col-md-12 col-form-label text-md-left">Email del Arquitecto</label>

                                <div class="col-md-12">

                                    <input id="Email_Arquitecto" name="Email_Arquitecto" type="email" class="form-control @error('Email_Arquitecto') is-invalid @enderror" value="{{ old('Email_Arquitecto', isset($data) ? $data->Email_Arquitecto : '') }}" maxlength="100">
      

                                   @error('Email_Arquitecto')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Lead_Source" class="col-md-12 col-form-label text-md-left">Origen de Lead</label>

                                <div class="col-md-12">

                                    <select id="Lead_Source" name="Lead_Source" class="form-control @error('Lead_Source') is-invalid @enderror" data-live-search="true">
                                      @foreach ($LeadSources as $LeadSource)
                                        <option 
                                        @if (isset($data))
                                              @if ($data->Lead_Source == $LeadSource['displayValue'])
                                                selected="selected" 
                                              @endif
                                            @endif
                                            @if (old('LeadSource') ==  $LeadSource['displayValue']) 
                                              selected="selected" 
                                            @endif 
                                        value="{{$LeadSource['displayValue']}}">
                                        {{$LeadSource['displayValue']}}
                                      </option>
                                      @endforeach
                                      
                                    </select>
      

                                   @error('Lead_Source')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>


                          <div class="col-md-6">
                            <div class="form-group row">
                              <label for="Representante" class="col-md-12 col-form-label text-md-left">Email del Representante</label>
                                <div class="col-md-12">
                                    <select id="Representante_email" name="Representante_email" class="form-control @error('email') is-invalid @enderror" data-live-search="true">
                                      <option value="">Selecione Email</option>
                                      @foreach ($repres as $repre)
                                        <option 
                                        @if (isset($data))
                                              @if ($data->Representante_email == $repre['email'])
                                                selected="selected" 
                                              @endif
                                            @endif
                                            @if (old('LeadSource') ==  $repre['email']) 
                                              selected="selected" 
                                            @endif 
                                        value="{{$repre['email']}}">
                                        {{$repre['email']}}
                                      </option>
                                      @endforeach
                                      
                                    </select>
                                </div>
      

                                   @error('email')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror                                  
                                </div>
                          </div>


                          <div class="col-md-6">
                            <div class="form-group row">
                               <label for="Rep" class="col-md-12 col-form-label text-md-left">Nombre de Representante</label>
                                <div class="col-md-12">
                                    <select id="Rep" name="Rep" class="form-control @error('name') is-invalid @enderror" data-live-search="true" >
                                      <option value="">Seleccione Representante</option>
                                      @foreach ($repres as $repre)
                                        <option 
                                        @if (isset($data))
                                              @if ($data->Rep == $repre['repreId'])
                                                selected="selected" 
                                              @endif
                                            @endif
                                            @if (old('LeadSource') ==  $repre['repreId']) 
                                              selected="selected" 
                                            @endif 
                                        value="{{$repre['repreId']}}">
                                        {{$repre['name']}}
                                      </option>
                                      @endforeach
                                      
                                    </select>
                                </div>
      

                                   @error('name')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror                                  
                                </div>
                          </div>




                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Dealer" class="col-md-12 col-form-label text-md-left">Nombre de Distribuidor</label>

                                <div class="col-md-12">

                                    <select id="Dealer" name="Dealer" class="form-control @error('dealer') is-invalid @enderror" data-live-search="true">
                                      <option value="">Seleccione Distribuidor</option>
                                      @foreach ($dealers as $dealer)

                                        <option 
                                          @if (isset($data))
                                            @if ($data->dealerId == $dealer['dealerId'])
                                              selected="selected" 
                                            @endif
                                          @endif
                                          @if (old('dealerId') ==  $dealer['dealerId']) 
                                            selected="selected" 
                                          @endif 

                                          value="{{$dealer['dealerId']}}">{{$dealer['descripcion']}}
                                        </option>
                                      @endforeach
                                    </select>
      

                                   @error('Dealer')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Nombre_de_vendedor_de_dealer" class="col-md-12 col-form-label text-md-left">Nombre de Vendedor</label>

                                <div class="col-md-12">

                                    <input id="Nombre_de_vendedor_de_dealer" name="Nombre_de_vendedor_de_dealer" type="text" class="form-control @error('Nombre_de_vendedor_de_dealer') is-invalid @enderror" value="{{ old('Nombre_de_vendedor_de_dealer', isset($data) ? $data->Nombre_de_vendedor_de_dealer : '') }}" maxlength="100">
      

                                   @error('Nombre_de_vendedor_de_dealer')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group row">
                                <label for="Description" class="col-md-12 col-form-label text-md-left">¿En qué Marcas y productos está interesado su lead?</label>

                                <div class="col-md-12">

                                  <textarea name="Description" id="Description" class="form-control @error('Description') is-invalid @enderror">{{ old('Description', isset($data) ? $data->Description : '') }}</textarea>

      

                                   @error('Description')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>





                        </div>

           




                      
                       <button type="submit" id='btnsummit' class="btn btn-primary mt-1">{{ trans('global.save') }}</button>

                    </form> 

                </div>

@endsection



@section('styles')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

@endsection

@section('scripts')
@parent
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>


<script type="text/javascript">

$(document).ready(function(){
  //  $('#cuanto').mask("##0.00");
    $('.telefono').mask("999999999900");
    $('select').selectpicker({noneSelectedText:'Selecione Marcas'});

    @if(isset($data))
      var marca = @json($data->Marca);
      $('#Marca').selectpicker('val', marca);
    @endif

});

      $('#ubicacion').on('change', function(){
                  var url = $(this).data('remote');
                        $.ajax({
                            context: this,
                            url:url,
                            type: 'POST',
                            data:   {
                                        "_token": $("meta[name='csrf-token']").attr("content"),
                                        "_method": 'DELETE'
                                    },
                            success: function (data) {
                                if (data==='true') {
                                    swal.fire("Borrado", "Este Post ha sido eliminado","success");
                                    
                                }else{
                                    swal.fire("Error", "No se pudo realizar la operacion", "error");
                                }
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                    swal.fire("Error", "No se pudo realizar la operacion", "error");
                            }
                            }) 
        }); 
</script>
@endsection
