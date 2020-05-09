@extends('layouts.admin')
@section('title', trans('global.register'))
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.leads.index') }}"> Leads </a> </li>
   <li class="breadcrumb-item active" aria-current="page"> {{isset($data->leadsId) ? trans('global.update') : trans('global.register') }} </li>
@endsection
@section('content')

@php
//dump($nameRepres);
 //dump($data);
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
                         <input required type="hidden" name="leadsId" value="{{$data->leadsId}}">
                        @method('PUT')
                        @endif



                        <div class="row col-12">
                          <div class="col-12 mt-5">
                            <h4>Lead Information</h4>
                          </div>
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
                                <label for="" class="col-md-12 col-form-label text-md-left">Lead Owner</label>

                                <div class="col-md-12">

                                    <select disabled="" multiple="" class="form-control @error('') is-invalid @enderror" required data-live-search="true">
                                      <option selected="">Sebastian Alejando Leal</option>
                                    </select>
      

                                   @error('')
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
                                <label for="Company" class="col-md-12 col-form-label text-md-left">Company</label>

                                <div class="col-md-12">

                                    <input id="Company" name="Company" type="text" class="form-control @error('Company') is-invalid @enderror" value="{{ old('Company', isset($data) ? $data->Company : '') }}" maxlength="100">
      

                                   @error('Company')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Designation" class="col-md-12 col-form-label text-md-left">Title</label>

                                <div class="col-md-12">

                                    <input id="Designation" name="Designation" type="text" class="form-control @error('Designation') is-invalid @enderror" value="{{ old('Designation', isset($data) ? $data->Designation : '') }}" maxlength="100">
      

                                   @error('Designation')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Industry" class="col-md-12 col-form-label text-md-left">Industry</label>

                                <div class="col-md-12">

                                    <select id="Industry" name="Industry" class="form-control @error('Industry') is-invalid @enderror" data-live-search="true">
                                      @foreach ($industries as $industry)
                                        <option 
                                          @if (!empty($data->Industry))
                                            @if ($data->Industry == $industry['actualValue'])
                                              selected="selected" 
                                            @endif
                                          @endif
                                          @if (old('Industry') ==  $industry['actualValue']) 
                                            selected="selected" 
                                          @endif 
                                        value="{{$industry['actualValue']}}">
                                      {{$industry['displayValue']}}
                                    </option>
                                      @endforeach
                                    </select>
      

                                   @error('Industry')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Estatus" class="col-md-12 col-form-label text-md-left">Lead Status</label>

                                <div class="col-md-12">

                                    <select  id="Lead_Status" name="Lead_Status" class="form-control @error('Estatus') is-invalid @enderror"  data-live-search="true">
                                      @foreach ($estatus as $estatu)
                                        <option 
                                          @if (!empty($data->Lead_Status))
                                              @if ($data->Lead_Status == $estatu['displayValue'])
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
      

                                   @error('Estatus')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Typo_de_Lead" class="col-md-12 col-form-label text-md-left">Tipo de Lead</label>

                                <div class="col-md-12">

                                    <select id="Typo_de_Lead" name="Typo_de_Lead" class="form-control @error('Typo_de_Lead') is-invalid @enderror" data-live-search="true">
                                      @foreach ($typesLeads as $typeLead)
                                        <option 
                                          @if (!empty($data->Typo_de_Lead))
                                              @if ($data->Typo_de_Lead == $typeLead['displayValue'])
                                                selected="selected" 
                                              @endif
                                            @endif
                                            @if (old('Typo_de_Lead') ==  $typeLead['displayValue']) 
                                              selected="selected" 
                                            @endif 
                                        value="{{$typeLead['displayValue']}}">
                                          {{$typeLead['displayValue']}}
                                      </option>
                                      @endforeach
                                      
                                    </select>
      

                                   @error('Typo_de_Lead')
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

                                    <select id="Marca" name="Marca[]" multiple="" class="form-control @error('marca') is-invalid @enderror" data-live-search="true">
                                      @foreach ($marcas as $marca)

                                        <option value="{{$marca['actualValue']}}">{{$marca['displayValue']}}
                                        </option>
                                      @endforeach
                                    </select>
      

                                   @error('Marca')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                        

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Dealer" class="col-md-12 col-form-label text-md-left">Distribuidor</label>

                                <div class="col-md-12">

                                    <select id="Dealer" name="Dealer" class="form-control @error('dealer') is-invalid @enderror" data-live-search="true">
                                      <option value="">Seleccione Distribuidor</option>
                                      @foreach ($dealers as $dealer)

                                        <option 
                                          @if (!empty($data->Dealer))
                                            @if ($data->Dealer == $dealer['dealerId'])
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
                                <label for="Producto" class="col-md-12 col-form-label text-md-left">Producto</label>

                                <div class="col-md-12">

                                    <input  id="Producto" name="Producto" type="text" class="form-control @error('Producto') is-invalid @enderror" value="{{ old('Producto', isset($data) ? $data->Producto : '') }}" maxlength="100" >
      

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

                          <div class="col-md-6">
                            <div class="form-group row">
                               <label for="Representante" class="col-md-12 col-form-label text-md-left">Nombre de Representante</label>
                                <div class="col-md-12">
                                    <select id="Representante" name="Representante" class="form-control @error('name') is-invalid @enderror" data-live-search="true" >
                                      <option value="">Selecione Representante</option>
                                      @foreach ($nameRepres as $nameRepre)
                                        <option 
                                        @if (!empty($data->Representante))
                                              @if ($data->Representante == $nameRepre['actualValue'])
                                                selected="selected" 
                                              @endif
                                            @endif
                                            @if (old('Representante') ==  $nameRepre['actualValue']) 
                                              selected="selected" 
                                            @endif 
                                        value="{{$nameRepre['actualValue']}}">
                                        {{$nameRepre['actualValue']}}
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
                                    <select id="Representante_email" name="Representante_email" class="form-control @error('email') is-invalid @enderror" data-live-search="true">
                                      <option value="">Selecione Email</option>
                                      @foreach ($repres as $repre)
                                        <option 
                                        @if (!empty($data->Representante_email))
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
      

                                   @error('Representante_email')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror                                  
                                </div>
                          </div>

                          <div class="col-12 mt-5">
                            <h4>Contactos</h4>
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
                                <label for="Website" class="col-md-12 col-form-label text-md-left">Website</label>

                                <div class="col-md-12">

                                    <input id="Website" name="Website" type="url" class="form-control @error('Website') is-invalid @enderror" value="{{ old('Website', isset($data) ? $data->Website : '') }}" maxlength="100">
      

                                   @error('Website')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Mobile" class="col-md-12 col-form-label text-md-left">Mobile</label>

                                <div class="col-md-12">

                                    <input id="Mobile" name="Mobile" type="text" class="telefono form-control @error('Mobile') is-invalid @enderror" value="{{ old('Mobile', isset($data) ? $data->Mobile : '') }}" maxlength="100">
      

                                   @error('Mobile')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Skype_ID" class="col-md-12 col-form-label text-md-left">Skype ID</label>

                                <div class="col-md-12">

                                    <input id="Skype_ID" name="Skype_ID" type="text" class="telefono form-control @error('Skype_ID') is-invalid @enderror" value="{{ old('Skype_ID', isset($data) ? $data->Skype_ID : '') }}" maxlength="100">
      

                                   @error('Skype_ID')
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
                                <label for="Secondary_Email" class="col-md-12 col-form-label text-md-left">Secondary Email</label>

                                <div class="col-md-12">

                                    <input id="Secondary_Email" name="Secondary_Email" type="email" class="form-control @error('Secondary_Email') is-invalid @enderror" value="{{ old('Secondary_Email', isset($data) ? $data->Secondary_Email : '') }}" maxlength="100">
      

                                   @error('Secondary_Email')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>




                          <div class="col-12 mt-5">
                            <h4>Arquitecto</h4>
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
                                <label for="Apellido_de_Arquitecto" class="col-md-12 col-form-label text-md-left">Apellido del Arquitecto</label>

                                <div class="col-md-12">

                                    <input id="Apellido_de_Arquitecto" name="Apellido_de_Arquitecto" type="text" class="form-control @error('Apellido_de_Arquitecto') is-invalid @enderror" value="{{ old('Apellido_de_Arquitecto', isset($data) ? $data->Apellido_de_Arquitecto : '') }}" maxlength="100">
      

                                   @error('Apellido_de_Arquitecto')
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



                          <div class="col-12 mt-5">
                            <h4>Address Information</h4>
                          </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Country" class="col-md-12 col-form-label text-md-left">Country</label>

                                <div class="col-md-12">

                                    <input id="Country" name="Country" type="text" class="form-control @error('Country') is-invalid @enderror" value="{{ old('Country', isset($data) ? $data->Country : '') }}" maxlength="100">
      

                                   @error('Country')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Street" class="col-md-12 col-form-label text-md-left">Street</label>

                                <div class="col-md-12">

                                    <input id="Street" name="Street" type="text" class="form-control @error('Street') is-invalid @enderror" value="{{ old('Street', isset($data) ? $data->Street : '') }}" maxlength="100">
      

                                   @error('Street')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="City" class="col-md-12 col-form-label text-md-left">City</label>

                                <div class="col-md-12">

                                    <input id="City" name="City" type="text" class="form-control @error('City') is-invalid @enderror" value="{{ old('City', isset($data) ? $data->City : '') }}" maxlength="100">
      

                                   @error('City')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>


                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Zip_Code" class="col-md-12 col-form-label text-md-left">Zip Code</label>

                                <div class="col-md-12">

                                    <input id="Zip_Code" name="Zip_Code" type="text" class="form-control @error('Zip_Code') is-invalid @enderror" value="{{ old('Zip_Code', isset($data) ? $data->Zip_Code : '') }}" maxlength="100">
      

                                   @error('Zip_Code')
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

                                    <select id="Estado" name="Estado" class="form-control @error('ubicacion') is-invalid @enderror"  data-live-search="true">
                                      @foreach ($ubicaciones as $ubicacion)
                                        <option 
                                        @if (!empty($data->Estado))
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
      

                                   @error('ubicacion')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div> 



                          <div class="col-12 mt-5">
                            <h4>Description Information</h4>
                          </div>


                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Showroom_Ciudad" class="col-md-12 col-form-label text-md-left">Showroom Ciudad</label>

                                <div class="col-md-12">

                                    <select id="Showroom_Ciudad" name="Showroom_Ciudad" class="form-control @error('Showroom_Ciudad') is-invalid @enderror"  data-live-search="true">
                                      @foreach ($showroomCiudades as $showroomCiudad)
                                        <option 
                                        @if (!empty($data->Showroom_Ciudad))
                                            @if ($data->Showroom_Ciudad == $showroomCiudad['actualValue'])
                                              selected="selected" 
                                            @endif
                                          @endif
                                          @if (old('Showroom_Ciudad') ==  $showroomCiudad['actualValue']) 
                                            selected="selected" 
                                          @endif 
                                        value="{{$showroomCiudad['actualValue']}}">
                                      {{$showroomCiudad['displayValue']}}
                                    </option>
                                      @endforeach
                                      
                                    </select>
      

                                   @error('Showroom_Ciudad')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>


                          <div class="col-md-6">
                                <div class="form-group row">
                                <label for="Fecha_de_cooking_demo" class="col-md-12 col-form-label text-md-left">Fecha de cooking demo</label>

                                <div class="col-md-12">

                                    <input id="Fecha_de_cooking_demo" name="Fecha_de_cooking_demo" type="text" class="fecha form-control @error('Fecha_de_cooking_demo') is-invalid @enderror" value="{{ old('Fecha_de_cooking_demo', isset($data) ? $data->Fecha_de_cooking_demo : '') }}" maxlength="100">
      

                                   @error('Fecha_de_cooking_demo')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div> 

                          <div class="col-md-6">
                                <div class="form-group row">
                                <label for="Fecha_de_visita_al_Showroom" class="col-md-12 col-form-label text-md-left">Fecha de visita al Showroom</label>

                                <div class="col-md-12">

                                    <input id="Fecha_de_visita_al_Showroom" name="Fecha_de_visita_al_Showroom" type="text" class="fecha form-control @error('Fecha_de_visita_al_Showroom') is-invalid @enderror" value="{{ old('Fecha_de_visita_al_Showroom', isset($data) ? $data->Fecha_de_visita_al_Showroom : '') }}"  maxlength="100">
      

                                   @error('Fecha_de_visita_al_Showroom')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Description" class="col-md-12 col-form-label text-md-left">Description</label>

                                <div class="col-md-12">

                                    <input id="Description" name="Description" type="text" class="form-control @error('Description') is-invalid @enderror" value="{{ old('Description', isset($data) ? $data->Description : '') }}" maxlength="100">
      

                                   @error('Description')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>


                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Hora_de_visita_al_showroom" class="col-md-12 col-form-label text-md-left">Hora de visita al showroom</label>

                                <div class="col-md-12">

                                    <input id="Hora_de_visita_al_showroom" name="Hora_de_visita_al_showroom" type="text" class="form-control @error('Hora_de_visita_al_showroom') is-invalid @enderror" value="{{ old('Hora_de_visita_al_showroom', isset($data) ? $data->Hora_de_visita_al_showroom : '') }}" maxlength="100">
      

                                   @error('Hora_de_visita_al_showroom')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Hora_de_la_llamada" class="col-md-12 col-form-label text-md-left">Hora de la llamada</label>

                                <div class="col-md-12">

                                    <input id="Hora_de_la_llamada" name="Hora_de_la_llamada" type="text" class="form-control @error('Hora_de_la_llamada') is-invalid @enderror" value="{{ old('Hora_de_la_llamada', isset($data) ? $data->Hora_de_la_llamada : '') }}" maxlength="100">
      

                                   @error('Hora_de_la_llamada')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>


                          <div class="col-md-6">
                                <div class="form-group row">
                                <label for="Fecha_de_la_llamada" class="col-md-12 col-form-label text-md-left">Fecha de la llamada</label>

                                <div class="col-md-12">

                                    <input id="Fecha_de_la_llamada" name="Fecha_de_la_llamada" type="text" class="fecha form-control @error('Fecha_de_la_llamada') is-invalid @enderror" value="{{ old('Fecha_de_la_llamada', isset($data) ? $data->Fecha_de_la_llamada : '') }}" maxlength="100">
      

                                   @error('Fecha_de_la_llamada')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>



                          <div class="col-12 mt-5">
                            <h4>Información de Marketing</h4>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="UTM_Source" class="col-md-12 col-form-label text-md-left">UTM Source</label>

                                <div class="col-md-12">

                                    <input id="UTM_Source" name="UTM_Source" type="text" class="form-control @error('UTM_Source') is-invalid @enderror" value="{{ old('UTM_Source', isset($data) ? $data->UTM_Source : '') }}" maxlength="100">
      

                                   @error('UTM_Source')
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
                                        @if (!empty($data->Lead_Source))
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
                                <label for="UTM_Anuncio_ID" class="col-md-12 col-form-label text-md-left">UTM Anuncio ID</label>

                                <div class="col-md-12">

                                    <input id="UTM_Anuncio_ID" name="UTM_Anuncio_ID" type="text" class="form-control @error('UTM_Anuncio_ID') is-invalid @enderror" value="{{ old('UTM_Anuncio_ID', isset($data) ? $data->UTM_Anuncio_ID : '') }}" maxlength="100">
      

                                   @error('UTM_Anuncio_ID')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="UTM_Campaign_Name" class="col-md-12 col-form-label text-md-left">UTM Campaign Name</label>

                                <div class="col-md-12">

                                    <input id="UTM_Campaign_Name" name="UTM_Campaign_Name" type="text" class="form-control @error('UTM_Campaign_Name') is-invalid @enderror" value="{{ old('UTM_Campaign_Name', isset($data) ? $data->UTM_Campaign_Name : '') }}" maxlength="100">
      

                                   @error('UTM_Campaign_Name')
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
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

@endsection

@section('scripts')
@parent
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>


<script type="text/javascript">

$(document).ready(function(){

      var dateToday = new Date();
        //dateToday.setDate(dateToday.getDate() - 1);
        $('#Fecha_de_cooking_demo').datepicker({
            uiLibrary: 'bootstrap4',
            format: "dd-mm-yyyy",
            startDate: '+1d',
            autoclose: true,
            todayHighlight: true,
            orientation: "bottom"
        });

        $('#Fecha_de_visita_al_Showroom').datepicker({
            uiLibrary: 'bootstrap4',
            format: "dd-mm-yyyy",
            startDate: '+1d',
            autoclose: true,
            todayHighlight: true,
            orientation: "bottom"
        });

        $('#Fecha_de_la_llamada').datepicker({
            uiLibrary: 'bootstrap4',
            format: "dd-mm-yyyy",
            startDate: '+1d',
            autoclose: true,
            todayHighlight: true,
            orientation: "bottom"
        });



  //  $('#cuanto').mask("##0.00");
    $('.telefono').mask("999999999900");
    $('select').selectpicker({noneSelectedText:'Selecione Marcas'});

    @if(isset($data))
      var marcaJS = @json($data->Marca);
      $('#Marca').selectpicker('val', marcaJS);
    @endif

});

</script>
@endsection

