@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Enrollment</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/enrollment/create') }}"
                    class="btn btn-default btn-sm"
                    title="Add New Enrollment"
                >
                    Add Enrollment
                </a>
            </p>
            @if(count($enrollment) != 0)
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>ID</th><th> Code </th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($enrollment as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->code }}</td>
                                <td>
                                    <a
                                        href="{{ url('/admin/enrollment/' . $item->id) }}"
                                        class="btn btn-default btn-xs"
                                        title="View Enrollment"
                                    >
                                        View
                                    </a>
                                    <a
                                        href="{{ url('/admin/enrollment/' . $item->id . '/edit') }}"
                                        class="btn btn-default btn-xs"
                                        title="Edit Enrollment"
                                    >
                                        Edit
                                    </a>
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['/admin/enrollment', $item->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::button('Delete', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-default btn-xs',
                                                'title' => 'Delete Enrollment',
                                                'onclick'=>'return confirm("Confirm delete?")'
                                        )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $enrollment->render() !!} </div>
                </div>
            @else
                <div class="alert alert-info">
                    No Enrollment added.
                </div>
            @endif
        </div>
    </div>
@endsection