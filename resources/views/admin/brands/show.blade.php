@extends('layouts.admin')
@section('title', 'Showroom')
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.brand.index') }}"> Marcas </a> </li>
   <li class="breadcrumb-item active" aria-current="page"> {{ trans('global.show') }} </li>
@endsection
@section('content')

 <div class="card">
                <div class="card-header">
                   {{ trans('global.show') }}
                </div>

                <div class="card-body">
                	  <img class="img-fluid w-10" src="{{ isset($data->logo) ? asset($data->logo) : ''  }}">
                    <p class="text-justify"> <strong>{{ $data->name }}</strong> </p>
                    <p class="text-justify"><strong>Descripcion</strong> {!! $data->intro !!}</p>
                </div>
 </div>

@endsection
