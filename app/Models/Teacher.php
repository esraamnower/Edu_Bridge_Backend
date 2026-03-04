<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
   protected $primaryKey = 'teacher_id';

    protected $fillable = ['user_id', 'specialization'];

    public function user() { return $this->belongsTo(User::class, 'user_id'); }
    public function courses() { return $this->hasMany(CourseTeacher::class, 'teacher_id'); }
}

