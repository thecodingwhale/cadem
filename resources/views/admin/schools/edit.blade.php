@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Edit School {{ $school->id }}</div>
        <div class="panel-body">

            {!! Form::model($school, [
                'method' => 'PATCH',
                'url' => ['/admin/schools', $school->id],
                'class' => 'form-horizontal',
                'files' => true
            ]) !!}

            @include ('admin.schools.form', ['submitButtonText' => 'Update'])

            {!! Form::close() !!}

        </div>
    </div>
@endsection