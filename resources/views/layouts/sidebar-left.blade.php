@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Settings</div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="{{ url('settings/profile') }}" class="list-group-item">
                                Profile
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Management</div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="{{ url('management/users') }}" class="list-group-item">
                                Users
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @yield('main')
            </div>
        </div>
    </div>
@endsection