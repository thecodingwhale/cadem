<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'year_level', 'course_id', 'section_id', 'enrollment_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
