<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    protected $primaryKey = 'result_id';

    protected $fillable = ['exam_id', 'student_id', 'mark'];

    public function exam() { return $this->belongsTo(Exam::class, 'exam_id'); }
    public function student() { return $this->belongsTo(Student::class, 'student_id'); }
}
