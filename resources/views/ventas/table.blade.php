<div class="table-responsive">

    <!--Buscar por fecha-->
        <div class="m-0 row justify-content-center">
            <div class="col-auto p-5">
                <div class="row g-3">
                    <div class="col">
                        <strong>Fecha Probable</strong>
                        <input type="text" class="form-control filter-input" placeholder="yyyy-mm-dd" data-column="0">
                    </div>
                    <div class="col">
                        <strong>Fecha que se contactó</strong>
                        <input type="text" class="form-control filter-input" placeholder="yyyy-mm-dd" data-column="1">
                    </div>
                </div>
            </div>
        </div>

    <table class="table" id="ventas-table">
        <thead class="bg-dark">
        <tr>
            <th>Fecha Probable</th>
            <th>Fecha que se contactó</th>
            <th>Acuerdo</th>
            <th>Usuario</th>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->fecha_probable }}</td>
            <td>{{ $venta->fecha_contacto }}</td>
            <td>{{ $venta->acuerdo }}</td>
            <td>{{ $venta->user->name }}</td>
            <td>{{ $venta->cliente->nombres . " " . $venta->cliente->apellidos}}</td>
            <td>{{ $venta->producto->nombre}}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ventas.destroy', $venta->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ventas.show', [$venta->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ventas.edit', [$venta->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
