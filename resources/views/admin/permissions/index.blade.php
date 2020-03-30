@extends('layouts.admin')
@section('title',  trans('global.permission.title_singular') )
@section('breadcrumb')   
   <li class="breadcrumb-item"> {{ trans('global.permission.title') }} </li>
@endsection

@section('content')


<div class="card">
    <div class="card-header">
          {{ trans('global.permission.title_singular') }} {{ trans('global.list') }}    <a class=" float-right" data-toggle="tooltip" data-placement="right" title="Nuevo Registro" href="{{ route('admin.permissions.create') }}" ><i class="btn btn-primary fa fa-plus" aria-hidden="true"> {{ trans('global.add') }}</i></a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="table" class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th class="text-center"> {{ trans('global.permission.fields.title') }} </th>
                        <th class="text-center">Accion</th>
                        <th><button type="button" name="bulk_delete" id="bulk_delete" class="btn btn-outline-danger btn-sm"
                        data-remote="{{ action('Admin\PermissionsController@massDestroy')}}" ><i class="fa fa-trash"></i></button></th> 
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</div>

   
@endsection

@push('scripts')
<script>

    $(document).ready(function() {
        $('#table').DataTable({
                language: {
                    url: '{{asset("js/vendor/Spanish.json")}}'
                },
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: "{{ route('permissions.table') }}",
                columns: [
                    {data: 'title', name: 'title'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, "class" : "text-center",  "width": "15%"},
                    {data: 'checkbox', orderable:false, searchable:false, "width": "10px"}
                ]
            }); 

    } );

</script>

@endpush

