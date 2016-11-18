<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'curricula';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'registration_id', 'user_id', 'course_id', 'year_level', 'semester'
    ];

    /**
     * Get the user that created the course.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the courses for a Curriculum.
     */
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    /**
     * The subjects that belong to the curriculum.
     */
    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }

}
