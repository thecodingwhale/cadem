<div class="form-group {{ $errors->has('course_id') ? 'has-error' : ''}}">
    {!! Form::label('course_id', 'Course', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('course_id', $courses, null, ['class' => 'form-control']) !!}
        {!! $errors->first('course_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('year_level') ? 'has-error' : ''}}">
    {!! Form::label('year_level', 'Year Level', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('year_level', null, ['class' => 'form-control']) !!}
        {!! $errors->first('year_level', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('semester') ? 'has-error' : ''}}">
    {!! Form::label('semester', 'Semester', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('semester', null, ['class' => 'form-control']) !!}
        {!! $errors->first('semester', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>