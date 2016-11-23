<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subjects';

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
        'name', 'code', 'units', 'hours', 'registration_id', 'user_id'
    ];

    /**
     * Get the user that created the school.
     */
    public function curricula()
    {
        return $this->belongsToMany('App\Curriculum');
    }

}
