@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Create New School</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('admin/schools') }}"
                    class="btn btn-default btn-sm"
                >
                    Back
                </a>
            </p>
            {!! Form::open(['url' => '/admin/schools', 'class' => 'form-horizontal', 'files' => true]) !!}

            @include ('admin.schools.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection