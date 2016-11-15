@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Course {{ $course->id }}</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/courses') }}"
                    class="btn btn-default btn-sm"
                >
                    Back
                </a>
            </p>

            {!! Form::model($course, [
                'method' => 'PATCH',
                'url' => ['/admin/courses', $course->id],
                'class' => 'form-horizontal',
                'files' => true
            ]) !!}

            @include ('admin.courses.form', ['submitButtonText' => 'Update'])

            {!! Form::close() !!}

        </div>
    </div>
@endsection