<div class="form-group {{ $errors->has('nombreCompania') ? 'has-error' : ''}}">
    <label for="nombreCompania" class="control-label">{{ 'Nombrecompania' }}</label>
    <input class="form-control" name="nombreCompania" type="text" id="nombreCompania" value="{{ isset($proveedor->nombreCompania) ? $proveedor->nombreCompania : ''}}" required>
    {!! $errors->first('nombreCompania', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombreContacto') ? 'has-error' : ''}}">
    <label for="nombreContacto" class="control-label">{{ 'Nombrecontacto' }}</label>
    <input class="form-control" name="nombreContacto" type="text" id="nombreContacto" value="{{ isset($proveedor->nombreContacto) ? $proveedor->nombreContacto : ''}}" required>
    {!! $errors->first('nombreContacto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cargoContacto') ? 'has-error' : ''}}">
    <label for="cargoContacto" class="control-label">{{ 'Cargocontacto' }}</label>
    <input class="form-control" name="cargoContacto" type="text" id="cargoContacto" value="{{ isset($proveedor->cargoContacto) ? $proveedor->cargoContacto : ''}}" required>
    {!! $errors->first('cargoContacto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('paginaWeb') ? 'has-error' : ''}}">
    <label for="paginaWeb" class="control-label">{{ 'Paginaweb' }}</label>
    <input class="form-control" name="paginaWeb" type="text" id="paginaWeb" value="{{ isset($proveedor->paginaWeb) ? $proveedor->paginaWeb : ''}}" required>
    {!! $errors->first('paginaWeb', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="email" id="email" value="{{ isset($proveedor->email) ? $proveedor->email : ''}}" required>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="direccion" type="text" id="direccion" value="{{ isset($proveedor->direccion) ? $proveedor->direccion : ''}}" required>
    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pais') ? 'has-error' : ''}}">
    <label for="pais" class="control-label">{{ 'Pais' }}</label>
    <input class="form-control" name="pais" type="text" id="pais" value="{{ isset($proveedor->pais) ? $proveedor->pais : ''}}" required>
    {!! $errors->first('pais', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('entidadFederativa') ? 'has-error' : ''}}">
    <label for="entidadFederativa" class="control-label">{{ 'Entidadfederativa' }}</label>
    <input class="form-control" name="entidadFederativa" type="text" id="entidadFederativa" value="{{ isset($proveedor->entidadFederativa) ? $proveedor->entidadFederativa : ''}}" required>
    {!! $errors->first('entidadFederativa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ciudad') ? 'has-error' : ''}}">
    <label for="ciudad" class="control-label">{{ 'Ciudad' }}</label>
    <input class="form-control" name="ciudad" type="text" id="ciudad" value="{{ isset($proveedor->ciudad) ? $proveedor->ciudad : ''}}" required>
    {!! $errors->first('ciudad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('codigoPostal') ? 'has-error' : ''}}">
    <label for="codigoPostal" class="control-label">{{ 'Codigopostal' }}</label>
    <input class="form-control" name="codigoPostal" type="text" id="codigoPostal" value="{{ isset($proveedor->codigoPostal) ? $proveedor->codigoPostal : ''}}" required>
    {!! $errors->first('codigoPostal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="telefono" type="text" id="telefono" value="{{ isset($proveedor->telefono) ? $proveedor->telefono : ''}}" required>
    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
