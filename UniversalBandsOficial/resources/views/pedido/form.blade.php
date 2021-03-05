<div class="form-group {{ $errors->has('nombreDestinatario') ? 'has-error' : ''}}">
    <label for="nombreDestinatario" class="control-label">{{ 'Nombredestinatario' }}</label>
    <input class="form-control" name="nombreDestinatario" type="text" id="nombreDestinatario" value="{{ isset($pedido->nombreDestinatario) ? $pedido->nombreDestinatario : ''}}" required>
    {!! $errors->first('nombreDestinatario', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="direccion" type="text" id="direccion" value="{{ isset($pedido->direccion) ? $pedido->direccion : ''}}" required>
    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ciudad') ? 'has-error' : ''}}">
    <label for="ciudad" class="control-label">{{ 'Ciudad' }}</label>
    <input class="form-control" name="ciudad" type="text" id="ciudad" value="{{ isset($pedido->ciudad) ? $pedido->ciudad : ''}}" required>
    {!! $errors->first('ciudad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('entidadFederativa') ? 'has-error' : ''}}">
    <label for="entidadFederativa" class="control-label">{{ 'Entidadfederativa' }}</label>
    <input class="form-control" name="entidadFederativa" type="text" id="entidadFederativa" value="{{ isset($pedido->entidadFederativa) ? $pedido->entidadFederativa : ''}}" required>
    {!! $errors->first('entidadFederativa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pais') ? 'has-error' : ''}}">
    <label for="pais" class="control-label">{{ 'Pais' }}</label>
    <input class="form-control" name="pais" type="text" id="pais" value="{{ isset($pedido->pais) ? $pedido->pais : ''}}" required>
    {!! $errors->first('pais', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaPedido') ? 'has-error' : ''}}">
    <label for="fechaPedido" class="control-label">{{ 'Fechapedido' }}</label>
    <input class="form-control" name="fechaPedido" type="date" id="fechaPedido" value="{{ isset($pedido->fechaPedido) ? $pedido->fechaPedido : ''}}" required>
    {!! $errors->first('fechaPedido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaEnvio') ? 'has-error' : ''}}">
    <label for="fechaEnvio" class="control-label">{{ 'Fechaenvio' }}</label>
    <input class="form-control" name="fechaEnvio" type="date" id="fechaEnvio" value="{{ isset($pedido->fechaEnvio) ? $pedido->fechaEnvio : ''}}" required>
    {!! $errors->first('fechaEnvio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cliente_id') ? 'has-error' : ''}}">
    <label for="cliente_id" class="control-label">{{ 'Cliente Id' }}</label>
    <input class="form-control" name="cliente_id" type="number" id="cliente_id" value="{{ isset($pedido->cliente_id) ? $pedido->cliente_id : ''}}" >
    {!! $errors->first('cliente_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('metodoPago_id') ? 'has-error' : ''}}">
    <label for="metodoPago_id" class="control-label">{{ 'Metodopago Id' }}</label>
    <input class="form-control" name="metodoPago_id" type="number" id="metodoPago_id" value="{{ isset($pedido->metodoPago_id) ? $pedido->metodoPago_id : ''}}" >
    {!! $errors->first('metodoPago_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('envio_id') ? 'has-error' : ''}}">
    <label for="envio_id" class="control-label">{{ 'Envio Id' }}</label>
    <input class="form-control" name="envio_id" type="number" id="envio_id" value="{{ isset($pedido->envio_id) ? $pedido->envio_id : ''}}" >
    {!! $errors->first('envio_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
