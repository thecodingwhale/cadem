<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    {!! Form::label('code', 'Code', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('code', null, ['class' => 'form-control']) !!}
        {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('units') ? 'has-error' : ''}}">
    {!! Form::label('units', 'Units', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('units', null, ['class' => 'form-control']) !!}
        {!! $errors->first('units', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('curriculum') ? 'has-error' : ''}}">
    {!! Form::label('curriculum', 'Curriculum', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('curriculum', $curricula, null, ['class' => 'form-control']) !!}
        {!! $errors->first('curriculum', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-default']) !!}
    </div>
</div>