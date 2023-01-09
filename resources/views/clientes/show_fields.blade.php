<!-- Nombres Field -->
<div class="col-sm-12">
    {!! Form::label('nombres', 'Nombres:') !!}
    <p>{{ $cliente->nombres }}</p>
</div>

<!-- Apellidos Field -->
<div class="col-sm-12">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    <p>{{ $cliente->apellidos }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $cliente->telefono }}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $cliente->direccion }}</p>
</div>

<!-- Cui Field -->
<div class="col-sm-12">
    {!! Form::label('cui', 'Cui:') !!}
    <p>{{ $cliente->cui }}</p>
</div>

