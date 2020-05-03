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
      <div class="card-header">{{isset($data->leadsId) ?  trans('global.update') : trans('global.register')}} Leads</div>

                <div class="card-body">

                       <form class="form-horizontal" role="form" method="POST" action=" {{ route('admin.leads.storeProspecto') }}"  enctype="multipart/form-data">
                        @csrf

                        @if(isset($data))
                         <input type="hidden" name="leadsId" value="{{$data->leadsId}}">

                        @endif


                        <div class="row col-12">
                          <div class="col-md-8 mx-auto">
                            <div class="form-group row">
                                <label for="propecto_name" class="col-md-12 col-form-label text-md-left">Nombre de Prospecto</label>

                                <div class="col-md-12">

                                    <input id="propecto_name" name="propecto_name" type="text" class="form-control @error('propecto_name') is-invalid @enderror" value="{{ old('propecto_name', isset($data) ? $data->propecto_name : '') }}" maxlength="100" required="">
      

                                   @error('propecto_name')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>
                          <div class="col-md-8 mx-auto">
                            <div class="form-group row">
                                <label for="stage" class="col-md-12 col-form-label text-md-left">Fase</label>

                                <div class="col-md-12">

                                    <select id="stage" name="stage" class="form-control @error('stage') is-invalid @enderror" required>
                                      <option value="">Seleccione Fase</option>
                                      @foreach ($stages as $stage)

                                        <option  value="{{$stage['actualValue']}}">{{$stage['displayValue']}}
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
                            <div class="col-md-8 mx-auto">
                                <div class="form-group row">
                                <label for="time" class="col-md-12 col-form-label text-md-left">Fecha de Cierre</label>

                                <div class="col-md-12">

                                    <input id="time" name="time" type="text" class="form-control @error('time') is-invalid @enderror" value="{{ old('time') }}" maxlength="100" required="">
      

                                   @error('time')
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




@section('scripts')
@parent
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script>
        var dateToday = new Date();
        dateToday.setDate(dateToday.getDate() - 1);
        $('#time').datepicker({
            uiLibrary: 'bootstrap4',
            format: "dd/mm/yyyy",
            startDate: '+1d',
            autoclose: true,
            todayHighlight: true,
            orientation: "bottom",
            minDate: dateToday
        });
    </script>
@endsection
