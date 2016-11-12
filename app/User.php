<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'registration_id', 'name', 'email', 'password', 'main_account', 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the schools create by the user
     */
    public function schools()
    {
        return $this->belongsToMany('App\School');
    }

    public function isMainAccount()
    {
        return $this->main_account ? 'Yes' : 'No';
    }

    public function isActive()
    {
        return $this->active ? 'Yes' : 'No';
    }

    public function getRoleName()
    {
        return $this->roles()->pluck('name')->first();
    }

}