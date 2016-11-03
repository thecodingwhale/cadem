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
                    'school' => isset($user->school) ? $user->school->name : ''
                ];
            }
        }
        return view('management.accounts.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        $roles = Role::getConstants();
        $options = [];
        foreach ($roles as $key => $value) {
            $options[] = [
                'name' => $value,
                'value' => $key
            ];
        }
        return view('management.accounts.create', [
            'roles' => $options
        ]);
    }

    public function store(CreateUserFormRequest $request)
    {
        $role = $request->input('role');
        $user = User::create(array_merge(
            $request->all(),
            ['password' => bcrypt('secret')]
        ));
        $user->assignRole($role);
        $output = $user->schools()->sync([Auth::user()->school->id], false);
        return back()->with('status', 'User successfully added.');
    }

}
