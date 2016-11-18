<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Admin\AdminController;

use App\Curriculum;
use App\Course;
use Illuminate\Http\Request;
use Session;

class CurriculumController extends AdminController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $curriculum = Curriculum::paginate(25);

        return view('admin.curriculum.index', compact('curriculum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $courses = [];
        $getCourses = Course::where('registration_id', $this->registrationId)->get();
        foreach ($getCourses as $course) {
            $courses[$course->id] = $course->name;
        }
        return view('admin.curriculum.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        Curriculum::create(array_merge($requestData, [
            'user_id' => $this->userId,
            'registration_id' => $this->registrationId
        ]));

        Session::flash('flash_status_message', 'Curriculum added!');

        return redirect('admin/curriculum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $subjects = [];
        $curriculum = Curriculum::findOrFail($id);
        $getSubjects = $curriculum->subjects()->get();
        foreach ($getSubjects as $subject) {
            $subjects[] = [
                'name' => $subject->name
            ];
        }

        return view('admin.curriculum.show', compact('curriculum', 'subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $curriculum = Curriculum::findOrFail($id);
        $courses = [];
        $getCourses = Course::where('registration_id', $this->registrationId)->get();
        foreach ($getCourses as $course) {
            $courses[$course->id] = $course->name;
        }
        return view('admin.curriculum.edit', compact('curriculum', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {

        $requestData = $request->all();

        $curriculum = Curriculum::findOrFail($id);
        $curriculum->update($requestData);

        Session::flash('flash_status_message', 'Curriculum updated!');

        return redirect('admin/curriculum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Curriculum::destroy($id);

        Session::flash('flash_status_message', 'Curriculum deleted!');

        return redirect('admin/curriculum');
    }
}
