<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class SettingsController extends Controller
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

    public function profile()
    {
        $role = '';
        if (Auth::user()->roles()->pluck('name')->count() == 1) {
            $role = Auth::user()->roles()->pluck('name')->first();
        }

        return view('settings.profile', [
            'user' => [
                'name' => Auth::user()->name,
                'role' => $role,
                'mainAccount' => Auth::user()->isMainAccount()
            ]
        ]);
    }
}
