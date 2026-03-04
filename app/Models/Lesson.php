<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
   protected $primaryKey = 'lesson_id';

    protected $fillable = ['course_id', 'title', 'description', 'created_at'];
    
    public $timestamps = false; // لأننا استخدمنا created_at فقط في قاعدة البيانات

    public function course() { return $this->belongsTo(Course::class, 'course_id'); }
    public function materials() { return $this->hasMany(LessonMaterial::class, 'lesson_id'); }
    public function attendance() { return $this->hasMany(Attendance::class, 'lesson_id'); }
}
