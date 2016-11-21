@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Enrollment {{ $enrollment->id }}</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/enrollment') }}"
                    class="btn btn-default btn-sm"
                >
                    Back
                </a>
            </p>

            {!! Form::model($enrollment, [
                'method' => 'PATCH',
                'url' => ['/admin/enrollment', $enrollment->id],
                'class' => 'form-horizontal',
                'files' => true
            ]) !!}

            @include ('admin.enrollment.form', ['submitButtonText' => 'Update'])

            {!! Form::close() !!}

        </div>
    </div>
@endsection