@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Settings</div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                Profile
                            </a>
                            <a href="#" class="list-group-item">
                                Menu #2
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
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
            </div>
        </div>
    </div>
@endsection
