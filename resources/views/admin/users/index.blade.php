@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Users</div>
        <div class="panel-body">
            <p>
                <a
                    href="{{ url('/admin/users/create') }}"
                    class="btn btn-primary btn-sm"
                    title="Add New User">
                        Add user
                </a>
            </p>
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Main Account</th>
                            <th>Active</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->isMainAccount() }}</td>
                            <td>{{ $item->isActive() }}</td>
                            <td>{{ $item->getRoleName() }}</td>
                            <td>
                                <a href="{{ url('/admin/users/' . $item->id) }}" class="btn btn-success btn-xs" title="View User">View</a>
                                <a href="{{ url('/admin/users/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit User">Edit</a>
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['/admin/users', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                    {!! Form::button('Delete', array(
                                            'type' => 'submit',
                                            'class' => 'btn btn-danger btn-xs',
                                            'title' => 'Delete User',
                                            'onclick'=>'return confirm("Confirm delete?")'
                                    )) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper"> {!! $users->render() !!} </div>
            </div>

        </div>
    </div>
@endsection