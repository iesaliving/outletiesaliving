@extends('layouts.admin')
@section('title', trans('global.register'))
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.deals.index') }}"> Deals </a> </li>
   <li class="breadcrumb-item active" aria-current="page"> {{isset($data->dealsId) ? trans('global.update') : trans('global.register') }} </li>
@endsection
@section('content')

@php
 //dump($data)
 //dump($errors)
@endphp


 <div class="card">
      <div class="card-header">{{isset($data->dealsId) ?  trans('global.update') : trans('global.register')}} Prospecto 
                              @if(isset($data->dealsId))
                                <a class="btn  mx-1 float-right btn-success fa fa-trophy" href="{{ route('admin.deals.rating', ['dealsId'=>$data->dealsId]) }}"></a>
                                <a class="btn  mx-1 float-right btn-warning fa fa-shopping-basket" href="{{ route('admin.deals.cookDemo', ['dealsId'=>$data->dealsId]) }}"></a>
                                <a class="btn  mx-1 float-right btn-secondary fa fa-file-text" href="{{ route('admin.deals.precotizar', ['dealsId'=>$data->dealsId]) }}"></a>
                              @endif()
      </div>

                <div class="card-body">
                      <div class="col-12">
                        <h4> Informacion de prospecto</h4>
                      </div>

                       <form class="form-horizontal" role="form" method="POST" action="{{ isset($data) ? route('admin.deals.update') : route('admin.deals.store') }}"  enctype="multipart/form-data">
                        @csrf

                        @if(isset($data))
                         <input required type="hidden" name="dealsId" value="{{$data->dealsId}}">
                        @method('PUT')
                        @endif


                        <div class="row col-12">
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Deal_Name" class="col-md-12 col-form-label text-md-left">Nombre del Prospecto</label>

                                <div class="col-md-12">

                                    <input required id="Deal_Name" name="Deal_Name" type="text" class="form-control @error('Deal_Name') is-invalid @enderror" value="{{ old('Deal_Name', isset($data) ? $data->Deal_Name : '') }}" maxlength="100" required="">
      

                                   @error('Deal_Name')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Stage" class="col-md-12 col-form-label text-md-left">Fase</label>

                                <div class="col-md-12">

                                    <select required id="Stage" name="Stage" class="form-control @error('Stage') is-invalid @enderror" required>
                                      <option value="">Seleccione Fase</option>
                                      @foreach ($stages as $stage)

                                        <option 
                                          @if (isset($data))
                                            @if ($data->Stage == $stage['displayValue'])
                                              selected="selected" 
                                            @endif
                                          @endif
                                          @if (old('stage') ==  $stage['displayValue']) 
                                            selected="selected" 
                                          @endif 

                                          value="{{$stage['displayValue']}}">{{$stage['displayValue']}}
                                        </option>
                                      @endforeach
                                    </select>
      

                                   @error('stage')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Account_Name" class="col-md-12 col-form-label text-md-left">Nombre de Cuenta</label>

                                <div class="col-12">

                                    <select required id="Account_Name" name="Account_Name" class="form-control @error('Account_Name') is-invalid @enderror" required>
                                      <option value="">Seleccione Cuenta</option>
                                      @foreach ($accounts as $account)
                                        <option 
                                          @if (isset($data))
                                            @if ($data->Account_Name == $account['accountId'])
                                              selected="selected" 
                                            @endif
                                          @endif
                                          @if (old('Account_Name') ==  $account['accountId']) 
                                            selected="selected" 
                                          @endif 

                                          value="{{$account['accountId']}}">{{$account['Account_Name']}}
                                        </option>
                                      @endforeach
                                    </select>
      

                                   @error('Account_Name')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="monto_estimado" class="col-md-12 col-form-label text-md-left">Monto estimado del orden de compra</label>

                                <div class="col-md-12">

                                    <input required id="monto_estimado" name="monto_estimado" type="text" class="form-control @error('monto_estimado') is-invalid @enderror" value="{{ old('monto_estimado', isset($data) ? $data->monto_estimado : '') }}" maxlength="100" required="">
      

                                   @error('monto_estimado')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Contact_Name" class="col-md-12 col-form-label text-md-left">Nombre de Contacto</label>

                                <div class="col-md-12">

                                    <select required id="Contact_Name" name="Contact_Name" class="form-control @error('Contact_Name') is-invalid @enderror" required>
                                      <option value="">Seleccione Contacto</option>
                                      @foreach ($contacts as $contact)

                                        <option 
                                          @if (isset($data))
                                            @if ($data->Contact_Name == $contact['contactId'])
                                              selected="selected" 
                                            @endif
                                          @endif
                                          @if (old('contact') ==  $contact['contactId']) 
                                            selected="selected" 
                                          @endif 

                                          value="{{$contact['contactId']}}">{{$contact['Full_Name']}}
                                        </option>
                                      @endforeach
                                    </select>
      

                                   @error('contact')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Closing_Date" class="col-md-12 col-form-label text-md-left">Fecha de cierre</label>

                                <div class="col-md-12">

                                    <input required id="Closing_Date" name="Closing_Date" type="text" class="form-control @error('Closing_Date') is-invalid @enderror" value="{{ old('Closing_Date', isset($data) ? $data->Closing_Date : '') }}" maxlength="100" required="">
      

                                   @error('Closing_Date')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>
                           <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Contact_Apellido" class="col-md-12 col-form-label text-md-left">Contact Apellido</label>

                                <div class="col-md-12">

                                    <input required id="Contact_Apellido" name="Contact_Apellido" type="text" class="form-control @error('Contact_Apellido') is-invalid @enderror" value="{{ old('Contact_Apellido', isset($data) ? $data->Contact_Apellido : '') }}" maxlength="100" required="">
      

                                   @error('Contact_Apellido')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="marca" class="col-md-12 col-form-label text-md-left">Propietario del prospecto</label>

                                <div class="col-md-12">

                                    <select required id="" name="propietario" class="form-control @error('marca') is-invalid @enderror" required>
                                      <option id="">Sebastian Alejandro Leal</option>
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
                                <label for="type" class="col-md-12 col-form-label text-md-left">Tipo</label>

                                <div class="col-md-12">

                                    <select required id="" name="type" class="form-control @error('marca') is-invalid @enderror" required>
                                      <option id="">Consumidor</option>
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
                                <label for="ubicacion" class="col-md-12 col-form-label text-md-left">Ubicación</label>

                                <div class="col-md-12">

                                    <select required id="ubicacion" name="ubicacion" class="form-control @error('ubicacion') is-invalid @enderror" required>
                                      @foreach ($ubicaciones as $ubicacion)
                                        <option 
                                        @if (isset($data))
                                            @if ($data->ubicacion == $ubicacion['displayValue'])
                                              selected="selected" 
                                            @endif
                                          @endif
                                          @if (old('ubicacion') ==  $ubicacion['displayValue']) 
                                            selected="selected" 
                                          @endif 
                                        value="{{$ubicacion['displayValue']}}">
                                      {{$ubicacion['displayValue']}}
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
                                <label for="Next_Step" class="col-md-12 col-form-label text-md-left">Siguiente paso</label>

                                <div class="col-md-12">

                                    <input required id="Next_Step" name="Next_Step" type="text" class="form-control @error('Next_Step') is-invalid @enderror" value="{{ old('Next_Step', isset($data) ? $data->Next_Step : '') }}" maxlength="100" required="">
      

                                   @error('Next_Step')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                        <div class="col-12 mt-2">
                          <h4> Informacion comercial</h4>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="dealerId" class="col-md-12 col-form-label text-md-left">Nombre de Distribuidor</label>

                                <div class="col-md-12">

                                    <select required id="dealerId" name="dealerId" class="form-control @error('dealer') is-invalid @enderror" required>
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
                                <label for="marca" class="col-md-12 col-form-label text-md-left">Fase</label>

                                <div class="col-md-12">

                                    <select required id="marca" name="marca[]" multiple="" class="form-control @error('marca') is-invalid @enderror" required data-live-search="true">
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
                                <label for="Email_de_Dealer" class="col-md-12 col-form-label text-md-left">Email Distribuidor</label>

                                <div class="col-md-12">

                                   <input required id="Email_de_Dealer" name="Email_de_Dealer" type="text" class="form-control @error('Email_de_Dealer') is-invalid @enderror" value="{{ old('Email_de_Dealer', isset($data) ? $data->Email_de_Dealer : '') }}" maxlength="100" required="">
      

                                   @error('Email_de_Dealer')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="producto" class="col-md-12 col-form-label text-md-left">Producto</label>

                                <div class="col-md-12">

                                    <input required id="producto" name="producto" type="text" class="form-control @error('producto') is-invalid @enderror" value="{{ old('producto', isset($data) ? $data->producto : '') }}" maxlength="100" required="">
      

                                   @error('producto')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>



                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="dealer_name" class="col-md-12 col-form-label text-md-left">Nombre de vendedor del Distribuidor</label>

                                <div class="col-md-12">

                                    <input required id="dealer_name" name="dealer_name" type="text" class="form-control @error('dealer_name') is-invalid @enderror" value="{{ old('dealer_name', isset($data) ? $data->dealer_name : '') }}" maxlength="100" required="">
      

                                   @error('dealer_name')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>


                          <div class="col-md-6">
                            <div class="form-group row">
                               <label for="Representante" class="col-md-12 col-form-label text-md-left">Nombre de Representante</label>
                                <div class="col-md-12">
                                    <select required id="Representante" name="Representante" class="form-control @error('name') is-invalid @enderror" required data-live-search="true">
                                      <option value="">Selecione Representante</option>
                                      @foreach ($nameRepres as $nameRepre)
                                        <option 
                                        @if (isset($data))
                                              @if ($data->Representante == $nameRepre['name'])
                                                selected="selected" 
                                              @endif
                                            @endif
                                            @if (old('LeadSource') ==  $nameRepre['name']) 
                                              selected="selected" 
                                            @endif 
                                        value="{{$nameRepre['name']}}">
                                        {{$nameRepre['name']}}
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
                              <label for="Representante" class="col-md-12 col-form-label text-md-left">Email del Representante</label>
                                <div class="col-md-12">
                                    <select required id="Representante_email" name="Representante_email" class="form-control @error('email') is-invalid @enderror" required data-live-search="true">
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
                        </div>

           




                      
                       <button type="submit" id='btnsummit' class="btn btn-primary mt-1">{{ trans('global.save') }}</button>

                    </form> 

                </div>

@endsection

@section('styles')
<!-- Latest compiled and minified CSS -->
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

@endsection


@section('scripts')
@parent
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
  //  $('#cuanto').mask("##0.00");
    $('#monto_estimado').mask("#,##0", {reverse: true});
    $('select').selectpicker({noneSelectedText:'Selecione Marcas'});

    @if(isset($data))
      var marcaJS = @json($data->marca);
      $('#marca').selectpicker('val', marcaJS);
    @endif


});
        var dateToday = new Date();
        dateToday.setDate(dateToday.getDate() - 1);
        $('#Closing_Date').datepicker({
            uiLibrary: 'bootstrap4',
            format: "dd-mm-yyyy",
            startDate: '+1d',
            autoclose: true,
            todayHighlight: true,
            orientation: "bottom",
            minDate: dateToday
        });
    </script>
@endsection
