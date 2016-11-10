@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">School {{ $school->id }}</div>
        <div class="panel-body">

            <a href="{{ url('admin/schools/' . $school->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit School"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
            {!! Form::open([
                'method'=>'DELETE',
                'url' => ['admin/schools', $school->id],
                'style' => 'display:inline'
            ]) !!}
                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'title' => 'Delete School',
                        'onclick'=>'return confirm("Confirm delete?")'
                ))!!}
            {!! Form::close() !!}
            <br/>
            <br/>

            <div class="table-responsive">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>ID</th><td>{{ $school->id }}</td>
                        </tr>
                        <tr><th> Name </th><td> {{ $school->name }} </td></tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection