<!-- Fecha Probable Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_probable', 'Fecha probable para adiquirir su producto:') !!}
    <p>{{ $venta->fecha_probable }}</p>
</div>

<!-- Fecha Contacto Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_contacto', 'Fecha que se contactó:') !!}
    <p>{{ $venta->fecha_contacto }}</p>
</div>

<!-- Acuerdo Field -->
<div class="col-sm-12">
    {!! Form::label('acuerdo', 'Acuerdo:') !!}
    <p>{{ $venta->acuerdo }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'Usuario:') !!}
    <p>{{ $venta->user->name }}</p>
</div>

<!-- Cliente Id Field -->
<div class="col-sm-12">
    {!! Form::label('cliente_id', 'Cliente:') !!}
    <p>{{ $venta->cliente->nombres . " " . $venta->cliente->apellidos}}</p>
</div>

<!-- Producto Id Field -->
<div class="col-sm-12">
    {!! Form::label('producto_id', 'Producto:') !!}
    <p>{{ $venta->producto->nombre }}</p>
</div>

