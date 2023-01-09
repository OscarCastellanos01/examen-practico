<!-- Fecha Probable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_probable', 'Fecha probable para adiquirir su producto:') !!}
    {!! Form::date('fecha_probable', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Fecha Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_contacto', 'Fecha que se contactó:') !!}
    {!! Form::date('fecha_contacto', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Acuerdo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acuerdo', 'Acuerdo que se llego:') !!}
    {!! Form::text('acuerdo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Usuario:') !!}
    {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
</div>

<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente:') !!}
    {!! Form::select('cliente_id', $clientes,null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'Producto:') !!}
    {!! Form::select('producto_id', $productos, null, ['class' => 'form-control']) !!}
</div>