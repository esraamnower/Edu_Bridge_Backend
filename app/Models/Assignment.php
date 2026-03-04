<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $primaryKey = 'assignment_id';

    protected $fillable = ['course_id', 'title', 'description', 'due_date'];

    public function course() { return $this->belongsTo(Course::class, 'course_id'); }
    public function submissions() { return $this->hasMany(Submission::class, 'assignment_id'); }
}
