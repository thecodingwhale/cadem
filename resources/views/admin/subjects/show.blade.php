@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">{{ $subject->name }}</div>
        <div class="panel-body">
            <a
                href="{{ url('admin/subjects') }}"
                class="btn btn-default btn-sm"
            >
                Back
            </a>
            <a
                href="{{ url('admin/subjects/' . $subject->id . '/edit') }}"
                class="btn btn-default btn-sm"
                title="Edit Subject"
            >
                Edit
            </a>

            {!! Form::open([
                'method'=>'DELETE',
                'url' => ['admin/subjects', $subject->id],
                'style' => 'display:inline'
            ]) !!}
                {!! Form::button('Delete', array(
                        'type' => 'submit',
                        'class' => 'btn btn-default btn-sm',
                        'title' => 'Delete Subject',
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
                            <td>{{ $subject->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $subject->name }}</td>
                        </tr>
                        <tr>
                            <th>Code</th>
                            <td>{{ $subject->code }}</td>
                        </tr>
                        <tr>
                            <th>Units</th>
                            <td>{{ $subject->units }}</td>
                        </tr>
                        <tr>
                            <th>Courses</th>
                            <td>
                                @foreach ($courses as $course)
                                    <p>
                                        <strong>{{ $course['name'] }}</strong><<br />
                                        <small>{{ $course['year'] }} year {{ $course['semester'] }} semester</small>
                                    </p>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection