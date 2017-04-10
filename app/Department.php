<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * Get students
     */
    public function Students()
    {
        return $this->hasMany('App\Student');
    }

    /**
     * Get Courses offered by department
     */
    public function Courses()
    {
        return $this->hasMany('App\Course');
    }
}
