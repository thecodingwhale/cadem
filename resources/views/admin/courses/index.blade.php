@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Courses</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/courses/create') }}"
                    class="btn btn-primary btn-sm"
                    title="Add New Course"
                >
                    Add Course
                </a>
            </p>
            @if(count($courses) != 0)
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>ID</th><th> Name </th><th> Code </th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td><td>{{ $item->code }}</td>
                                <td>
                                    <a
                                        href="{{ url('/admin/courses/' . $item->id) }}"
                                        class="btn btn-success btn-xs"
                                        title="View Course"
                                    >
                                        View
                                    </a>
                                    <a
                                        href="{{ url('/admin/courses/' . $item->id . '/edit') }}"
                                        class="btn btn-primary btn-xs"
                                        title="Edit Course"
                                    >
                                        Edit
                                    </a>
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['/admin/courses', $item->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::button('Delete', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-xs',
                                                'title' => 'Delete Course',
                                                'onclick'=>'return confirm("Confirm delete?")'
                                        )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $courses->render() !!} </div>
                </div>
            @else
                <div class="alert alert-info">
                    No Course added.
                </div>
            @endif
        </div>
    </div>
@endsection