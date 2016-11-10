@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Profile</div>
        <div class="panel-body">
            <dl class="form-group">
                <dt>
                    <label for="user_profile_name">Name</label>
                </dt>
                <dd>
                    {{ $user['name'] }}
                </dd>
            </dl>
            <dl class="form-group">
                <dt>
                    <label for="user_profile_role">Role</label>
                </dt>
                <dd>
                    {{ $user['role'] }}
                </dd>
            </dl>
            <dl class="form-group">
                <dt>
                    <label for="user_profile_role">Main Account</label>
                </dt>
                <dd>
                    {{ $user['mainAccount'] }}
                </dd>
            </dl>
        </div>
    </div>
@endsection
