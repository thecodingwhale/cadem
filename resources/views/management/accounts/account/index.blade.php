@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Account Details</div>
        <div class="panel-body">
            <p>
                <a href="{{ url('management/accounts') }}" class="btn btn-default">
                    Back
                </a>
            </p>
            <p>
                <strong>Name:</strong><br/>
                <div class="account-detail-name">
                    {{ $accountDetail['name'] }}
                </div>
            </p>
            <p>
                <strong>Email:</strong><br/>
                <div class="account-detail-email">
                    {{ $accountDetail['email'] }}
                </div>
            </p>
            <p>
                <strong>Role:</strong><br/>
                <div class="account-detail-role">
                    {{ $accountDetail['role'] }}
                </div>
            </p>
            <p>
                <strong>School:</strong><br/>
                <div class="account-detail-school">
                    {{ $accountDetail['school'] }}
                </div>
            </p>
        </div>
    </div>
@endsection
