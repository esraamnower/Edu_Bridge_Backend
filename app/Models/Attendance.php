<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendance';
    protected $primaryKey = 'attendance_id';

    protected $fillable = ['student_id', 'lesson_id', 'date', 'status', 'method'];

    public function student() { return $this->belongsTo(Student::class, 'student_id'); }
    public function lesson() { return $this->belongsTo(Lesson::class, 'lesson_id'); }
}
