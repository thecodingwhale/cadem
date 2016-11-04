@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Add account</div>
        <div class="panel-body">
            <p>
                <a href="{{ url('management/accounts') }}" class="btn btn-default">
                    Back
                </a>
            </p>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/management/accounts/store') }}" novalidate>
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
                    <label for="school" class="col-md-4 control-label">School</label>
                    <div class="col-md-6">
                        @foreach ($schools as $school)
                            <div class="radio">
                              <label>
                                <input name="school" type="radio" value="{{ $school['value'] }}">
                                {{ $school['name'] }}
                              </label>
                            </div>
                        @endforeach
                        @if ($errors->has('school'))
                            <span class="help-block">
                                <strong>{{ $errors->first('school') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                    <label for="role" class="col-md-4 control-label">Role</label>
                    <div class="col-md-6">
                        @foreach ($roles as $role)
                            <div class="radio">
                              <label>
                                <input name="role" type="radio" value="{{ $role['value'] }}">
                                {{ $role['name'] }}
                              </label>
                            </div>
                        @endforeach
                        @if ($errors->has('role'))
                            <span class="help-block">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
