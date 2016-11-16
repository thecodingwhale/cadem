@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Curriculum {{ $curriculum->id }}</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/curriculum') }}"
                    class="btn btn-default btn-sm"
                >
                    Back
                </a>
            </p>

            {!! Form::model($curriculum, [
                'method' => 'PATCH',
                'url' => ['/admin/curriculum', $curriculum->id],
                'class' => 'form-horizontal',
                'files' => true
            ]) !!}

            @include ('admin.curriculum.form', ['submitButtonText' => 'Update'])

            {!! Form::close() !!}

        </div>
    </div>
@endsection