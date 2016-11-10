<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserFormRequest;
use App\Role;
use App\User;
use App\School;
use Auth;

class AccountController extends Controller
{
    public function index()
    {
        $users = [];
        $schools = School::with('users')->where('user_id', Auth::user()->school->user_id)->get();
        foreach ($schools as $school) {
            foreach ($school->users as $user) {
                $users[] = [
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->roles()->pluck('name')->first(),
                    'details_path' => url('/management/accounts') . '/' . $user->id . '/' . 'details'
                ];
            }
        }
        return view('management.accounts.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        $userId = Auth::user()->school->user_id;
        $roles = Role::getConstants();
        $schools = School::where('user_id', $userId)->get();

        $roleOptions = [];
        foreach ($roles as $key => $value) {
            $roleOptions[] = [
                'name' => $value,
                'value' => $key
            ];
        }

        $schoolOptions = [];
        foreach ($schools as $school) {
            $schoolOptions[] = [
                'name' => $school->name,
                'value' => $school->id
            ];
        }

        return view('management.accounts.create', [
            'roles' => $roleOptions,
            'schools' => $schoolOptions
        ]);
    }

    public function store(CreateUserFormRequest $request)
    {
        $role = $request->input('role');
        $school = $request->input('school');
        $user = User::create(array_merge(
            $request->all(),
            ['password' => bcrypt('secret')]
        ));
        $user->assignRole($role);
        $user->schools()->attach($school);
        return back()->with('status', 'User successfully added.');
    }

    public function accountDetails($userId) {
        $user = User::with('schools')->find($userId);
        $subjects = [];

        if (!$user) {
            return back()->with('error', 'User id invalid.');
        }

        if ($user->getRole() == \App\Role::STUDENT) {
            $subjects = [
                [
                    'id' => 1,
                    'name' => 'Math',
                    'teacher' => 'John Doe',
                    'grades_path' => url('/management/grades') . '/' . $user->id
                ],
                [
                    'id' => 2,
                    'name' => 'Science',
                    'teacher' => 'Hillary Cliff',
                    'grades_path' => url('/management/grades') . '/' . $user->id
                ]
            ];
        }

        return view('management.accounts.account.index', [
            'accountDetail' => [
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->getRole(),
                'school' => $user->schools->first()->name
            ],
            'subjects' => $subjects
        ]);
    }
}
