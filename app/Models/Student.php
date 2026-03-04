<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $primaryKey = 'student_id';

    protected $fillable = ['user_id', 'parent_id', 'student_code', 'level', 'birth_date'];

    public function user() { return $this->belongsTo(User::class, 'user_id'); }
    public function parent() { return $this->belongsTo(StudentParent::class, 'parent_id'); }
    
    public function enrollments() { return $this->hasMany(Enrollment::class, 'student_id'); }
    public function attendance() { return $this->hasMany(Attendance::class, 'student_id'); }
    public function submissions() { return $this->hasMany(Submission::class, 'student_id'); }
    public function examResults() { return $this->hasMany(ExamResult::class, 'student_id'); }
    public function absenceRequests() { return $this->hasMany(AbsenceRequest::class, 'student_id'); }
}
