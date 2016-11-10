@extends('layouts.sidebar-left')

@section('main')
    <p>
        <a href="{{ url('management/accounts') }}" class="btn btn-default">
            Back
        </a>
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">Account Details</div>
        <div class="panel-body">
            <p>
                <strong>Name:</strong><br/>
                <span class="account-detail-name">
                    {{ $accountDetail['name'] }}
                </span>
            </p>
            <p>
                <strong>Email:</strong><br/>
                <span class="account-detail-email">
                    {{ $accountDetail['email'] }}
                </span>
            </p>
            <p>
                <strong>Role:</strong><br/>
                <span class="account-detail-role">
                    {{ $accountDetail['role'] }}
                </span>
            </p>
            <p>
                <strong>School:</strong><br/>
                <span class="account-detail-school">
                    {{ $accountDetail['school'] }}
                </span>
            </p>
        </div>
    </div>
    @if ($accountDetail['role'] == \App\Role::STUDENT)
    <div class="panel panel-default">
        <div class="panel-heading">Subjects</div>
        <div class="panel-body">
            @if(count($subjects) == 0)
                <div class="alert alert-info">
                    No available subjects
                </div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Teacher</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($subjects as $subject)
                                <tr>
                                    <td>{{ $subject['name'] }}</td>
                                    <td>{{ $subject['teacher'] }}</td>
                                    <td>
                                        <a href="{{ $subject['grades_path'] }}" class="btn btn-xs btn-default">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            @endif
        <div>
    </div>
    @endif
@endsection
