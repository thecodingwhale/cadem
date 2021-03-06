<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\AdminSchoolsCreateUpdateFormRequest;

use App\School;
use Illuminate\Http\Request;
use Session;
use AUth;

class SchoolsController extends AdminController
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
        $schools = School::where('registration_id', $this->registrationId)->paginate(25);

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

        School::create(array_merge($requestData, [
            'user_id' => $this->userId,
            'registration_id' => $this->registrationId
        ]));

        Session::flash('flash_status_message', 'School added!');

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

        Session::flash('flash_status_message', 'School updated!');

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

        Session::flash('flash_status_message', 'School deleted!');

        return redirect('admin/schools');
    }
}
