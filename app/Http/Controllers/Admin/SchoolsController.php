<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminSchoolsCreateUpdateFormRequest;

use App\School;
use Illuminate\Http\Request;
use Session;

class SchoolsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $schools = School::paginate(25);

        return view('admin.schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(AdminSchoolsCreateUpdateFormRequest $request)
    {

        $requestData = $request->all();

        School::create($requestData);

        Session::flash('flash_message', 'School added!');

        return redirect('admin/schools');
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
        $school = School::findOrFail($id);

        return view('admin.schools.show', compact('school'));
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
        $school = School::findOrFail($id);

        return view('admin.schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, AdminSchoolsCreateUpdateFormRequest $request)
    {

        $requestData = $request->all();

        $school = School::findOrFail($id);
        $school->update($requestData);

        Session::flash('flash_message', 'School updated!');

        return redirect('admin/schools');
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
        School::destroy($id);

        Session::flash('flash_message', 'School deleted!');

        return redirect('admin/schools');
    }
}
