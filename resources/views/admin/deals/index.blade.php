@extends('layouts.admin')
@section('title', 'Deals')
@section('breadcrumb')   
   <li class="breadcrumb-item active" aria-current="page"> Deals </li>
@endsection
@section('content')

<div class="card">
    <div class="card-header">
       
          Listado de Deals

          <a class=" float-right" data-toggle="tooltip" data-placement="right" title="Nuevo Registro" href="{{ route('admin.leads.create') }}" ><i class="btn btn-success fa fa-plus" aria-hidden="true"> Nuevo Lead</i></a>  

    </div>
            
    <div class="card-body">
        <div class="table-responsive">
            <table id="table" class=" table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                    <th>Nombre Apellido</th>
                    <th>Email</th>
                    <th>Estado</th>
                    <th>Hora de Creación</th>
                    <th>Representante</th>
                    <th>Acciones</th>
                </tr>
                </thead>

            </table>
        </div>
    </div>
</div>


@endsection

@section('styles')
@parent

<style type="text/css">
    tr td.d-inline-flex-td{
        display: inline-flex;
    }

</style>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@parent
<script>

    $(document).ready(function() {


        $('#table').DataTable({
                language: {
                    url: '{{asset("js/vendor/lang.json")}}'
                },
                processing: true,
                serverSide: false,
                responsive: true,
                ajax: {
                        "url":  '{{ route("admin.deals.table") }}',
                        "type": "get"
                        },
                columns: [
                    {data: 'contactName', name: 'contactName'},
                    {data: 'email', name: 'email'},
                    {data: 'stage', name: 'stage'},
                    {data: 'hora', name: 'hora'},
                    {data: 'representante', name: 'representante'},

                    { data: null, className: 'd-inline-flex-td',   render: function ( data, type, row ) {
                        var urlEditar = '{{ route("admin.deals.edit", "dealsId=:id") }}';
                        urlEditar = urlEditar.replace(':id', data.id);

                        var rating = '{{ route("admin.deals.rating", "dealsId=:id") }}';
                        rating = rating.replace(':id', data.id);

                        var cookDemo = '{{ route("admin.deals.cookDemo", "dealsId=:id") }}';
                        cookDemo = cookDemo.replace(':id', data.id);

                        var precotizar = '{{ route("admin.deals.precotizar", "dealsId=:id") }}';
                        precotizar = precotizar.replace(':id', data.id);

                     
                        //urlEliminar = urlEliminar.replace(':id', data.id);

                        button=`
                                <a class="btn  mx-1 btn-info fa fa-pencil-square-o" href="`+urlEditar+`"></a>
                                <a class="btn  mx-1 btn-success fa fa-trophy" href="`+rating+`"></a>
                                <a class="btn  mx-1 btn-warning fa fa-shopping-basket" href="`+cookDemo+`"></a>
                                <a class="btn  mx-1 btn-secondary fa fa-file-text" href="`+precotizar+`"></a>
                                
                                `
                    return button;
                    } },
                ]
            })


            $('#table').on('click', '.btn-danger', function(){
                  var url = $(this).data('remote');
                  console.log('sdfsfsd')
                swal.fire({
                title: "¿Esta seguro de borrar este Post?",
                text: "Esta operacion es definitiva",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Si, Borrarlo",
                cancelButtonText: "No, Cancelar",
                    preConfirm: (login) => {
                        console.log(url)
                        $.ajax({
                            context: this,
                            url: url,
                            type: 'POST',
                            data:   {
                                        "_token": $("meta[name='csrf-token']").attr("content"),
                                        "_method": 'DELETE'
                                    },
                            success: function (data) {
                                if (data==='true') {
                                    swal.fire("Borrado", "Este Post ha sido eliminado","success");
                                    
                                }else{
                                    swal.fire("Error", "No se pudo realizar la operacion", "error");
                                }
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                    swal.fire("Error", "No se pudo realizar la operacion", "error");
                            }
                            }) 
                    },
                })

            })

        });  

</script>
@endsection