@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Curriculum</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/curriculum/create') }}"
                    class="btn btn-primary btn-sm"
                    title="Add New Curriculum"
                >
                    Add Curriculum
                </a>
            </p>
            @if(count($curriculum) != 0)
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Course</th>
                                <th>Year Level</th>
                                <th>Semester</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($curriculum as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->course_id }}</td>
                                <td>{{ $item->year_level }}</td>
                                <td>{{ $item->semester }}</td>
                                <td>
                                    <a
                                        href="{{ url('/admin/curriculum/' . $item->id) }}"
                                        class="btn btn-success btn-xs"
                                        title="View Curriculum"
                                    >
                                        View
                                    </a>
                                    <a
                                        href="{{ url('/admin/curriculum/' . $item->id . '/edit') }}"
                                        class="btn btn-primary btn-xs"
                                        title="Edit Curriculum"
                                    >
                                        Edit
                                    </a>
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['/admin/curriculum', $item->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::button('Delete', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-xs',
                                                'title' => 'Delete Curriculum',
                                                'onclick'=>'return confirm("Confirm delete?")'
                                        )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $curriculum->render() !!} </div>
                </div>
            @else
                <div class="alert alert-info">
                    No Curriculum added.
                </div>
            @endif
        </div>
    </div>
@endsection