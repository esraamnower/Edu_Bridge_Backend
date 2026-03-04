<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   protected $primaryKey = 'course_id';

    protected $fillable = ['title', 'description', 'level'];

    public function departments() { return $this->hasMany(CourseDepartment::class, 'course_id'); }
    public function teachers() { return $this->hasMany(CourseTeacher::class, 'course_id'); }
    public function schedules() { return $this->hasMany(Schedule::class, 'course_id'); }
    public function lessons() { return $this->hasMany(Lesson::class, 'course_id'); }
    public function assignments() { return $this->hasMany(Assignment::class, 'course_id'); }
    public function exams() { return $this->hasMany(Exam::class, 'course_id'); }
    public function enrollments() { return $this->hasMany(Enrollment::class, 'course_id'); }
}
