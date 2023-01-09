<div class="table-responsive">

    <div class="m-0 row justify-content-center">
        <div class="col-auto p-5">
            <div class="row g-3">
                <div class="col">
                    <strong>Nombres</strong>
                    <input type="text" class="form-control filter-input" placeholder="nombres" data-column="0">
                </div>
                <div class="col">
                    <strong>Apellidos</strong>
                    <input type="text" class="form-control filter-input" placeholder="apellidos" data-column="1">
                </div>
                <div class="col">
                    <strong>Dirección</strong>
                    <input type="text" class="form-control filter-input" placeholder="Dirección" data-column="3">
                </div>
            </div>
        </div>
    </div>

    <table class="table" id="clientes-table">
        <thead class="bg-dark">
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Cui</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombres }}</td>
            <td>{{ $cliente->apellidos }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>{{ $cliente->direccion }}</td>
            <td>{{ $cliente->cui }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clientes.show', [$cliente->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('clientes.edit', [$cliente->id]) }}"
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
