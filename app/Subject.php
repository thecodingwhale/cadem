<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id'
    ];

    /**
     * Get the user who created the subject
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the user that owns the school/s.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'subject_user');
    }
}
