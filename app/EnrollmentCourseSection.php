<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnrollmentCourseSection extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'enrollment_course_sections';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'enrollment_course_id',
        'section'
    ];
}
