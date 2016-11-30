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
                class="btn btn-default btn-sm"
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
                            <td>ID</td>
                            <td>{{ $enrollment->id }}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>{{ $enrollment->semester }}</td>
                        </tr>
                        <tr>
                            <td>School Year From</td>
                            <td>{{ $enrollment->school_year_from->format('Y') }}</td>
                        </tr>
                        <tr>
                            <td>School Year To</td>
                            <td>{{ $enrollment->school_year_to->format('Y') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Courses</div>
        <div class="panel-body">
            <table class="table table-borderless">
                <thead>
                    <th>Course</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>
                                {{ $course['name'] }}<br />
                                <small>{{ $course['year_level'] }}</small>
                            </td>
                            <td>
                                <a href="{{ $course['url_path'] }}" class="btn btn-default btn-xs" title="View Enrollees">
                                    View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection