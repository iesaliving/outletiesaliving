@extends('layouts.admin')
@section('title', 'Prospectos')
@section('breadcrumb')   
   <li class="breadcrumb-item active" aria-current="page"> Prospectos </li>
@endsection
@section('content')

<div class="card">
    <div class="card-header">
       
          Listado de Prospectos

          <a class=" float-right" data-toggle="tooltip" data-placement="right" title="Nuevo Registro" href="{{ route('admin.leads.create') }}" ><i class="btn btn-success fa fa-plus" aria-hidden="true"> Agregar Lead</i></a>  


    </div>
            
    <div class="card-body">
        <div class="table-responsive">
            <table id="table" class=" table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                    <th>Nombre Apellido</th>
                    <th>Email</th>
                    <th>Estado</th>
                    <th>Fecha de Creación</th>
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
    .icono-btn{
        width: 25px
    }

</style>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.21/sorting/date-uk.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.21/sorting/datetime-moment.js"></script>
@parent
<script>

    $(document).ready(function() {
  

        $.fn.dataTable.moment( 'D-M-Y');


        $('#table').DataTable({
                language: {
                    url: '{{asset("js/vendor/lang.json")}}'
                },
                order: [[ 3, "desc" ]],       
                columnDefs: [
                    { type: 'date-uk', targets: 0 }
                ],
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
                    {data: 'fecha', name: 'fecha'},
                    {data: 'Reps', name: 'Reps'},

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
                                <a data-toggle="tooltip" data-placement="top" title="Ver/Editar" class="btn  mx-1 btn-info fa fa-pencil-square-o fa-2x" href="`+urlEditar+`"></a>
                                <a data-toggle="tooltip" data-placement="top" title="Solicitar Rating" class="btn  mx-1 btn-success" href="`+rating+`"><img class="icono-btn" src="{{ asset('img/admin/icono/rating.png')}}"></a>
                                <a data-toggle="tooltip" data-placement="top" title="Invitar Cooking Demo"
                                 class="btn  mx-1 btn-warning" href="`+cookDemo+`"><img class="icono-btn" src="{{ asset('img/admin/icono/cookingDemo.png')}}"></a>
                                <a data-toggle="tooltip" data-placement="top" title="Contactar Cliente con Distribuidor y enviar Per-Cotización" class="btn  mx-1 btn-secondary" href="`+precotizar+`"><img class="icono-btn" src="{{ asset('img/admin/icono/preCotizacion.png')}}"></a>

                                
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

        $(function () {
            $("body").tooltip({
                selector: '[data-toggle="tooltip"]',
                container: 'body'
            });
        })


    });  

</script>
@endsection