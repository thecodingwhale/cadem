@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Create New Enrollment</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/enrollment') }}"
                    class="btn btn-default btn-sm"
                >
                    Back
                </a>
            </p>
            {!! Form::open(['url' => '/admin/enrollment', 'class' => 'form-horizontal', 'files' => true]) !!}

            @include ('admin.enrollment.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection