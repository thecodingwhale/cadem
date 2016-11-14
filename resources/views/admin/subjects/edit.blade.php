@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Subject {{ $subject->id }}</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/subjects') }}"
                    class="btn btn-default btn-sm"
                >
                    Back
                </a>
            </p>

            {!! Form::model($subject, [
                'method' => 'PATCH',
                'url' => ['/admin/subjects', $subject->id],
                'class' => 'form-horizontal',
                'files' => true
            ]) !!}

            @include ('admin.subjects.form', ['submitButtonText' => 'Update'])

            {!! Form::close() !!}

        </div>
    </div>
@endsection