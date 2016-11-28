@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Enrollees</div>
        <div class="panel-body">
            <p class="lead">
                {{ $course['name'] }}<br>
                <small>{{ $course['semester'] }}</small>
            </p>
            @foreach($enrollees as $enrollee)
                <p>
                    {{ $enrollee['year'] }}
                </p>
            @endforeach
        </div>
    </div>
@endsection