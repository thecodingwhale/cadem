<div class="form-group {{ $errors->has('semester') ? 'has-error' : ''}}">
    {!! Form::label('semester', 'Semester', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('semester', null, ['class' => 'form-control']) !!}
        {!! $errors->first('semester', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('open') ? 'has-error' : ''}}">
    {!! Form::label('open', 'Open', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
            <label>
                {!! Form::checkbox('open', false) !!}
            </label>
        </div>
        {!! $errors->first('open', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('school_year_from') ? 'has-error' : ''}}">
    {!! Form::label('school_year_from', 'School Year From', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('school_year_from', '2016', ['class' => 'form-control']) !!}
        {!! $errors->first('school_year_from', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('school_year_to') ? 'has-error' : ''}}">
    {!! Form::label('school_year_to', 'School Year To', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('school_year_to', '2017', ['class' => 'form-control']) !!}
        {!! $errors->first('school_year_to', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-default']) !!}
    </div>
</div>