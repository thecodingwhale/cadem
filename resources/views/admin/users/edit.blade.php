@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Edit User {{ $user->id }}</div>
        <div class="panel-body">
            <a href="{{ url('admin/users') }}" class="btn btn-default btn-sm">
                Back
            </a>
            {!! Form::model($user, [
                'method' => 'PATCH',
                'url' => ['/admin/users', $user->id],
                'class' => 'form-horizontal',
                'files' => true
            ]) !!}

            @include ('admin.users.form', ['submitButtonText' => 'Update'])

            {!! Form::close() !!}

        </div>
    </div>
@endsection