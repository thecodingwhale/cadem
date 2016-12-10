<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Admin\AdminController;

use App\Enrollment;
use App\Curriculum;
use App\Course;
use App\Student;
use Illuminate\Http\Request;
use Session;

class EnrollmentController extends AdminController
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
        $enrollment = Enrollment::where('registration_id', $this->registrationId)->paginate(25);
        return view('admin.enrollment.index', compact('enrollment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.enrollment.create');
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

        $enrollment = Enrollment::create(array_merge($requestData, [
            'user_id' => $this->userId,
            'registration_id' => $this->registrationId
        ]));

        Session::flash('flash_status_message', 'Enrollment added!');

        return redirect('admin/enrollment');
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
        $enrollment = Enrollment::findOrFail($id);

        $courses = [];
        foreach ($enrollment->enrollmentCourses()->get() as $enrollmentCourse) {
            $sections = [];
            $getSections = $enrollmentCourse->sections()->get();
            foreach ($getSections as $section) {
                $getStudents = Student::where([
                    ['year_level', $enrollmentCourse->year_level],
                    ['section_id', $section->id],
                    ['course_id', $enrollmentCourse->course_id],
                    ['enrollment_id', $enrollmentCourse->enrollment_id]
                ])->get();
                $students = [];
                foreach ($getStudents as $student) {
                    $students[] = [
                        'name' => $student->user->name
                    ];
                }
                $sections[] = [
                    'name' => $section->section,
                    'students' => $students
                ];
            }
            $courses[] = [
                'name' => $enrollmentCourse->course()->first()->name,
                'year_level' => $enrollmentCourse->year_level,
                'sections' => $sections
            ];
        }
        return view('admin.enrollment.show', compact('enrollment', 'courses'));
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
        $enrollment = Enrollment::findOrFail($id);

        return view('admin.enrollment.edit', compact('enrollment'));
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

        $enrollment = Enrollment::findOrFail($id);
        $enrollment->update($requestData);

        Session::flash('flash_status_message', 'Enrollment updated!');

        return redirect('admin/enrollment');
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
        Enrollment::destroy($id);

        Session::flash('flash_status_message', 'Enrollment deleted!');

        return redirect('admin/enrollment');
    }

    public function courses($enrollmentId, $courseId)
    {
        $enrollment = Enrollment::findOrFail($enrollmentId);
        $course = Course::findOrFail($courseId);
        $curricula = Curriculum::where([
            ['course_id', $courseId],
            ['semester', $enrollment->semester]
        ])->get();


        $enrollees = [];
        $course = [
            'name' => $course->name,
            'semester' => $enrollment->semester . ' semester'
        ];
        foreach ($curricula as $curriculum) {
            $enrollees[] = [
                'year' => $curriculum->year_level
            ];
        }

        return view('admin.enrollment.courses', compact('enrollees', 'course'));
    }
}
