@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Enrollment {{ $enrollment->id }}</div>
        <div class="panel-body">
            <a
                href="{{ url('admin/enrollment') }}"
                class="btn btn-default btn-sm"
            >
                Back
            </a>
            <a
                href="{{ url('admin/enrollment/' . $enrollment->id . '/edit') }}"
                class="btn btn-primary btn-sm"
                title="Edit Enrollment"
            >
                Edit
            </a>

            {!! Form::open([
                'method'=>'DELETE',
                'url' => ['admin/enrollment', $enrollment->id],
                'style' => 'display:inline'
            ]) !!}
                {!! Form::button('Delete', array(
                        'type' => 'submit',
                        'class' => 'btn btn-default btn-sm',
                        'title' => 'Delete Enrollment',
                        'onclick'=>'return confirm("Confirm delete?")'
                ))!!}
            {!! Form::close() !!}
            <br/>
            <br/>

            <div class="table-responsive">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $enrollment->id }}</td>
                        </tr>
                        <tr><th> Code </th><td> {{ $enrollment->code }} </td></tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection