<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
   protected $primaryKey = 'submission_id';

    protected $fillable = ['assignment_id', 'student_id', 'file_url', 'submitted_at', 'grade', 'feedback'];

    public function assignment() { return $this->belongsTo(Assignment::class, 'assignment_id'); }
    public function student() { return $this->belongsTo(Student::class, 'student_id'); }
}
