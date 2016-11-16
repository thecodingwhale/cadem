<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'courses';

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
        'name', 'code', 'registration_id', 'user_id'
    ];

    /**
     * Get the user that created the course.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the curriculum that relates to the course.
     */
    public function curriculum()
    {
        return $this->hasOne('App\Curriculum');
    }
}
