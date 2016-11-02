<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
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
     * Get the user that owns the school/s.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
