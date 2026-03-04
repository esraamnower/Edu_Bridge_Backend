<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AbsenceRequest extends Model
{
   protected $primaryKey = 'request_id';

    protected $fillable = ['student_id', 'date', 'reason', 'document', 'status', 'reviewed_by'];

    public function student() { return $this->belongsTo(Student::class, 'student_id'); }
    public function reviewer() { return $this->belongsTo(User::class, 'reviewed_by'); }
}
