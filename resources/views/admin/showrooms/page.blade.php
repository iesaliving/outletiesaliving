@extends('layouts.admin')
@section('title', trans('global.register'))
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.showroom.index') }}"> Showroom Pagina</a> </li>
   <li class="breadcrumb-item active" aria-current="page"> {{ trans('global.register') }} </li>
@endsection
@section('content')


<div class="card">
    <div class="card-header">
    	..... Showroom Page .....
    </div>
        <div class="card-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.showroom.post') }}" enctype="multipart/form-data">
                @csrf
              
			    @include('admin.componentes.imagen')
				<hr>

				<div class="form-group row">
					@foreach($headquarter as $key => $head)
					<div class="col-md-6 col-lg-6 text-center">
						<div class="form-group row">

							<input type="hidden" name="idh[]" value="{{$head->id}}">

                           	<label for="title" class="col-md-1 col-form-label text-md-right">
                           	    <i style="color: teal" class="fa fa-simplybuilt"></i>
                           	</label>


                            <div class="col-md-8">
                                <input id="{{'name.'.$key}}" name="name[]" type="text" class="form-control @error('name.'.$key) is-invalid @enderror" value="{{ old('name.'.$key, isset($head) ? $head->name : '') }}" maxlength="100" required="" placeholder="Nombre sede">

                                @error('title.'.$key)
		                            <em class="invalid-feedback">
		                                {{ $message }}
		                            </em>
		                        @enderror

                            </div>

                           </div>

                         <div class="form-group row">

                         	<label for="title" class="col-md-1 col-form-label text-md-right"><i style="color: teal" class="fa fa-map-marker fa-2x"></i></label>
                             
		                          <div class="col-md-8">

		                             <textarea class="form-control  @error('address.'.$key) is-invalid @enderror" name="address[]"  maxlength="500" placeholder="Dirección">{{old('address.'.$key,isset($head->address) ? $head->address : '')}}</textarea>
		                           
		                         </div>

		                             @error('address.'.$key)
		                                   <em class="invalid-feedback">
		                                        {{ $message }}
		                                    </em>
		                            @enderror

                            </div>

                           
                           <div class="form-group row">

                           	     <label for="phone" class="col-md-1 col-form-label text-md-right"><img class="img-responsive" src="{{ asset('img/icono-btn/telefono.png')}}" style="margin-left: 10px;width: 20px"></label>
                                   

                                 <div class="col-md-8">
                                 	<input name="phone[]" type="text" class="form-control @error('phone.'.$key) is-invalid @enderror" value="{{ old('phone.'.$key, isset($head) ? $head->phone : '') }}" maxlength="100" required="" placeholder="Numero de Telefono">

                                 	@error('phone.'.$key)
		                                <em class="invalid-feedback">
		                                    {{ $message }}
		                                </em>
		                            @enderror

                                 </div>

                           </div>

                            <div class="form-group row">
                            	  <label for="title" class="col-md-1 col-form-label text-md-right"><img src="{{ asset('img/icono-btn/email.png')}}" style="margin-left: 10px;width: 20px"></label>

                                 
                                 <div class="col-md-8">
                                 	<input name="email[]" type="text" class="form-control @error('email.'.$key) is-invalid @enderror" value="{{ old('email.'.$key, isset($head) ? $head->email : '') }}" maxlength="100"  placeholder="Correo electrónico">

                                 	@error('email.'.$key)
		                                <em class="invalid-feedback">
		                                    {{ $message }}
		                                </em>
		                            @enderror

                                 </div>

                           </div>

                           	@php
                           		$horario =explode("#",$head->schedule);

                           	@endphp

                           <div class="form-group row">
                            	  <label for="title" class="col-md-1 col-form-label text-md-right">
                            	  		<i class="fa fa-calendar" style="color: teal"></i>
                            	  </label>

                            	  <div class="col-md-3"> 
                            	  	Lun.
                                 	<input name="{{'schedule'.$key.'[]'}}" type="text" class="form-control @error('schedule') is-invalid @enderror" value="{{ old('schedule.'.$key, isset($horario[0]) ? $horario[0] : '') }}" maxlength="12"  placeholder="lunes">

                                 	@error('schedule.'.$key)
		                                <em class="invalid-feedback">
		                                    {{ $message }}
		                                </em>
		                            @enderror

                                 </div>
                                  <div class="col-md-3">
                            	  	Mar.
                                 	<input name="{{'schedule'.$key.'[]'}}" type="text" class="form-control @error('schedule') is-invalid @enderror" value="{{ old('schedule.'.$key, isset($horario[1]) ? $horario[1] : '') }}" maxlength="12"  placeholder="Martes">

                                 	@error('schedule.1')
		                                <em class="invalid-feedback">
		                                    {{ $message }}
		                                </em>
		                            @enderror

                                 </div>
                                  <div class="col-md-3">
                            	  	Mier.
                                 	<input name="{{'schedule'.$key.'[]'}}" type="text" class="form-control @error('schedule') is-invalid @enderror" value="{{ old('schedule.'.$key, isset($horario[2]) ? $horario[2] : '') }}" maxlength="12"  placeholder="lunes">

                                 	@error('schedule'.$key)
		                                <em class="invalid-feedback">
		                                    {{ $message }}
		                                </em>
		                            @enderror

                                 </div>                                
                            
                            </div>

                            <div class="form-goup row">
                            	<label  class="col-md-1 col-form-label text-md-right align-middle">
                            	  		<i class="fa fa-calendar" style="color: teal"></i>
                            	  </label>
                            	 <div class="col-md-3">
                            	  	Jue.
                                 	<input name="{{'schedule'.$key.'[]'}}" type="text" class="form-control @error('schedule') is-invalid @enderror" value="{{ old('schedule.'.$key, isset($horario[3]) ? $horario[3] : '') }}" maxlength="12"  placeholder="lunes">

                                 	@error('schedule'.$key)
		                                <em class="invalid-feedback">
		                                    {{ $message }}
		                                </em>
		                            @enderror

                                 </div>
                                  <div class="col-md-3 ">
                            	  	Vier.
                                 	<input name="{{'schedule'.$key.'[]'}}" type="text" class="form-control @error('schedule') is-invalid @enderror" value="{{ old('schedule.'.$key, isset($horario[4]) ? $horario[4] : '') }}" maxlength="12"  placeholder="lunes">

                                 	@error('schedule'.$key)
		                                <em class="invalid-feedback">
		                                    {{ $message }}
		                                </em>
		                            @enderror

                                 </div>

                                 <div class="col-md-3">
                            	  	Sab.
                                 	<input name="{{'schedule'.$key.'[]'}}" type="text" class="form-control @error('schedule') is-invalid @enderror" value="{{ old('schedule.'.$key, isset($horario[5]) ? $horario[5] : '') }}" maxlength="12"  placeholder="lunes">

                                 	@error('schedule.'.$key)
		                                <em class="invalid-feedback">
		                                    {{ $message }}
		                                </em>
		                            @enderror

                                 </div>

                                 <div class="mx-5 col-md-3">
                            	  	Dom.
                                 	<input name="{{'schedule'.$key.'[]'}}" type="text" class="form-control @error('schedule'.$key) is-invalid @enderror" value="{{ old('schedule.'.$key, isset($horario[6]) ? $horario[6] : '') }}" maxlength="12"  placeholder="lunes">

                                 	@error('schedule'.$key)
		                                <em class="invalid-feedback">
		                                    {{ $message }}
		                                </em>
		                            @enderror

                                 </div>
                            </div>



                     <!-- fin sede 1  -->     
                        
					</div>
					@endforeach


			    </div>

			    <hr>

                    <div class="card">
                        <div class="card-header">
                          	  Slide
                          <a id="add"  onclick="agregarFila()" class="btn btn-outline-success float-right"><i class="fa fa-plus" aria-hidden="true"> </i></a>
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
	                                                <input type="text" class="form-control @error('slide.'.$key) is-invalid @enderror" readonly>
	                                                 @error('slide.'.$key)
	                                                             <em class="invalid-feedback">
	                                                                  {{ $message }}
	                                                              </em>
	                                                  @enderror
	                                            </div>
												<span class = "text-center" style = "color:red">Dimensiones: 1.132 x 600</span>
                                            </td>
                                            <td style="vertical-align: middle;"> 
                                            	<a id="{{$key}}" class="btn btn-outline-danger btn_remove">
									        	<i class="fa fa-trash" > </i></a>
									         </td>
                                        </tr>  

                          				@endforeach

                          			@endif
                          			
                          		</tbody>
                          		
                          	</table>

                          </div>
                          
                        </div>



                       

                     </div>

                    <div class="card">
                        <div class="card-header">
                              COOKING DEMO
                        </div>

                       <div class="card-body">
                          <div class="table-responsive">
                              <table id="imgTable" class="table table-striped ">
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
                                          @if(isset($detail->id))
                                            <input type="hidden" name="id" value="{{$detail->id}}">
                                          @endif
                                            <img class="img-fluid" id="blah0" src="{{ isset($detail->image) ? asset($detail->image) : ''  }}">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        <i class="fa fa-search"></i> <input type="file" accept=".jpg, .jpeg" data-idimg="blah0" class="imgInp" id="demo" name="demo" >
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control @error('demo') is-invalid @enderror" readonly>
                                                 @error('demo')
                                                             <em class="invalid-feedback">
                                                                  {{ $message }}
                                                              </em>
                                                  @enderror
                                            </div>
											<span class = "text-center" style = "color:red">Dimensiones: 789 x 551</span>   
                                      </td>

                                      <td>
                                        <div class="form-group row">
                                                <div class="col">
                                                  <input id="title" name="title" type="text" class="form-control @error('title_d') is-invalid @enderror" value="{{ old('title', isset($detail->title) ? $detail->title : '') }}" maxlength="100" required="" placeholder="TITULO">


                                                 @error('title')
                                                     <em class="invalid-feedback">
                                                          {{ $message }}
                                                      </em>
                                                 @enderror
                                             </div>
                                            
                                        </div>

                                        <div class="form-group row">

                                            <div class="col">
                                                <textarea class="form-control  @error('description') is-invalid @enderror" name="description" rows="2" maxlength="550" placeholder="{{ trans('global.description') }}">{{old('description_d.',isset($detail->description) ? $detail->description : '')}}</textarea>

                                               @error('description')
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

                <button type="submit" id='btnsummit' class="btn btn-primary my-2">{{ trans('global.save') }}</button>
            </form> 

        </div>

@endsection

@section('scripts')
@parent
<script>

  let fila = {{isset($slide) ? count($slide)  : 0}};

  function agregarFila() {

   fila ++;

   var htmlTags = `<tr id="row${fila}">
		        		<td width="20%">     
                            <img class="img-fluid " id="slid${fila}" >
                                                                  
		        </td>
		        <td style="vertical-align: middle;"> 
					<div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary btn-file">
                               <i class="fa fa-search"></i> <input type="file" accept=".png, .jpg, .jpeg" onchange=(readURL(this,'slid${fila}')) id="slide${fila}" name="slide[]" >
                            </span>
                        </span>
                      <input type="text" class="form-control" readonly>
                    </div>

		        </td>
		        <td style="vertical-align: middle;"> <a id="${fila}" class="btn btn-outline-danger btn_remove">
		        	<i class="fa fa-trash" > </i></a
		         ></td>
             </tr>`;
       
      
   $('#slideTable tbody').append(htmlTags);

}

$(document).on('click', '.btn_remove', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
});



</script>

@endsection