@extends('layouts.sidebar-left')

@section('main')
    <div class="panel panel-default">
        <div class="panel-heading">Subjects</div>
        <div class="panel-body">
            <p>
                <a href="{{ url('management/subjects/create') }}" class="btn btn-primary">
                    Add subject
                </a>
            </p>
            @if (count($subjects) == 0)
                <div class="alert alert-info">
                    No subject added.
                </div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Assigned To</th>
                            <th>Added By</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subjects as $subject)
                            <tr>
                                <td>
                                    {{ $subject['name'] }}
                                </td>
                                <td>
                                    {{ $subject['assigned_to'] }}
                                </td>
                                <td>
                                    {{ $subject['added_by'] }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
