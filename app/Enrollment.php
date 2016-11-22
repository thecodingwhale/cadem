<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Enrollment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'enrollment';

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
        'open',
        'school_year_to',
        'school_year_from',
        'registration_id',
        'user_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'school_year_from',
        'school_year_to'
    ];

   public function setSchoolYearFromAttribute($value)
   {
       $this->attributes['school_year_from'] = Carbon::createFromFormat('Y', $value);
   }

   public function setSchoolYearToAttribute($value)
   {
       $this->attributes['school_year_to'] = Carbon::createFromFormat('Y', $value);
   }

}
