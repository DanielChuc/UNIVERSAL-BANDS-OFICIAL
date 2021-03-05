<div class="form-group {{ $errors->has('cliente') ? 'has-error' : ''}}">
    <label for="cliente" class="control-label">{{ 'Cliente' }}</label>
    <input class="form-control" name="cliente" type="text" id="cliente" value="{{ isset($envio->cliente) ? $envio->cliente : ''}}" required>
    {!! $errors->first('cliente', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="direccion" type="text" id="direccion" value="{{ isset($envio->direccion) ? $envio->direccion : ''}}" required>
    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pais') ? 'has-error' : ''}}">
    <label for="pais" class="control-label">{{ 'Pais' }}</label>
    <input class="form-control" name="pais" type="text" id="pais" value="{{ isset($envio->pais) ? $envio->pais : ''}}" required>
    {!! $errors->first('pais', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ciudad') ? 'has-error' : ''}}">
    <label for="ciudad" class="control-label">{{ 'Ciudad' }}</label>
    <input class="form-control" name="ciudad" type="text" id="ciudad" value="{{ isset($envio->ciudad) ? $envio->ciudad : ''}}" required>
    {!! $errors->first('ciudad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('codigoPostal') ? 'has-error' : ''}}">
    <label for="codigoPostal" class="control-label">{{ 'Codigopostal' }}</label>
    <input class="form-control" name="codigoPostal" type="text" id="codigoPostal" value="{{ isset($envio->codigoPostal) ? $envio->codigoPostal : ''}}" required>
    {!! $errors->first('codigoPostal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('metodoPago_id') ? 'has-error' : ''}}">
    <label for="metodoPago_id" class="control-label">{{ 'Metodopago Id' }}</label>
    <input class="form-control" name="metodoPago_id" type="number" id="metodoPago_id" value="{{ isset($envio->metodoPago_id) ? $envio->metodoPago_id : ''}}" >
    {!! $errors->first('metodoPago_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
