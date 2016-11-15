@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Course {{ $course->id }}</div>
        <div class="panel-body">
            <a
                href="{{ url('admin/courses') }}"
                class="btn btn-default btn-sm"
            >
                Back
            </a>
            <a
                href="{{ url('admin/courses/' . $course->id . '/edit') }}"
                class="btn btn-primary btn-sm"
                title="Edit Course"
            >
                Edit
            </a>

            {!! Form::open([
                'method'=>'DELETE',
                'url' => ['admin/courses', $course->id],
                'style' => 'display:inline'
            ]) !!}
                {!! Form::button('Delete', array(
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-sm',
                        'title' => 'Delete Course',
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
                            <td>{{ $course->id }}</td>
                        </tr>
                        <tr><th> Name </th><td> {{ $course->name }} </td></tr><tr><th> Code </th><td> {{ $course->code }} </td></tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection