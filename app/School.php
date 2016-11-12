<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'schools';

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
        'name', 'user_id', 'registration_id'
    ];

    /**
     * Get the user that created the school.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The users that belong to the school.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
