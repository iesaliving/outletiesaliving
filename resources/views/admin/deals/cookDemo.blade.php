@extends('layouts.admin')
@section('title', 'Rating')
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.deals.index') }}"> Prospectos </a> </li>
   <li class="breadcrumb-item active" aria-current="page"> Invitación Cooking Demo </li>
@endsection
@section('content')

@php
 //dump($data)
 //dump($errors)
@endphp


 <div class="card">
      <div class="card-header">Invitación Cooking Demo</div>

                <div class="card-body">

                       <form id="form-envio" class="form-horizontal" role="form" method="POST" action=" {{ route('admin.deals.storeCookDemo') }}"  enctype="multipart/form-data">
                        @csrf

                        @if(isset($data))
                         <input type="hidden" name="dealsId" value="{{$data->dealsId}}">

                        @endif


                        <div class="row col-12">
                          <div class="col-md-8 mx-auto">
                            <div class="form-group row">
                                <label for="contact_Name" class="col-md-12 col-form-label text-md-left">Nombre de Prospecto</label>

                                <div class="col-md-12">

                                    <input readonly="" id="contact_Name" name="contact_Name" type="text" class="form-control @error('contact_Name') is-invalid @enderror" value="{{ old('contact_Name', isset($data) ? $data->contact_Name : '') }}" maxlength="100" required="">
      

                                   @error('contact_Name')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-8 mx-auto">
                            <div class="form-group row">
                                <label for="email" class="col-md-12 col-form-label text-md-left">Email de Prospecto</label>

                                <div class="col-md-12">

                                    <input readonly="" id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', isset($data) ? $data->email : '') }}" maxlength="100" required="">
      

                                   @error('email')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                          <div class="col-md-8 mx-auto">
                            <div class="form-group row">
                                <label for="email" class="col-md-12 col-form-label text-md-left">Fecha de Cooking demo</label>

                                <div class="col-md-12">

                                    <input style="width: 100%;" id="Fecha_de_cooking_demo" name="Fecha_de_cooking_demo" type="text" class="form-control col-md-12 @error('Fecha_de_cooking_demo') is-invalid @enderror" value="{{ old('Fecha_de_cooking_demo') }}" maxlength="100" required="">

                                 

                                   @error('email')
                                       <em class="invalid-feedback">
                                            {{ $message }}
                                        </em>
                                   @enderror

                                  
                                </div>
                            </div>
                          </div>

                      </div>


                      <div class="col-md-8 mx-auto center">
                        <button type="button" id="btn-modal" class="btn btn-primary mt-1">ENVIAR</button>
                      </div>

                    </form> 

                </div>

              </div>


<div class="modal fade" id="confirmacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content px-2" style="border-radius: 20px;padding-top: 0;">
      <div class="modal-header" style="border-radius: 20px;border: 0px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="bottommargin text-center">
            <p class="nomargin"> Si desea Invitar Prospecto a Cooking demo, presione "OK". En caso de que desee modificar algo presione "REGRESAR".</p>
        </div>
          <div class="row nomargin">
                <div class="col-6">
                    <button type="button" class="btn btn-secondary mt-1 btn-block" data-dismiss="modal"><b>REGRESAR</b></button>
                </div>
                <div class="col-6">
                    <button type="submit"  form="form-envio" class="btn btn-primary mt-1 btn-block"><b>OK</b></button>
                </div>
          </div>
      </div>
    </div>
  </div>
</div>


@endsection
@section('styles')
<style type="text/css">

.input-group-append{display: none;}
    
</style>

@endsection
@section('scripts')
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

            var form = $( "#form-envio" );
            form.validate({
                messages: {
                    Fecha_de_cooking_demo:{
                        required: "Este campo es Requerido"
                    },
                },

            });

            $("#btn-modal").click(function(){  // capture the click
                if(form.valid()){   // test for validity
                    $('#confirmacion').modal('show');
                }
            });

        })
</script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script>
        var dateToday = new Date();
        dateToday.setDate(dateToday.getDate() - 1);
        $('#Fecha_de_cooking_demo').datepicker({
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
