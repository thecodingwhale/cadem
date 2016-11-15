@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Create New Course</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/courses') }}"
                    class="btn btn-default btn-sm"
                >
                    Back
                </a>
            </p>
            {!! Form::open(['url' => '/admin/courses', 'class' => 'form-horizontal', 'files' => true]) !!}

            @include ('admin.courses.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection