@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Subjects</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/subjects/create') }}"
                    class="btn btn-default btn-sm"
                    title="Add New Subject"
                >
                    Add subject
                </a>
            </p>
            @if(count($subjects) != 0)
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>ID</th><th> Name </th><th> Code </th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($subjects as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td><td>{{ $item->code }}</td>
                                <td>
                                    <a
                                        href="{{ url('/admin/subjects/' . $item->id) }}"
                                        class="btn btn-default btn-xs"
                                        title="View Subject"
                                    >
                                        View
                                    </a>
                                    <a
                                        href="{{ url('/admin/subjects/' . $item->id . '/edit') }}"
                                        class="btn btn-default btn-xs"
                                        title="Edit Subject"
                                    >
                                        Edit
                                    </a>
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['/admin/subjects', $item->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::button('Delete', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-default btn-xs',
                                                'title' => 'Delete Subject',
                                                'onclick'=>'return confirm("Confirm delete?")'
                                        )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $subjects->render() !!} </div>
                </div>
            @else
                <div class="alert alert-info">
                    No subjects added.
                </div>
            @endIf
        </div>
    </div>
@endsection