@extends('layouts.sidebar-left')

@section('main')
    <p>
        <a href="{{ url('management/subjects') }}" class="btn btn-default">
            Back
        </a>
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">Add Subject</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/management/subjects/store') }}" novalidate>
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('subject_name') ? ' has-error' : '' }}">
                    <label for="subject_name" class="col-md-4 control-label">Subject Name</label>

                    <div class="col-md-6">
                        <input id="subject_name" type="text" class="form-control" name="subject_name" value="{{ old('subject_name') }}" required autofocus>

                        @if ($errors->has('subject_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('subject_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('teacher') ? ' has-error' : '' }}">
                    <label for="teacher" class="col-md-4 control-label">Teachers</label>
                    <div class="col-md-6">
                        @foreach ($teachers as $teacher)
                            <div class="radio">
                              <label>
                                <input name="teacher" type="radio" value="{{ $teacher['value'] }}">
                                {{ $teacher['name'] }}
                              </label>
                            </div>
                        @endforeach
                        @if ($errors->has('teacher'))
                            <span class="help-block">
                                <strong>{{ $errors->first('teacher') }}</strong>
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
