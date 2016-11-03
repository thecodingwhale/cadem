<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserFormRequest;
use App\Role;
use App\User;
use Faker\Generator;

class UserController extends Controller
{
    public function index()
    {
        $users = [];
        foreach (User::get() as $user) {
            $role = $user->roles()->pluck('name')->first();
            $users[] = [
                'name' => $user->name,
                'email' => $user->email,
                'role' => $role
            ];
        }
        return view('management.users.index', [
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
        return view('management.users.create', [
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
        return back()->with('status', 'User successfully added.');
    }

}
