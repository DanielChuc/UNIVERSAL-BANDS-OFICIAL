<div class="form-group {{ $errors->has('estadoPedido') ? 'has-error' : ''}}">
    <label for="estadoPedido" class="control-label">{{ 'Estadopedido' }}</label>
    <input class="form-control" name="estadoPedido" type="text" id="estadoPedido" value="{{ isset($detallepedido->estadoPedido) ? $detallepedido->estadoPedido : ''}}" >
    {!! $errors->first('estadoPedido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <textarea class="form-control" rows="5" name="descripcion" type="textarea" id="descripcion" >{{ isset($detallepedido->descripcion) ? $detallepedido->descripcion : ''}}</textarea>
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($detallepedido->cantidad) ? $detallepedido->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="date" id="fecha" value="{{ isset($detallepedido->fecha) ? $detallepedido->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('producto_id') ? 'has-error' : ''}}">
    <label for="producto_id" class="control-label">{{ 'Producto Id' }}</label>
    <input class="form-control" name="producto_id" type="number" id="producto_id" value="{{ isset($detallepedido->producto_id) ? $detallepedido->producto_id : ''}}" >
    {!! $errors->first('producto_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pedido_id') ? 'has-error' : ''}}">
    <label for="pedido_id" class="control-label">{{ 'Pedido Id' }}</label>
    <input class="form-control" name="pedido_id" type="number" id="pedido_id" value="{{ isset($detallepedido->pedido_id) ? $detallepedido->pedido_id : ''}}" >
    {!! $errors->first('pedido_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
