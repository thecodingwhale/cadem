<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\School;
use Auth;

class SchoolController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->school->user_id;
        $schools = School::where('user_id', $userId)->get();
        $createdSchools = [];
        foreach ($schools as $school) {
            $createdSchools[] = [
                'name' => $school->name,
                'created_by' => $school->user->name
            ];
        }
        return view('management.schools.index', [
            'schools' => $createdSchools
        ]);
    }
}
