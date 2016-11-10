@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Create New User</div>
        <div class="panel-body">

            {!! Form::open(['url' => '/admin/users', 'class' => 'form-horizontal', 'files' => true]) !!}

            @include ('admin.users.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection