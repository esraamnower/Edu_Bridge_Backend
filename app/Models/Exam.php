<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $primaryKey = 'exam_id';

    protected $fillable = ['course_id', 'title', 'exam_date', 'total_mark'];

    public function course() { return $this->belongsTo(Course::class, 'course_id'); }
    public function results() { return $this->hasMany(ExamResult::class, 'exam_id'); }

}
