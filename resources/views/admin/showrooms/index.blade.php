@extends('layouts.admin')
@section('title', 'Testimonios')
@section('breadcrumb')   
   <li class="breadcrumb-item active" aria-current="page"> ShowRoom </li>
@endsection
@section('content')

<div class="card">
    <div class="card-header">
       
        Listado de Showroom

       <!--  <a class=" float-right" data-toggle="tooltip" data-placement="right" title="Nuevo Registro" href="{{ route('admin.showroom.create') }}" ><i class="btn btn-success fa fa-plus" aria-hidden="true"> {{ trans('global.add') }}</i></a> -->  

    </div>
            
    <div class="card-body">
        <div class="table-responsive">
            <table id="table" class=" table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                    <th> Titulo</th>
                    <th> Tipo</th>
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
                        "url":  '{{ route("showroom.table") }}',
                        "type": "get"
                        },
                columns: [
                    {data: 'title', name: 'title'},
                    {data: 'tipo', name: 'tipo', searchable: false, "class": "text-center" },
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