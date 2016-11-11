@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">User {{ $user->id }}</div>
        <div class="panel-body">

            <a href="{{ url('admin/users') }}" class="btn btn-default btn-sm">
                Back
            </a>
            <a href="{{ url('admin/users/' . $user->id . '/edit') }}" class="btn btn-primary btn-sm" title="Edit User">
                Edit
            </a>
            {!! Form::open([
                'method'=>'DELETE',
                'url' => ['admin/users', $user->id],
                'style' => 'display:inline'
            ]) !!}
                {!! Form::button('Delete', array(
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-sm',
                        'title' => 'Delete User',
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
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Main Account</th>
                            <td>{{ $user->isMainAccount() }}</td>
                        </tr>
                        <tr>
                            <th>Active</th>
                            <td>{{ $user->isActive() }}</td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <td>{{ $user->getRoleName() }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection