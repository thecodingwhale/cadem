@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Curriculum {{ $curriculum->id }}</div>
        <div class="panel-body">
            <a
                href="{{ url('admin/curriculum') }}"
                class="btn btn-default btn-sm"
            >
                Back
            </a>
            <a
                href="{{ url('admin/curriculum/' . $curriculum->id . '/edit') }}"
                class="btn btn-default btn-sm"
                title="Edit Curriculum"
            >
                Edit
            </a>

            {!! Form::open([
                'method'=>'DELETE',
                'url' => ['admin/curriculum', $curriculum->id],
                'style' => 'display:inline'
            ]) !!}
                {!! Form::button('Delete', array(
                        'type' => 'submit',
                        'class' => 'btn btn-default btn-sm',
                        'title' => 'Delete Curriculum',
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
                            <td>{{ $curriculum->id }}</td>
                        </tr>
                        <tr>
                            <th>Course</th>
                            <td>{{ $curriculum->course->name }}</td>
                        </tr>
                        <tr>
                            <th>Year Level</th>
                            <td>{{ $curriculum->year_level }}</td>
                        </tr>
                        <tr>
                            <th>Semester</th>
                            <td>{{ $curriculum->semester }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Subjects</div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <th>Name</th>
                        <th>Units</th>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr>
                                <td>{{ $subject['name'] }}</td>
                                <td>{{ $subject['units'] }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection