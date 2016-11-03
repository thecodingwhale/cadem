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
                    <input class="form-control" id="user_profile_name" class="user_profile_name" size="30" type="text" value="{{ $user['name'] }}">
                </dd>
            </dl>
            <dl class="form-group">
                <dt>
                    <label for="user_profile_role">Role</label>
                </dt>
                <dd>
                    <input class="form-control" id="user_profile_role" class="user_profile_role" size="30" type="text" value="{{ $user['role'] }}" disabled>
                </dd>
            </dl>
            <p>
                <button type="submit" class="btn btn-primary">
                    Update profile
                </button>
            </p>
        </div>
    </div>
@endsection
