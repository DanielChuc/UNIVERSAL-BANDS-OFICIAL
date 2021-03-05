<div class="form-group {{ $errors->has('numeroTarjeta') ? 'has-error' : ''}}">
    <label for="numeroTarjeta" class="control-label">{{ 'Numerotarjeta' }}</label>
    <input class="form-control" name="numeroTarjeta" type="text" id="numeroTarjeta" value="{{ isset($tarjetum->numeroTarjeta) ? $tarjetum->numeroTarjeta : ''}}" required>
    {!! $errors->first('numeroTarjeta', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($tarjetum->nombre) ? $tarjetum->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('expira') ? 'has-error' : ''}}">
    <label for="expira" class="control-label">{{ 'Expira' }}</label>
    <input class="form-control" name="expira" type="date" id="expira" value="{{ isset($tarjetum->expira) ? $tarjetum->expira : ''}}" required>
    {!! $errors->first('expira', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cvv') ? 'has-error' : ''}}">
    <label for="cvv" class="control-label">{{ 'Cvv' }}</label>
    <input class="form-control" name="cvv" type="number" id="cvv" value="{{ isset($tarjetum->cvv) ? $tarjetum->cvv : ''}}" required>
    {!! $errors->first('cvv', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('monto') ? 'has-error' : ''}}">
    <label for="monto" class="control-label">{{ 'Monto' }}</label>
    <input class="form-control" name="monto" type="number" id="monto" value="{{ isset($tarjetum->monto) ? $tarjetum->monto : ''}}" >
    {!! $errors->first('monto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('metodoPago_id') ? 'has-error' : ''}}">
    <label for="metodoPago_id" class="control-label">{{ 'Metodopago Id' }}</label>
    <input class="form-control" name="metodoPago_id" type="number" id="metodoPago_id" value="{{ isset($tarjetum->metodoPago_id) ? $tarjetum->metodoPago_id : ''}}" >
    {!! $errors->first('metodoPago_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
