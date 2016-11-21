<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Admin\AdminController;

use App\Enrollment;
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
            'registration_id' => $this->registrationId,
            'open' => isset($requestData['open'])
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

        return view('admin.enrollment.show', compact('enrollment'));
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
}
