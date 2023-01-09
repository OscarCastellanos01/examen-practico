<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $producto->nombre }}</p>
</div>

<!-- Categoria Id Field -->
<div class="col-sm-12">
    {!! Form::label('categoria_id', 'Categoria:') !!}
    <p>{{ $producto->categoria->nombre }}</p>
</div>

