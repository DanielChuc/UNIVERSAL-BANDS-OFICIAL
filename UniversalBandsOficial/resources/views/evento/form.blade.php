<div class="form-group {{ $errors->has('nombreEvento') ? 'has-error' : ''}}">
    <label for="nombreEvento" class="control-label">{{ 'NombreEvento' }}</label>
    <input class="form-control" name="nombreEvento" type="text" id="nombreEvento" value="{{ isset($evento->nombreEvento) ? $evento->nombreEvento : ''}}" required>
    {!! $errors->first('nombreEvento', '<p class="help-block">:message</p>') !!}
</div>

                                    {{-- imagen --}}
<div class="form-group {{ $errors->has('archivo') ? 'has-error' : ''}}">
    <label for="archivo" class="control-label">{{ 'Archivo' }}</label>
    <input type="text" value="{{ isset($evento->imagenEvento) ? $evento->imagenEvento : ''}}">
    <input class="form-control" name="archivo" type="file" id="archivo">
    {!! $errors->first('archivo', '<p class="help-block">:message</p>') !!}
</div>
                                    {{-- imagen --}}


<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="direccion" type="text" id="direccion" value="{{ isset($evento->direccion) ? $evento->direccion : ''}}" required>
    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <textarea class="form-control" rows="5" name="descripcion" type="textarea" id="descripcion" >{{ isset($evento->descripcion) ? $evento->descripcion : ''}}</textarea>
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pais') ? 'has-error' : ''}}">
    <label for="pais" class="control-label">{{ 'Pais' }}</label>
    <input class="form-control" name="pais" type="text" id="pais" value="{{ isset($evento->pais) ? $evento->pais : ''}}" required>
    {!! $errors->first('pais', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ciudad') ? 'has-error' : ''}}">
    <label for="ciudad" class="control-label">{{ 'Ciudad' }}</label>
    <input class="form-control" name="ciudad" type="text" id="ciudad" value="{{ isset($evento->ciudad) ? $evento->ciudad : ''}}" required>
    {!! $errors->first('ciudad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechas') ? 'has-error' : ''}}">
    <label for="fechas" class="control-label">{{ 'Fechas' }}</label>
    <input class="form-control" name="fechas" type="datetime-local" id="fechas" value="{{ isset($evento->fechas) ? $evento->fechas : ''}}" >
    {!! $errors->first('fechas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacidadLugares') ? 'has-error' : ''}}">
    <label for="capacidadLugares" class="control-label">{{ 'Capacidadlugares' }}</label>
    <input class="form-control" name="capacidadLugares" type="number" id="capacidadLugares" value="{{ isset($evento->capacidadLugares) ? $evento->capacidadLugares : ''}}" >
    {!! $errors->first('capacidadLugares', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lugaresDisponibles') ? 'has-error' : ''}}">
    <label for="lugaresDisponibles" class="control-label">{{ 'Lugaresdisponibles' }}</label>
    <input class="form-control" name="lugaresDisponibles" type="number" id="lugaresDisponibles" value="{{ isset($evento->lugaresDisponibles) ? $evento->lugaresDisponibles : ''}}" >
    {!! $errors->first('lugaresDisponibles', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($evento->precio) ? $evento->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoria_id') ? 'has-error' : ''}}">
    <label for="categoria_id" class="control-label">{{ 'Categoria Id' }}</label>
    <input class="form-control" name="categoria_id" type="number" id="categoria_id" value="{{ isset($evento->categoria_id) ? $evento->categoria_id : ''}}" >
    {!! $errors->first('categoria_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
