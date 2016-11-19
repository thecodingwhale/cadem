<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Admin\AdminController;

use App\Subject;
use App\Curriculum;
use Illuminate\Http\Request;
use Session;

class SubjectsController extends AdminController
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
        $subjects = Subject::where('registration_id', $this->registrationId)->paginate(25);

        return view('admin.subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $curricula = [];
        $getCurricula = Curriculum::where('registration_id', $this->registrationId)->get();
        foreach ($getCurricula as $curriculum) {
            $courseName = $curriculum->course->name;
            $curriculumName = $curriculum->year_level. " year " .$curriculum->semester. " semester " ." ". $courseName;
            $curricula[$curriculum->id] = $curriculumName;
        }

        return view('admin.subjects.create', compact('curricula'));
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

        $subject = Subject::create(array_merge($requestData, [
            'user_id' => $this->userId,
            'registration_id' => $this->registrationId
        ]));

        $subject->curricula()->attach([$requestData['curriculum']]);

        Session::flash('flash_status_message', 'Subject added!');

        return redirect('admin/subjects');
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
        $subject = Subject::findOrFail($id);

        $courses = [];
        $getCurricula = $subject->curricula()->get();
        foreach ($getCurricula as $curriculum) {
            $courses[] = [
                'name' => $curriculum->course->name,
                'year' => $curriculum->year_level,
                'semester' => $curriculum->semester
            ];
        }

        return view('admin.subjects.show', compact('subject', 'courses'));
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
        $subject = Subject::findOrFail($id);

        return view('admin.subjects.edit', compact('subject'));
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

        $subject = Subject::findOrFail($id);
        $subject->update($requestData);

        Session::flash('flash_status_message', 'Subject updated!');

        return redirect('admin/subjects');
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
        Subject::destroy($id);

        Session::flash('flash_status_message', 'Subject deleted!');

        return redirect('admin/subjects');
    }
}
