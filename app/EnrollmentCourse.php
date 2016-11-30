<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnrollmentCourse extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'enrollment_courses';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'enrollment_id',
        'course_id',
        'year_level'
    ];

    public function enrollment()
    {
        return $this->belongsTo('App\Enrollment');
    }

    public function course()
    {
        return $this->hasOne('App\Course', 'id', 'course_id');
    }
}
