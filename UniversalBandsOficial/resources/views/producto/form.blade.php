<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($producto->nombre) ? $producto->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <textarea class="form-control" rows="5" name="descripcion" type="textarea" id="descripcion" required>{{ isset($producto->descripcion) ? $producto->descripcion : ''}}</textarea>
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($producto->cantidad) ? $producto->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($producto->precio) ? $producto->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="control-label">{{ 'Estado' }}</label>
    <input class="form-control" name="estado" type="text" id="estado" value="{{ isset($producto->estado) ? $producto->estado : ''}}" required>
    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoriap_id') ? 'has-error' : ''}}">
    <label for="categoriap_id" class="control-label">{{ 'Categoriap Id' }}</label>
    <input class="form-control" name="categoriap_id" type="number" id="categoriap_id" value="{{ isset($producto->categoriap_id) ? $producto->categoriap_id : ''}}" >
    {!! $errors->first('categoriap_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('proveedor_id') ? 'has-error' : ''}}">
    <label for="proveedor_id" class="control-label">{{ 'Proveedor Id' }}</label>
    <input class="form-control" name="proveedor_id" type="number" id="proveedor_id" value="{{ isset($producto->proveedor_id) ? $producto->proveedor_id : ''}}" >
    {!! $errors->first('proveedor_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
