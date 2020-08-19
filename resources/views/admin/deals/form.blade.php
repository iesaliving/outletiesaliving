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
                                <a data-toggle="tooltip" data-placement="top" title="Solicitar Rating" class="btn  mx-1 float-right  btn-success" href="{{ route('admin.deals.rating', ['dealsId'=>$data->dealsId]) }}">  <img class="icono-btn" src="{{ asset('img/admin/icono/rating.png')}}"></a>
                                <a data-toggle="tooltip" data-placement="top" title="Invitar Cooking Demo" class="btn  mx-1 float-right btn-warning " href="{{ route('admin.deals.cookDemo', ['dealsId'=>$data->dealsId]) }}"><img class="icono-btn" src="{{ asset('img/admin/icono/cookingDemo.png')}}" ></a>
                                <a data-toggle="tooltip" data-placement="top" title="Contactar Cliente con Distribuidor y enviar Pre-Cotización" class="btn  mx-1 float-right btn-secondary" href="{{ route('admin.deals.precotizar', ['dealsId'=>$data->dealsId]) }}"><img class="icono-btn" src="{{ asset('img/admin/icono/preCotizacion.png')}}"></a>
                              @endif()


              

            


      </div>

                <div class="card-body">
                      <div class="col-12 mb-3">
                        <h4> Persona de contacto</h4>
                        <div class="col-10 offset-1">
                          <h5><b>Nombre Completo: {{$contactInfo->Full_Name}}</b></h5>
                          <h5>Email Contacto: {{$contactInfo->Email}}</h5>
                          <h5>Teléfono: {{$contactInfo->Phone}}</h5>
                        </div>
                      </div>
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
                                <label for="Monto_estimado_del_orden_de_compra" class="col-md-12 col-form-label text-md-left">Monto estimado del orden de compra</label>

                                <div class="col-md-12">

                                    <input id="Monto_estimado_del_orden_de_compra" name="Monto_estimado_del_orden_de_compra" type="text" class="form-control @error('Monto_estimado_del_orden_de_compra') is-invalid @enderror" value="{{ old('Monto_estimado_del_orden_de_compra', isset($data) ? $data->Monto_estimado_del_orden_de_compra : '') }}" maxlength="100">
      

                                   @error('Monto_estimado_del_orden_de_compra')
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
                                <label for="Contact_Apellido" class="col-md-12 col-form-label text-md-left">Apellido del Contacto</label>

                                <div class="col-md-12">

                                    <input id="Contact_Apellido" name="Contact_Apellido" type="text" class="form-control @error('Contact_Apellido') is-invalid @enderror" value="{{ old('Contact_Apellido', isset($data) ? $data->Contact_Apellido : '') }}" maxlength="100">
      

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

                                    <select id="" name="type" class="form-control @error('marca') is-invalid @enderror" required>
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
                                <label for="Estado" class="col-md-12 col-form-label text-md-left">Ubicación</label>

                                <div class="col-md-12">

                                    <select id="Estado" name="Estado" class="form-control @error('Estado') is-invalid @enderror">
                                      @foreach ($ubicaciones as $ubicacion)
                                        <option 
                                        @if (isset($data))
                                            @if ($data->Estado == $ubicacion['displayValue'])
                                              selected="selected" 
                                            @endif
                                          @endif
                                          @if (old('Estado') ==  $ubicacion['displayValue']) 
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

                                    <input id="Next_Step" name="Next_Step" type="text" class="form-control @error('Next_Step') is-invalid @enderror" value="{{ old('Next_Step', isset($data) ? $data->Next_Step : '') }}" maxlength="100">
      

                                   @error('Next_Step')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Estado_de_Propecto" class="col-md-12 col-form-label text-md-left">Estado de Prospecto</label>

                                <div class="col-md-12">

                                    <select id="Estado_de_Propecto" name="Estado_de_Propecto" class="form-control @error('Estado_de_Propecto') is-invalid @enderror" data-live-search="true">
                                      @foreach ($estadosProspecto as $estadoProspecto)
                                        <option 
                                        @if (isset($data))
                                              @if ($data->Estado_de_Propecto == $estadoProspecto['displayValue'])
                                                selected="selected" 
                                              @endif
                                            @endif
                                            @if (old('estadoProspecto') ==  $estadoProspecto['displayValue']) 
                                              selected="selected" 
                                            @endif 
                                        value="{{$estadoProspecto['displayValue']}}">
                                        {{$estadoProspecto['displayValue']}}
                                      </option>
                                      @endforeach
                                      
                                    </select>
      

                                   @error('Estado_de_Propecto')
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
                                <label for="Dealer2" class="col-md-12 col-form-label text-md-left">Nombre de Distribuidor</label>

                                <div class="col-md-12">

                                    <select required id="Dealer2" name="Dealer2" class="form-control @error('dealer') is-invalid @enderror" required>
                                      <option value="">Seleccione Distribuidor</option>
                                      @foreach ($dealers as $dealer)

                                        <option 
                                          @if (isset($data))
                                            @if ($data->Dealer2 == $dealer['dealerId'])
                                              selected="selected" 
                                            @endif
                                          @endif
                                          @if (old('Dealer2') ==  $dealer['dealerId']) 
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
                                <label for="marca" class="col-md-12 col-form-label text-md-left">Marca</label>

                                <div class="col-md-12">

                                    <select required id="Marca" name="Marca[]" multiple="" class="form-control @error('Marca') is-invalid @enderror" required data-live-search="true">
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
                                <label for="Nombre_de_vendedor_de_dealer" class="col-md-12 col-form-label text-md-left">Nombre de vendedor del Distribuidor</label>

                                <div class="col-md-12">

                                    <input  id="Nombre_de_vendedor_de_dealer" name="Nombre_de_vendedor_de_dealer" type="text" class="form-control @error('Nombre_de_vendedor_de_dealer') is-invalid @enderror" value="{{ old('Nombre_de_vendedor_de_dealer', isset($data) ? $data->Nombre_de_vendedor_de_dealer : '') }}" maxlength="100">
      

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
                               <label for="Reps" class="col-md-12 col-form-label text-md-left">Nombre de Representante</label>
                                <div class="col-md-12">
                                    <select id="Reps" name="Reps" class="form-control @error('name') is-invalid @enderror" data-live-search="true" >
                                      <option value="">Seleccione Representante</option>
                                      @foreach ($repres as $repre)
                                        <option 
                                        @if (isset($data))
                                              @if ($data->Reps == $repre['repreId'])
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
      

                                   @error('Reps')
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

                          <div class="col-12 mt-5">
                            <h4>Contactar con Distribuidor</h4>
                          </div>



                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Enlace_a_cotizacion" class="col-md-12 col-form-label text-md-left">Enlace a Precotización</label>

                                <div class="col-md-12">

                                    <input id="Enlace_a_cotizacion" name="Enlace_a_cotizacion" type="url" class="form-control @error('Enlace_a_cotizacion') is-invalid @enderror" value="{{ old('Enlace_a_cotizacion', isset($data) ? $data->Enlace_a_cotizacion : '') }}" maxlength="100">
      

                                   @error('Enlace_a_cotizacion')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror



                                </div>
                            </div>
                          </div>


                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Enlace_a_informaci_n_addicion_l" class="col-md-12 col-form-label text-md-left">Enlace a información adicional</label>

                                <div class="col-md-12">

                                    <input id="Enlace_a_informaci_n_addicion_l" name="Enlace_a_informaci_n_addicion_l" type="url" class="form-control @error('Enlace_a_informaci_n_addicion_l') is-invalid @enderror" value="{{ old('Enlace_a_informaci_n_addicion_l', isset($data) ? $data->Enlace_a_informaci_n_addicion_l : '') }}" maxlength="100">
      

                                   @error('Enlace_a_informaci_n_addicion_l')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>





                          <div class="col-12 mt-5">
                            <h4>Showroom</h4>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Showroom" class="col-md-12 col-form-label text-md-left">Showroom Ciudad</label>
                                  <div class="col-md-12">
                                    <select id="Showroom" name="Showroom" class="form-control @error('email') is-invalid @enderror" data-live-search="true">
                                      @foreach ($cityShowrooms as $cityShowroom)
                                        <option 
                                        @if (!empty($data->Lead_Source))
                                              @if ($data->Showroom == $cityShowroom['displayValue'])
                                                selected="selected" 
                                              @endif
                                            @endif
                                            @if (old('LeadSource') ==  $cityShowroom['displayValue']) 
                                              selected="selected" 
                                            @endif 
                                        value="{{$cityShowroom['displayValue']}}">
                                        {{$cityShowroom['displayValue']}}
                                      </option>
                                      @endforeach
                                      
                                    </select>
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Fecha_de_la_llamada" class="col-md-12 col-form-label text-md-left">Fecha de la llamada</label>

                                <div class="col-md-12">

                                    <input id="Fecha_de_la_llamada" name="Fecha_de_la_llamada" type="text" class="form-control @error('Fecha_de_la_llamada') is-invalid @enderror" value="{{ old('Fecha_de_la_llamada', isset($data) ? $data->Fecha_de_la_llamada : '') }}" maxlength="100">
      

                                   @error('Fecha_de_la_llamada')
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

                                    <input  id="Fecha_de_visita_al_Showroom" name="Fecha_de_visita_al_Showroom" type="text" class="form-control @error('Fecha_de_visita_al_Showroom') is-invalid @enderror" value="{{ old('Fecha_de_visita_al_Showroom', isset($data) ? $data->Fecha_de_visita_al_Showroom : '') }}" maxlength="100">
      

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
                                <label for="Hora_de_la_llamada" class="col-md-12 col-form-label text-md-left">Hora de la llamada</label>

                                <div class="col-md-12">

                                    <input  id="Hora_de_la_llamada" name="Hora_de_la_llamada" type="text" class="form-control @error('Hora_de_la_llamada') is-invalid @enderror" value="{{ old('Hora_de_la_llamada', isset($data) ? $data->Hora_de_la_llamada : '') }}" maxlength="100">
      

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
                                <label for="Hora_de_visita_al_showroom" class="col-md-12 col-form-label text-md-left">Hora de visita al showroom</label>

                                <div class="col-md-12">

                                    <input id="Hora_de_visita_al_showroom" name="Hora_de_visita_al_showroom" type="text" class="form-control @error('Hora_de_visita_al_showroom') is-invalid @enderror" value="{{ old('Hora_de_visita_al_showroom', isset($data) ? $data->Hora_de_visita_al_showroom : '') }}" maxlength="100" >
      

                                   @error('Hora_de_visita_al_showroom')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          






                          <div class="col-12 mt-5">
                            <h4>Cooking Demo</h4>
                          </div>


                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Fecha_de_cooking_demo" class="col-md-12 col-form-label text-md-left">Fecha de cooking demo</label>

                                <div class="col-md-12">

                                    <input id="Fecha_de_cooking_demo" name="Fecha_de_cooking_demo" type="text" class="form-control @error('Fecha_de_cooking_demo') is-invalid @enderror" value="{{ old('Fecha_de_cooking_demo', isset($data) ? $data->Fecha_de_cooking_demo : '') }}" maxlength="100">
      

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
                                <label for="Estatus_de_Cooking_Demo" class="col-md-12 col-form-label text-md-left">Estatus de Cooking Demo</label>
                                  <div class="col-md-12">
                                    <select  id="Estatus_de_Cooking_Demo" name="Estatus_de_Cooking_Demo" class="form-control @error('email') is-invalid @enderror" data-live-search="true">
                                      @foreach ($EstatusCD as $EstatuCD)
                                        <option 
                                        @if (!empty($data->Lead_Source))
                                              @if ($data->Estatus_de_Cooking_Demo == $EstatuCD['displayValue'])
                                                selected="selected" 
                                              @endif
                                            @endif
                                            @if (old('LeadSource') ==  $EstatuCD['displayValue']) 
                                              selected="selected" 
                                            @endif 
                                        value="{{$EstatuCD['displayValue']}}">
                                        {{$EstatuCD['displayValue']}}
                                      </option>
                                      @endforeach
                                      
                                    </select>
                                </div>
                            </div>
                          </div>




                          <div class="col-12 mt-5">
                            <h4>Rating de la instalación</h4>
                          </div>



                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Mensaje_rating_de_instalaci_n" class="col-md-12 col-form-label text-md-left">Mensaje rating de instalación</label>

                                <div class="col-md-12">

                                    <input id="Mensaje_rating_de_instalaci_n" name="Mensaje_rating_de_instalaci_n" type="text" class="form-control @error('Mensaje_rating_de_instalaci_n') is-invalid @enderror" value="{{ old('Mensaje_rating_de_instalaci_n', isset($data) ? $data->Mensaje_rating_de_instalaci_n : '') }}" maxlength="100">
      

                                   @error('Mensaje_rating_de_instalaci_n')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                                <label for="Rating_total_del_servicio_de_instalaci_n" class="col-md-12 col-form-label text-md-left">Rating total del servicio de instalación</label>

                                <div class="col-md-12">

                                    <input id="Rating_total_del_servicio_de_instalaci_n" name="Rating_total_del_servicio_de_instalaci_n" type="text" class="form-control @error('Rating_total_del_servicio_de_instalaci_n') is-invalid @enderror" value="{{ old('Rating_total_del_servicio_de_instalaci_n', isset($data) ? $data->Rating_total_del_servicio_de_instalaci_n : '') }}" maxlength="100" >
      

                                   @error('Rating_total_del_servicio_de_instalaci_n')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>



                          <div class="col-12 mt-5">
                            <h4>Información de la descripción </h4>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group row">
                                <label for="Description" class="col-md-12 col-form-label text-md-left">Descripción</label>

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
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<style type="text/css">


.icono-btn{
        width: 25px
    }

  /* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>

@endsection


@section('scripts')
@parent
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
  //  $('#cuanto').mask("##0.00");
    $('#Monto_estimado_del_orden_de_compra').mask("#,##0", {reverse: true});
    $('select').selectpicker({noneSelectedText:'Selecione Marcas'});

    @if(isset($data))
      var marcaJS = @json($data->Marca);
      $('#Marca').selectpicker('val', marcaJS);
    @endif

    $(function () {
      $("body").tooltip({
        selector: '[data-toggle="tooltip"]',
        container: 'body'
      });
    })



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
        $('#Fecha_de_cooking_demo').datepicker({
            uiLibrary: 'bootstrap4',
            format: "dd-mm-yyyy",
            startDate: '+1d',
            autoclose: true,
            todayHighlight: true,
            orientation: "bottom",
            minDate: dateToday
        });

        $('#Fecha_de_la_llamada').datepicker({
            uiLibrary: 'bootstrap4',
            format: "dd-mm-yyyy",
            startDate: '+1d',
            autoclose: true,
            todayHighlight: true,
            orientation: "bottom",
            minDate: dateToday
        });

        $('#Fecha_de_visita_al_Showroom').datepicker({
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
