<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre</strong>
            {!! Form::text('nombre', null, array('placeholder' => 'Juan','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apellido:</strong>
            {!! Form::text('apellido', null, array('placeholder' => 'Gonzalez','class' => 'form-control')) !!}
        </div>
                <div class="form-group">
            <strong>Correo:</strong>
            {!! Form::email('correo', null, array('placeholder' => 'juan@correo.cl','class' => 'form-control')) !!}
        </div>
                <div class="form-group">
            <strong>Telefono:</strong>
            {!! Form::number('telefono', null, array('placeholder' => '99123145','class' => 'form-control')) !!}
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>