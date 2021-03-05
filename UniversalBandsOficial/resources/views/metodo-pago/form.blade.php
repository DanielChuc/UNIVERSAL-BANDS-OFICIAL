<div class="form-group {{ $errors->has('ejemplo') ? 'has-error' : ''}}">
    <label for="ejemplo" class="control-label">{{ 'Ejemplo' }}</label>
    <input class="form-control" name="ejemplo" type="text" id="ejemplo" value="{{ isset($metodopago->ejemplo) ? $metodopago->ejemplo : ''}}" >
    {!! $errors->first('ejemplo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
