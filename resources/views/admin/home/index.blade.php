@extends('layouts.admin')
@section('title', 'HOME')
@section('breadcrumb')   
   <li class="breadcrumb-item active" aria-current="page"> Home Page </li>
@endsection
@section('content')

@php
 //dump($data->detail)
dump($errors)
@endphp


<div class="card">
      <div class="card-header">Home Page </div>

                <div class="card-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.home_page.store') }}" enctype="multipart/form-data">
                        @csrf
              
						@include('admin.componentes.imagen')

					<hr>

					<table class="table table-striped ">
						@foreach($data as $key => $data)
						<tr>
							<td width="	20%" >	
								@if(isset($data->id))
									<input type="hidden" name="id[]" value="{{$data->id}}">
								@endif
								<img class="img-fluid " id="{{'blah'.$key}}" src="{{ isset($data->image) ? asset($data->image) : ''  }}">
								<div class="input-group">
									<span class="input-group-btn">
										<span class="btn btn-primary btn-file">
											<i class="fa fa-search"></i> <input type="file" accept=".png, .jpg, .jpeg" data-idimg="{{'blah'.$key}}" class="imgInp" id="{{'img'.$key}}" name="img[]" >
											</span>
										</span>
										   
										<input type="text" class="form-control  @error('img.'.$key) is-invalid @enderror" readonly>
	   
									    @error('img.'.$key)
											<em class="invalid-feedback">
												{{ $message }}
											</em>
										@enderror
								 </div>
									<span class = "text-center" style = "color:red">Dimensiones: 650 x 590</span>
									  
							</td>

							<td>

							<div class="form-group row">
								<div class="col">
									<input  name="title[]" type="text" class="form-control @error('title.'.$key) is-invalid @enderror" value="{{ old('title.'.$key, isset($data->title) ? $data->title : '') }}" maxlength="100" required="" placeholder="TITULO">
	
									@error('title.'.$key)
										<em class="invalid-feedback">
											{{ $message }}
										</em>
									@enderror
								 </div>
							</div>

							<div class="form-group row">
								    <div class="col">
										<textarea class="form-control " name="text[]" rows="2" maxlength="550" placeholder="{{ trans('global.description') }}">{{old('text.'.$key,isset($data->text) ? $data->text : '')}}</textarea>
			
										@error('text.'.$key)
											   <em class="invalid-feedback">
													{{ $message }}
												</em>
										 @enderror
									</div>
									  
								</div>
							
							</td>

						</tr>

						@endforeach
                          
		              

				    </table>

                      <button type="submit" id='btnsummit' class="btn btn-primary my-2">{{ trans('global.save') }}</button>
                    </form> 

                </div>

   
@endsection
