<div class="form-group {{ $errors->has('cliente') ? 'has-error' : ''}}">
    <label for="cliente" class="control-label">{{ 'Cliente' }}</label>
    <input class="form-control" name="cliente" type="text" id="cliente" value="{{ isset($efectivo->cliente) ? $efectivo->cliente : ''}}" required>
    {!! $errors->first('cliente', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipoMoneda') ? 'has-error' : ''}}">
    <label for="tipoMoneda" class="control-label">{{ 'Tipomoneda' }}</label>
    <input class="form-control" name="tipoMoneda" type="text" id="tipoMoneda" value="{{ isset($efectivo->tipoMoneda) ? $efectivo->tipoMoneda : ''}}" required>
    {!! $errors->first('tipoMoneda', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('monto') ? 'has-error' : ''}}">
    <label for="monto" class="control-label">{{ 'Monto' }}</label>
    <input class="form-control" name="monto" type="number" id="monto" value="{{ isset($efectivo->monto) ? $efectivo->monto : ''}}" required>
    {!! $errors->first('monto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cambio') ? 'has-error' : ''}}">
    <label for="cambio" class="control-label">{{ 'Cambio' }}</label>
    <input class="form-control" name="cambio" type="number" id="cambio" value="{{ isset($efectivo->cambio) ? $efectivo->cambio : ''}}" required>
    {!! $errors->first('cambio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('metodoPago_id') ? 'has-error' : ''}}">
    <label for="metodoPago_id" class="control-label">{{ 'Metodopago Id' }}</label>
    <input class="form-control" name="metodoPago_id" type="number" id="metodoPago_id" value="{{ isset($efectivo->metodoPago_id) ? $efectivo->metodoPago_id : ''}}" >
    {!! $errors->first('metodoPago_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
