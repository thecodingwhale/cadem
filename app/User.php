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
        'name', 'email', 'password',
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
     * Get the schools for the user.
     */
    public function schools()
    {
        return $this->belongsToMany('App\School', 'school_user');
    }

    /**
     * Get the schools for the user.
     */
    public function school()
    {
        return $this->hasOne('App\School');
    }

    /**
     * Get the schools for the user.
     */
    public function subjects()
    {
        return $this->belongsToMany('App\Subject', 'subject_user');
    }


    /**
     * Get the subject details created.
     */
    public function subject()
    {
        return $this->hasOne('App\Subject');
    }

    /**
    * Get the role name of the user
    */
    public function getRole()
    {
        return $this->roles()->pluck('name')->first();
    }
}