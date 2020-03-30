@extends('layouts.admin')
@section('title', trans('global.show'))
@section('breadcrumb')   
   <li class="breadcrumb-item"> <a href="{{ route('admin.services.index') }}"> {{ trans('global.services') }} </a> </li>
   <li class="breadcrumb-item active" aria-current="page"> {{ trans('global.show') }} </li>
@endsection

@section('content')

            <div class="card">
                <div class="card-header">
                   {{ trans('global.show') }}
                </div>

                <div class="card-body">
                    <p><strong>{{ trans('global.name') }}</strong> {{ $data->name }}</p>
                    <p><strong>Slug</strong> {{ $data->slug }}</p>
                    <p><strong>status</strong> {!! $data->status !!}</p>
                </div>
            </div>

@endsection