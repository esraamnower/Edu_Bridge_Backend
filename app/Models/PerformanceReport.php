<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerformanceReport extends Model
{
   protected $primaryKey = 'report_id';

    protected $fillable = ['student_id', 'attendance_rate', 'average_grade', 'recommendations', 'generated_at'];

    public function student() { return $this->belongsTo(Student::class, 'student_id'); }
}
