@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Schools</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/schools/create') }}"
                    class="btn btn-primary btn-sm"
                    title="Add New School"
                >
                    Add school
                </a>
            </p>
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($schools as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ url('/admin/schools/' . $item->id) }}" class="btn btn-success btn-xs" title="View School">
                                    View
                                </a>
                                <a href="{{ url('/admin/schools/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit School">
                                    Edit
                                </a>
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['/admin/schools', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                    {!! Form::button('Delete', array(
                                            'type' => 'submit',
                                            'class' => 'btn btn-danger btn-xs',
                                            'title' => 'Delete School',
                                            'onclick'=>'return confirm("Confirm delete?")'
                                    )) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper"> {!! $schools->render() !!} </div>
            </div>

        </div>
    </div>
@endsection