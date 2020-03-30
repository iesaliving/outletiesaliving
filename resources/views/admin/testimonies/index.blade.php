@extends('layouts.admin')
@section('title', 'Testimonios')
@section('breadcrumb')   
   <li class="breadcrumb-item active" aria-current="page"> Testimonios </li>
@endsection
@section('content')

<div class="card">
    <div class="card-header">
       
          Listado de Testimonios

          <a class=" float-right" data-toggle="tooltip" data-placement="right" title="Nuevo Registro" href="{{ route('admin.testimonies.create') }}" ><i class="btn btn-success fa fa-plus" aria-hidden="true"> {{ trans('global.add') }}</i></a>  

    </div>
            
    <div class="card-body">
        <div class="table-responsive">
            <table id="table" class=" table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                    <th> {{ trans('global.name') }}</th>
                    <th>{{ trans('global.action') }}</th>
                </tr>
                </thead>

            </table>
        </div>
    </div>
</div>


@endsection


@section('scripts')
@parent
<script>

    $(document).ready(function() {

        $('#table').DataTable({
                language: {
                    url: '{{asset("js/vendor/lang.json")}}'
                },
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: {
                        "url":  '{{ route("testimonies.table") }}',
                        "type": "get"
                        },
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, "width": "10%", "class": "text-center" },
                ]
            }).on('search.dt', function() {
              var input = $('.dataTables_filter input')[0];
                // $('#tx').val(input.value);
              //console.log(input.value)
            });

    });  


</script>
@endsection