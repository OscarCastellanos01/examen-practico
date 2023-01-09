@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    
    <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ventas</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('ventas.create') }}">
                        Agregar nueva venta
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('ventas.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('js')
     <!-- datatables con bootstrap -->
	 <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	 <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    
	 <!-- Para usar los botones -->
	 <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	 <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

    <script>
    $(document).ready(function(){
        var table = $('#ventas-table').DataTable({
            dom: "Bfrtip",
            buttons:{
                dom: {
                    button: {
                        className: 'btn'
                    }
                },
                buttons: [
                {
                    //definimos estilos del boton de excel
                    extend: "excel",
                    text:'Exportar a .xlsx',
                    className:'btn btn-success',

                    excelStyles: { 
                        "template": [
                            "blue_medium",
                            "header_green",
                            "title_medium"
                        ]   
                    } 
                }
                ]            
            }
        });

        $('.filter-input').keyup(function () {
            table.column($(this).data('column'))
            .search($(this).val())
            .draw();
        });
    });
    </script>
@endsection