<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\School;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $school = School::where('user_id', $userId)->first();

        return view('home', [
            'schoolName' => $school->name
        ]);
    }
}
