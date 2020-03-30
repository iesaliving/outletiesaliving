@extends('layouts.admin')
@section('title', 'Showroom')
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.showroom.index') }}"> Showroom </a> </li>
   <li class="breadcrumb-item active" aria-current="page"> {{ trans('global.show') }} </li>
@endsection
@section('content')

 <div class="card">
                <div class="card-header">
                   {{ trans('global.show') }}
                </div>

                <div class="card-body">
                	<img class="img-fluid w-10" src="{{ isset($data->image) ? asset($data->image) : ''  }}">
                     <strong>{{ $data->title }}</strong>
                    <p><strong>Descripcion</strong> {!! $data->description !!}</p>
                </div>
 </div>

@endsection
