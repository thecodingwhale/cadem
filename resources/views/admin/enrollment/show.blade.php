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
                                <p>
                                    {{ $course['name'] }}<br />
                                    <small>{{ $course['year_level'] }}</small>
                                </p>
                                <div>
                                    Sections
                                    @foreach($course['sections'] as $section)
                                        <div class="row">
                                            <div class="col-sm-6">
                                                {{ $section['name'] }}
                                            </div>
                                            <div class="col-sm-6">
                                                Students
                                                <ul>
                                                    @foreach($section['students'] as $student)
                                                        <li>
                                                            {{ $student['name'] }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection