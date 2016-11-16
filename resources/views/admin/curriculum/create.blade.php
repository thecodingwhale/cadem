@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Create New Curriculum</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/curriculum') }}"
                    class="btn btn-default btn-sm"
                >
                    Back
                </a>
            </p>
            {!! Form::open(['url' => '/admin/curriculum', 'class' => 'form-horizontal', 'files' => true]) !!}

            @include ('admin.curriculum.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection