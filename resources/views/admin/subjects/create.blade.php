@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Create New Subject</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/subjects') }}"
                    class="btn btn-default btn-sm"
                >
                    Back
                </a>
            </p>
            {!! Form::open(['url' => '/admin/subjects', 'class' => 'form-horizontal', 'files' => true]) !!}

            @include ('admin.subjects.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection