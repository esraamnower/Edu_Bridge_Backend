<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseDepartment extends Model
{
   protected $fillable = ['course_id', 'department_id'];

    public function course() { return $this->belongsTo(Course::class, 'course_id'); }
    public function department() { return $this->belongsTo(Department::class, 'department_id'); }
}
