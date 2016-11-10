<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSubjectRequest;
use App\Subject;
use App\User;
use App\Role;
use Auth;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = [];
        $getSubjects = Subject::where('user_id', Auth::user()->id)->get();
        foreach ($getSubjects as $subject) {
            $subjects[] = [
                'name' => $subject->name,
                'assigned_to' => $subject->users->first()->name,
                'added_by' => $subject->user->name
            ];
        }
        return view('management.subjects.index', compact('subjects'));
    }

    public function create()
    {
        $teachers = [];
        $getTeachers = User::whereHas('roles', function($query) {
           $query->where('name', Role::TEACHER);
        })->get();

        foreach ($getTeachers as $teacher) {
            $teachers[] = [
                'name' => $teacher->name,
                'value' => $teacher->id,
            ];
        }

        return view('management.subjects.create', [
            'teachers' => $teachers
        ]);
    }

    public function store(CreateSubjectRequest $request)
    {
        $subject = Subject::create(array_merge(
            $request->all(), [
                'name' => $request->get('subject_name'),
                'user_id' => Auth::user()->id
            ]
        ));
        $teacherId = $request->get('teacher');
        $subject->users()->attach($teacherId);
        return back()->with('status', 'Subject successfully added.');

    }
}
