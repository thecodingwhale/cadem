@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Accounts</div>
        <div class="panel-body">
            <p>
                <a href="{{ url('/management/accounts/create') }}" class="btn btn-primary">
                    Add user
                </a>
            </p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['role'] }}</td>
                            <td>
                                <a href="{{ $user['details_path'] }}" class="btn btn-xs btn-default">
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
